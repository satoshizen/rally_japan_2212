<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>トップページ</title>
        <meta name="description" content="ページの説明が入ります">


        <?php wp_head(); ?>
    </head>
    <body>

        <!-- ヘッダー -->
        <header class="header">
          <!-- ここにヘッダーが入ります -->
          <div class="header-inner">
              <div class="button">
                <div class="openbtn"><span></span><span></span><span></span></div>
                <p class="menu">MENU</p>
              </div>
              <nav id="g-nav">
                  <div id="g-nav-list"><!--ナビの数が増えた場合縦スクロールするためのdiv※不要なら削除-->
                      <ul>
                          <li><a href="index.html">HOME</a></li>  
                          <li><a href="news.html">NEWS</a></li>  
                          <li><a href="column.html">COLUMN</a></li>  
                          <li><a href="movie.html">MOVIE</a></li>
                          <li><a href="privacy.html">PRIVACY POLICY</a></li>
                          <li><a href="company.html">COMPANY</a></li>
                          <li><a href="contact.html">CONTACT</a></li>
                      </ul>
                  </div>
              </nav>
              <section class="header-logo">
                <a href="index.html">
                  <img class="logo image" src="./img/rally_logo_02.png" alt="Rally Japan">
                  <img class="logo-m image" src="./img/rally_logo_01.png" alt="Rally Japan">
                </a>
              </section>
              <nav class="pc-nav">
                  <ul class="pc-nav-list">
                      <li><a href="index.html">HOME</a></li>  
                      <li><a href="news.html">NEWS</a></li>  
                      <li><a href="column.html">COLUMN</a></li>  
                      <li><a href="movie.html">MOVIE</a></li>
                      <li><a href="privacy.html">PRIVACY POLICY</a></li>
                      <li><a href="company.html">COMPANY</a></li>
                      <li><a href="contact.html">CONTACT</a></li>
                  </ul>
              </nav>                   
          </div>
        </header>
