<?php get_header(); ?>
<!-- メイン -->
<main>
  <div class="wrapper">
    <div class="container">
      <div class="main-container page">
        <!-- COLUMNセクション -->
        <section class="nonpage">
          <!-- インナー -->
          <h2>アクセスしたページは見つかりません。</h2>
          <p>アクセスしたurlアドレスにお間違いがない様でしたら、ページの移動、または削除されている可能性があります。
          <br>お手数ですがサイトの『トップページへ戻る』からホームへ戻りRALLY JAPANサイトをお楽しみ頂きますようお願い致します</br>
          <div class="modoru"><a href="<?php echo home_url(); ?>">トップページに戻る</a></div>

        </section>
      </div>

      <?php get_sidebar(); ?>

    </div>
  </div>
</main>

<!-- フッター -->
<?php get_footer(); ?>