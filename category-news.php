<?php get_header(); ?>
<!-- メイン -->
<main>
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
          <!-- カテゴリー群 -->
          <ul class="news__tag">
            <li class="tag_title">
              <p>news</p>
            </li>
            <li class="tag_title">
              <p>ニュース05</p>
            </li>
            <li class="tag_title">
              <p>news03</p>
            </li>
            <li class="tag_title">
              <p>カテゴリー</p>
            </li>                
            <li class="tag_title">
              <p>カテゴリー</p>
            </li>
            <li class="tag_title">
              <p>カテゴリー</p>
            </li>
          </ul>
          <!-- カード群 -->
          <div class="news__cards cards">

            <!-- カード -->
            <?php if (have_posts() ) : ?>
              <?php while (have_posts() ) : the_post();  ?>
                <a href="<?php the_permalink(); ?>" class="cards__item card">
                  <h3 class="card__title"><?php the_title(); ?>
                  </h3>
                  <span class="card__year">
                    <?php the_time('Y年m月d日'); ?></span>
                  <div class="card__category">
                    <span>カテゴリー1</span>
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
          <div class="news__btn">
            <!-- ボタン -->
            <a href="" class="btn">もっと見る</a>
          </div>
        </div>
      </section>
    </div>

    <?php get_sidebar(); ?>

  </div>
</main>

  <?php get_footer(); ?>

