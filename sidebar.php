<div class="sub-container">
  <!-- ACCESS RANKINGセクション -->
  <section class="ranking">
    <!-- インナー -->
    <div class="ranking__inner">
      <!-- タイトル -->
      <h2 class="ranking__title section-title" data-en="access ranking">
        アクセスランキング
      </h2>
      <!-- カード群 -->
      <div class="ranking__cards cards">
        <!-- カード -->
        <?php $args = array(
          'post_type' => 'post', //投稿タイプを指定
          // 'category_name' => 'news', //カテゴリースラッグ指定
          'post_per_page' => 6, //6件表示
          'order'     => 'DESC', //記事の順番変更
        );
        $post_query = new WP_Query($args);
        if ($post_query->have_posts()) :
        ?>
          <?php
          $rank = 0;
          while ($post_query->have_posts()) : $post_query->the_post();
            $rank += 1; // または $rank++;
          ?>

            <a href="<?php the_permalink(); ?>" class="cards__item card--<?php echo $rank; ?>">
              <h3 class="card__title">
                <?php the_title(); ?></h3>
              <div class="card__num">
                <span><?php echo $rank; ?></span>
              </div>
              <span class="card__year">
                <?php the_time('Y年m月d日'); ?></span>
              <div class="card__category">
                <span>カテゴリー</span>
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

      </div>
      <!-- ボタンの囲い -->
      <div class="ranking__btn">
        <!-- ボタン -->
        <a href="" class="btn">もっと見る</a>
      </div>
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
          'post_type' => 'post', //投稿タイプを指定
          // 'category_name' => 'news', //カテゴリースラッグ指定
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
              <div class="card__num">
                <span>1</span>
              </div>
              <span class="card__year">
                <?php the_time('Y年m月d日'); ?></span>
              <div class="card__category">
                <span>カテゴリー</span>
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
        <div class="ranking__btn">
          <!-- ボタン -->
          <a href="" class="btn">もっと見る</a>
        </div>
      </div>
  </section>

</div>