<?php
/* 
Template Name: newsarrivals
*/
?>

<?php get_header(); ?>
<!-- メイン -->
<main>
  <div class="wrapper">
    <div class="container">
      <div class="main-container">

        <!-- NEWSセクション -->
        <section class="newsarrivals">
          <!-- インナー -->
          <div class="news__inner">
            <!-- タイトル -->
            <h2 class="news__title section-title" data-en="newsarrivals">
              新着情報
            </h2>
            <!-- カテゴリー群 -->
            <div class="news-category">
              <!-- <ul class="category-title"> -->
              <?php $args = array(
                'title_li' => ''
              );
              wp_list_categories($args);
              ?>
              <!-- </ul> -->
            </div>
            <!-- カード群 -->
            <div class="news__cards cards">
              <!-- カード -->
              <div class="arrivals__cards cards">
                <!-- カード -->
                <?php $args = array(
                  'post_type' => array('column', 'post'), //投稿タイプを指定
                  // 'category_name' => 'news', //カテゴリースラッグ指定
                  'posts_per_page' => 6, //6件表示
                  'order'     => 'DESC', //記事の順番変更
                );
                $post_query = new WP_Query($args);
                if ($post_query->have_posts()) :
                ?>
                  <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>

                    <a href="<?php the_permalink(); ?>" class="cards__item card">
                      <h3 class="card__title">
                        <?php the_title(); ?></h3>
                      <span class="card__year">
                        <?php the_time('Y年m月d日'); ?></span>
                      <div class="card__category">
                        <ul>
                          <?php
                          // カテゴリー名の繰り返し表示
                          $categories = get_the_category();
                          foreach ($categories as $category) :
                          ?>
                            <li><?php echo $category->name; ?></li>
                          <?php endforeach; ?>
                        </ul>
                      </div>
                      <div class="card_image">
                        <?php the_post_thumbnail('array(256,160)'); ?>
                      </div>
                    </a>
                  <?php endwhile; ?>
                  <div class="arrivals__btn">
                    <!-- ボタン -->
                    <a href="" class="btn">もっと見る</a>
                  </div>
                <?php else : ?>
                  <!-- // 記事がない場合 -->
                  <p>記事が見つかりません。</p>
                <?php endif; ?>
                <!-- ボタンの囲い -->
              </div>

              <!-- ボタンの囲い -->
              <div class="pagenavi">
                <!-- ボタン -->
                <?php wp_pagenavi(); ?>
              </div>
            </div>
        </section>
      </div>

      <?php get_sidebar(); ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>