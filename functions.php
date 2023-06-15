<?php
// CSSの読み込み・JSの読み込み
function mp_enqueue_files()
{
  // WordPress提供のjquery.jsを読み込まない
  wp_deregister_script('jquery');

  // jqueryの読み込み
  wp_enqueue_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js", "", "3.4.1", false);

  // fontawesome 
  wp_enqueue_script('fontawesome', 'http://kit.fontawesome.com/33d01a83f0.js', "", "", false);

  // サイト共通のJS
  wp_enqueue_script('hamburger', get_template_directory_uri() . '/js/g-nav.js', array('jquery'), '1.0', true);

  wp_enqueue_script('slick', "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array('jquery'), '1.8.1', true);

  wp_enqueue_script('header', get_template_directory_uri() . '/js/slider.js', array('jquery', 'slick'), '1.0', true);


  //サイト共通のCSSの読み込み
  wp_enqueue_style('normalize', 'http://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css', '', '8.0.1');

  wp_enqueue_style('slick-style', "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css", array('normalize'), '1.8.1');

  wp_enqueue_style('slick-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array('normalize', 'slick-style'), '1.8.1');


  wp_enqueue_style('mp_main', get_stylesheet_uri(), array('normalize', 'slick-style', 'slick-theme'), '1.0');
}
add_action('wp_enqueue_scripts', 'mp_enqueue_files');

// テーマのサポート
function mp_theme_support()
{
  add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
}
add_action('after_setup_theme', 'mp_theme_support');

//SVGをアップロード
function mp_add_file_types_to_uploads($file_types)
{

  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes);

  return $file_types;
}
add_action('upload_mimes', 'mp_add_file_types_to_uploads');

// post_type = 'post' でもアーカイブページを作る
function post_has_archive_func($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive_func', 10, 2);

/* ========================================================
フロント：ブロックエディタ用CSSの追加
=========================================================*/
add_action('after_setup_theme', function () {
  // ブロックエディタ用スタイル機能をテーマに追加
  add_theme_support('editor-styles');
  // ブロックエディタ用CSSの読み込み
  add_editor_style('/common/css/editor-style.css');
});

/* ========================================================
管理画面：ブロックエディタ用CSSの追加
=========================================================*/
add_action('admin_enqueue_scripts', function ($hook_suffix) {
  // 新規・編集投稿ページのみ読み込み
  if ('post.php' === $hook_suffix || 'post-new.php' === $hook_suffix) {
    // CSSディレクトリの設定
    $uri = get_template_directory_uri() . "/common/css/editor-style.css";
    // CSSファイルの読み込み
    wp_enqueue_style("smart-style", $uri, array(), wp_get_theme()->get('Version'));
    // JSディレクトリ
    $uri = get_template_directory_uri() . "/common/js/editor-style.js";
    // JSァイルの読み込み
    wp_enqueue_script('smart-script', $uri, array(), wp_get_theme()->get('Version'), true);
  }
});

/* ========================================================
管理画面ブロックエディタ用のJSを追加
enqueue_block_editor_asset：ブロックエディタ用のフック
=========================================================*/
add_action('enqueue_block_editor_assets', function () {
  // ブロック用のJSは第3引数を指定する必要がある
  wp_enqueue_script('new-theme-editor-js', get_theme_file_uri('common/js/editor.js'), [
    'wp-element',
    'wp-rich-text',
    'wp-editor',
  ]);
});

/* =========================================================
the_archive_title 余計な文字を削除 
==========================================================*/

/**
 * タイトルを調整する
 * 自動で作られるアーカイブページのタイトルを調整する。get_the_archive_titleのフィルターフックとして利用する。
 * 
 * @param string $title
 * 
 * @return string
 */
function mp_change_title($title)
{
  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_tax()) {
    $title = single_term_title('', false);
  } elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
  } elseif (is_date()) {
    $title = get_the_time('Y年n月');
  } elseif (is_search()) {
    $title = '検索結果：' . esc_html(get_search_query(false));
  } elseif (is_404()) {
    $title = '「404」ページが見つかりません';
  } else {
  }
  return $title;
}
add_filter('get_the_archive_title', 'mp_change_title');

/*
メインループでカテゴリーアーカイブの時にcolumnのpost_typeを含める
*/
function add_column_for_main_loop($query)
{
  if (!is_admin() && $query->is_main_query()) { // 管理画面ではなくメインループだったら
    if (is_category()) { // カテゴリーアーカイブだったら
      $query->set('post_type', array('post', 'column')); // クエリの条件に'post_type'として'post'と'column'を指定する
    }
  }
}
add_action('pre_get_posts', 'add_column_for_main_loop'); // 記事を取得するクエリを実行する前にadd_column_for_main_loopを実行
