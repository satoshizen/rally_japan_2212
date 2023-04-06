 <?php get_header(); ?>
        <!-- メイン -->
  <main>
    <div class="wrapper">
      <div class="container">
        <div class="main-container">
          <!-- COLUMNセクション -->
          <section class="column_indiv">
            <!-- インナー -->
            <div class="indiv-inner">
                <?php if (have_posts() ) : ?>
                <?php while (have_posts() ) : the_post();  ?>

                <div class="indiv-category">
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
                <h1 class="indiv-title"><?php the_title(); ?></h1>
                <span class="indiv-year"><?php the_time('Y年m月d日'); ?></span>
                <div class="indiv-image"><?php the_post_thumbnail('array(256,160)'); ?></div>
                <div class="indiv-text">
                  <p><?php the_content(); ?></p>
                </div>
                  <?php endwhile; ?>
                  <?php else : ?>
                  <!--  記事がない場合 -->
                  <p>記事が見つかりません。</p>
                  <?php endif; ?>
            </div>
          </section>
          <!-- ボタンの囲い -->
          <div class="page-section">
            <!-- ボタン -->
            <div class="nav-previous">
              <?php if (get_previous_post()):?>
              <?php previous_post_link('&laquo; %link', '前の記事へ'); ?>
              <?php endif; ?>
            </div>
            <div class="nav-next">
              <?php if (get_next_post()):?>
              <?php next_post_link('%link &raquo;', '次の記事へ'); ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </main>

        <!-- フッター -->
        <?php get_footer(); ?>
