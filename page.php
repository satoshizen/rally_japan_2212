<?php get_header(); ?>
<!-- メイン -->
<main>
  <div class="wrapper">
    <div class="container">
      <div class="main-container">
        <!-- COMPANYセクション -->
        <section class="company">
          <!-- インナー -->
          <div class="company__inner">
            <!-- タイトル -->
            <h2 class="company__title section-title">
              <span class="title-en">
                <?php echo strtoupper(str_replace('-', ' ', $post->post_name)); ?></span>
              <span><?php the_title(); ?></span>
            </h2>
            <div class="content-area">
              <?php the_content(); ?>
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