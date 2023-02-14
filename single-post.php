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
              <p>カテゴリー</p>
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
            <?php if(have_posts() ) : ?>
              <?php while(have_posts() ) : the_post();  ?>
                <div class="cards__item card">
                  <h3 class="card__title"><?php the_title(); ?>
                  </h3>
                  <span class="card__year"><?php the_time('Y年m月d日'); ?></span>
                  <div class="card__category">
                    <span>カテゴリー1</span>
                  </div>
                  <div class="card_image">
                  <?php the_post_thumbnail('array(256,160)'); ?>
                  </div>
                </div>
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
            <a href="news_indiv.html" class="cards__item card--1">
              <h3 class="card__title">
                タイトルがはいります。タイトルがはいります。タイトルがはいります。
              </h3>
              <div class="card__num"><span>1</span></div>
              <span class="card__year">2022/12/12</span>
              <div class="card__category">
                <span>カテゴリー</span>
              </div>
              <div class="card__img">
                <img src="./img/WRC_2022_TOP.jpg" alt="">
              </div>
            </a>
            <!-- カード -->
            <a href="news_indiv.html" class="cards__item card--2">
              <h3 class="card__title">
                タイトルがはいります。タイトルがはいります。タイトルがはいります。
              </h3>
              <div class="card__num"><span>2</span></div>
              <span class="card__year">2022/12/12</span>
              <div class="card__category">
                <span>カテゴリー</span>
              </div>
              <div class="card__img">
                <img src="./img/WRC_2022_TOP.jpg" alt="">
              </div></a>
            
            <!-- カード -->
            <a href="news_indiv.html" class="cards__item card--3">
              <h3 class="card__title">
                タイトルがはいります。タイトルがはいります。タイトルがはいります。
              </h3>
              <div class="card__num"><span>3</span></div>
              <span class="card__year">2022/12/12</span>
              <div class="card__category">
                <span>カテゴリー</span>
              </div>
              <div class="card__img">
                <img src="./img/WRC_2022_TOP.jpg" alt="">
              </div>
            </a>
            <!-- カード -->
            <a href="news_indiv.html" class="cards__item card--4">
              <h3 class="card__title">
                タイトルがはいります。タイトルがはいります。タイトルがはいります。
              </h3>
              <div class="card__num"><span>4</span></div>
              <span class="card__year">2022/12/12</span>
              <div class="card__category">
                <span>カテゴリー</span>
              </div>
              <div class="card__img">
                <img src="./img/WRC_2022_TOP.jpg" alt="">
              </div>
            </a>
            <!-- カード -->
            <a href="news_indiv.html" class="cards__item card--5">
              <h3 class="card__title">
                タイトルがはいります。タイトルがはいります。タイトルがはいります。
              </h3>
              <div class="card__num"><span>5</span></div>
              <span class="card__year">2022/12/12</span>
              <div class="card__category">
                <span>カテゴリー</span>
              </div>
              <div class="card__img">
                <img src="./img/WRC_2022_TOP.jpg" alt="">
              </div>
            </a>
            <!-- カード -->
            <a href="news_indiv.html" class="cards__item card--6">
              <h3 class="card__title">
                タイトルがはいります。タイトルがはいります。タイトルがはいります。
              </h3>
              <div class="card__num"><span>6</span></div>
              <span class="card__year">2022/12/12</span>
              <div class="card__category">
                <span>カテゴリー</span>
              </div>
              <div class="card__img">
                <img src="./img/WRC_2022_TOP.jpg" alt="">
              </div>
            </a>
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
            <a href="news_indiv.html" class="cards__item card--1">
              <h3 class="card__title">
                タイトルがはいります。タイトルがはいります。タイトルがはいります。
              </h3>
              <div class="card__num"><span>1</span></div>
              <span class="card__year">2022/12/12</span>
              <div class="card__category">
                <span>カテゴリー</span>
              </div>
              <div class="card__img">
                <img src="./img/WRC_2022_TOP.jpg" alt="">
              </div>
            </a>
            <!-- カード -->
            <a href="news_indiv.html" class="cards__item card--2">
              <h3 class="card__title">
                タイトルがはいります。タイトルがはいります。タイトルがはいります。
              </h3>
              <div class="card__num"><span>2</span></div>
              <span class="card__year">2022/12/12</span>
              <div class="card__category">
                <span>カテゴリー</span>
              </div>
              <div class="card__img">
                <img src="./img/WRC_2022_TOP.jpg" alt="">
              </div></a>
            
            <!-- カード -->
            <a href="news_indiv.html" class="cards__item card--3">
              <h3 class="card__title">
                タイトルがはいります。タイトルがはいります。タイトルがはいります。
              </h3>
              <div class="card__num"><span>3</span></div>
              <span class="card__year">2022/12/12</span>
              <div class="card__category">
                <span>カテゴリー</span>
              </div>
              <div class="card__img">
                <img src="./img/WRC_2022_TOP.jpg" alt="">
              </div>
            </a>
            <!-- カード -->
            <a href="news_indiv.html" class="cards__item card--4">
              <h3 class="card__title">
                タイトルがはいります。タイトルがはいります。タイトルがはいります。
              </h3>
              <div class="card__num"><span>4</span></div>
              <span class="card__year">2022/12/12</span>
              <div class="card__category">
                <span>カテゴリー</span>
              </div>
              <div class="card__img">
                <img src="./img/WRC_2022_TOP.jpg" alt="">
              </div>
            </a>
            <!-- カード -->
            <a href="news_indiv.html" class="cards__item card--5">
              <h3 class="card__title">
                タイトルがはいります。タイトルがはいります。タイトルがはいります。
              </h3>
              <div class="card__num"><span>5</span></div>
              <span class="card__year">2022/12/12</span>
              <div class="card__category">
                <span>カテゴリー</span>
              </div>
              <div class="card__img">
                <img src="./img/WRC_2022_TOP.jpg" alt="">
              </div>
            </a>
            <!-- カード -->
            <a href="news_indiv.html" class="cards__item card--6">
              <h3 class="card__title">
                タイトルがはいります。タイトルがはいります。タイトルがはいります。
              </h3>
              <div class="card__num"><span>6</span></div>
              <span class="card__year">2022/12/12</span>
              <div class="card__category">
                <span>カテゴリー</span>
              </div>
              <div class="card__img">
                <img src="./img/WRC_2022_TOP.jpg" alt="">
              </div>
            </a>
          </div>
          <!-- ボタンの囲い -->
          <div class="ranking__btn">
            <!-- ボタン -->
            <a href="" class="btn">もっと見る</a>
          </div>
        </div>
      </section>
    </div>

  </div>
</main>

  <?php get_footer(); ?>

