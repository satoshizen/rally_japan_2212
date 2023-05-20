<?php get_header(); ?>
<!-- メイン -->
<main>
  <div class="wrapper">
    <div class="container">
      <div class="main-container">
        <!-- COLUMNセクション -->
        <section class="column">
          <!-- インナー -->
          <div class="column__inner">

            <!-- タイトル -->
            <h2 class="column__title section-title" data-en="column">
              コラム
            </h2>
            <!-- カテゴリー群 -->
            <div class="column-category">
              <ul class="category-title">
                <?php $args = array(
                  'title_li' => ''
                );
                wp_list_categories($args);
                ?></ul>
              <div class="column__cards cards">
                <!-- カード -->
                <?php if (have_posts()) : ?>
                  <?php while (have_posts()) : the_post();  ?>
                    <a href="<?php the_permalink(); ?>" class="cards__item card">
                      <h3 class="card__title">
                        <?php the_title(); ?></h3>
                      <span class="card__year"><?php the_time('Y年m月d日'); ?></span>
                      <div class="card__category">
                      <ul>   
                        <?php     
                          // カテゴリー名の繰り返し表示
                          $categories = get_the_category();
                          foreach( $categories as $category ):
                        ?>
                        <li><?php echo $category->name; ?></li>
                        <?php endforeach;?>
                      </ul>
                      </div>
                      <div class="card_image">
                        <?php the_post_thumbnail('array(256,160)'); ?>
                      </div>
                    </a>
                  <?php endwhile; ?>
                <?php else : ?>
                  <!--  記事がない場合 -->
                  <p>記事が見つかりません。</p>
                <?php endif; ?>
              </div>
              <!-- ボタンの囲い -->
              <div class="pagenavi">
                <!-- ボタン -->
                <?php wp_pagenavi(); ?>
              </div>
            </div>
          </div>
        </section>
      </div>

      <?php get_sidebar(); ?>

    </div>
  </div>
</main>

<!-- フッター -->
<?php get_footer(); ?>