<?php get_header(); ?>
<!-- メイン -->
<main>
  <div class="wrapper">
    <div class="container">
      <div class="main-container">
        <!-- NEWSセクション -->
        <section class="posts-list newarrivals">
          <!-- インナー -->
          <div class="news__inner">
            <!-- タイトル -->
            <h2 class="news__title section-title">
              <span class="title-en"><?php echo strtoupper(str_replace('-', ' ', $post->post_name)); ?></span>
              <span class="japanese"><?php the_title() ?></span>
            </h2>
            <!-- カテゴリー群 -->
            <div class="news-category">
              <!-- <ul class="category-title"> -->
              <!-- <?php $args = array(
                      'title_li' => ''
                    );
                    wp_list_categories($args);
                    ?> -->
              <!-- </ul> -->
            </div>
            <!-- カード -->
            <div class="posts-list__cards arrivals__cards cards">
              <!-- カード -->
              <?php
              $args = array(
                'posts_per_page' => 10,
                'paged' => $paged,
                'post_type' => array('column', 'post'), //投稿タイプを指定
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
              <?php else : ?>
                <!-- // 記事がない場合 -->
                <p>記事が見つかりません。</p>
              <?php endif; ?>
              <!-- ボタンの囲い -->
            </div>

            <!-- ボタンの囲い -->
            <div class="pagenavi">
              <!-- ボタン -->
              <?php
              wp_pagenavi(array(
                'query' => $post_query
              ));
              wp_reset_postdata();
              ?>
            </div>
            <!-- </div> -->
        </section>
      </div>

      <?php get_sidebar(); ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>