        <?php get_header(); ?>
        <!-- メイン -->
        <main>
          <div class="wrapper">
            <!-- スライダー -->
            <div class="slider-for">
              <!-- カード -->
              <?php $args = array(
                'post_type' => 'post', //投稿タイプを指定
                'post_per_page' => 6, //6件表示
                'order'     => 'DESC', //記事の順番変更
              );
              $post_query = new WP_Query($args);
              if ($post_query->have_posts()) :
              ?>
                <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>

                  <div class="c-slide">
                    <a href="<?php the_permalink(); ?>" class="cards__item card">
                      <div class="slide-t">
                        <h3 class="card__title">
                          <?php the_title(); ?>
                        </h3>
                        <div class="inner-text">
                          <span class="card__year">
                            <?php the_time('Y年m月d日'); ?></span>
                          <div class="card__category">
                            <span>カテゴリー</span>
                          </div>
                        </div>
                      </div>
                      <div class="card_image">
                        <?php the_post_thumbnail('array(256,160)'); ?>
                      </div>
                    </a>
                  </div>
                <?php endwhile; ?>
              <?php else : ?>
                <!-- // 記事がない場合 -->
                <p>記事が見つかりません。</p>
              <?php endif; ?>
            </div>
            <div class="slider-nav">
              <!-- カード -->
              <?php $args = array(
                'post_type' => 'post', //投稿タイプを指定
                'post_per_page' => 6, //6件表示
                'order'     => 'DESC', //記事の順番変更
              );
              $post_query = new WP_Query($args);
              if ($post_query->have_posts()) :
              ?>
                <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>

                  <div class="cards__item card">
                    <div class="card_image">
                      <?php the_post_thumbnail('array(256,160)'); ?>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php else : ?>
                <!-- // 記事がない場合 -->
                <p>記事が見つかりません。</p>
              <?php endif; ?>

            </div>
            <div class="container">
              <div class="main-container">
                <!-- NEWSセクション -->
                <section class="news">
                  <!-- インナー -->
                  <div class="news__inner">
                    <!-- タイトル -->
                    <h2 class="news__title section-title" data-en="news">
                      最新ニュース
                    </h2>
                    <!-- カード群 -->
                    <div class="news__cards cards">
                      <!-- <div class="news-container"> -->
                      <!-- カード -->
                      <?php $args = array(
                        'post_type' => 'post', //投稿タイプを指定
                        'category_name' => 'news', //カテゴリースラッグ指定
                        'post_per_page' => 6, //6件表示
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
                          <!-- // 記事がない場合 -->
                          <p>記事が見つかりません。</p>
                          <?php endif; ?>
                      <!-- </div> -->
                    </div>
                    <!-- ボタンの囲い -->
                    <div class="news__btn">
                      <!-- ボタン -->
                      <a href="<?php echo home_url('category/news/') ?>" class="btn">もっと見る</a>
                    </div>
                  </div>
                </section>
                <!-- COLUMNセクション -->
                <section class="column">
                  <!-- インナー -->
                  <div class="column__inner">
                    <!-- タイトル -->
                    <h2 class="column__title section-title" data-en="column">
                      最新コラム
                    </h2>
                    <!-- カード群 -->
                    <div class="column__cards cards">
                      <!-- カード -->
                      <?php
                      $args = array(
                        'post_type' => 'column', //投稿タイプを指定
                        'post_per_page' => 6, //6件表示
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
                          <!-- // 記事がない場合 -->
                          <p>記事が見つかりません。</p>
                          <?php endif; ?>
                        </a>
                      </div>
                        <!-- ボタンの囲い -->
                        <div class="column__btn">
                          <!-- ボタン -->
                          <a href="<?php echo home_url('/column') ?>" class="btn">もっと見る</a>
                        </div>
                  </div>
                </section>
              </div>

              <?php get_sidebar(); ?>
            </div>
          </div>
        </main>

        <?php get_footer(); ?>