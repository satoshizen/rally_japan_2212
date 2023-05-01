<div class="sub-container">
  <!-- ACCESS RANKINGセクション -->
  <section class="ranking">
    <!-- インナー -->
    <div class="ranking__inner">
      <!-- タイトル -->
      <h2 class="ranking__title section-title" data-en="access ranking">
        アクセスランキング
      </h2>
      <?php
      if (function_exists('wpp_get_mostpopular')) {
        $wpp_option = array( // ランキングの設定
          'range' => 'weekly', //集計期間。 daily, weekly, monthly, all のいずれかを指定
          'post_type' => 'post, column', //投稿タイプを選択
          'order_by' => 'views',
          // 'term_id' => $cat->term_id, //カテゴリーページで、現状いるページのカテゴリのみ、ランキング表示する時
          'limit' => 6
        );
        $wpp_query = new \WordPressPopularPosts\Query($wpp_option);
        $wpp_query_ids = array_map(
          function ($wppost) {
            return (int)$wppost->id;
          },
          $wpp_query->get_posts()
        );
      }
      ?>
      <!-- カード群 -->
      <ol class="ranking__cards cards">
        <!-- カード -->
        <?php
        $wpp_args = array(
          'posts_per_page' => '10',
          'post_type' => array('post', 'column'),
          'post__in' => $wpp_query_ids, // 先ほどのランキング配列を入れる
          'orderby' => 'post__in' // 配列の順番で表示する
        );
        $wpp_query = new WP_Query($wpp_args);
        ?>
        <?php if ($wpp_query->have_posts()) : ?>
          <?php
          $rank = 0;
          while ($wpp_query->have_posts()) : $wpp_query->the_post();
            $rank += 1;
          ?>

            <!-- ランキングに入れたい内容を入れる -->
            <a href="<?php the_permalink(); ?>" class="cards__item card--<?php echo $rank; ?>">
              <h3 class="card__title">
                <?php the_title(); ?></h3>
              <div class="card__num">
                <span><?php echo $rank; ?></span>
              </div>
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
        <?php wp_reset_query(); ?>
      </ol>
    </div>
  </section>
  <!-- NEW ARRIVALSセクション -->
  <section class="arrivals">
    <!-- インナー -->
    <div class="arrivals__inner">
      <!-- タイトル -->
      <h2 class="arrivals__title section-title" data-en="New Arrivals">
        新着情報
      </h2>
      <!-- カード群 -->
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
            <a href="<?php echo home_url('/news-arrivals') ?>" class="btn">もっと見る</a>
          </div>
        <?php else : ?>
          <!-- // 記事がない場合 -->
          <p>記事が見つかりません。</p>
        <?php endif; ?>
        <!-- ボタンの囲い -->
      </div>
  </section>

</div>