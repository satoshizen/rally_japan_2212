<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ページの説明が入ります">


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- ヘッダー -->
  <header class="header">
    <!-- ここにヘッダーが入ります -->
    <div class="header-inner">
      <div class="button">
        <div class="openbtn"><span></span><span></span><span></span></div>
        <p class="menu">MENU</P>
      </div>
        <?php wp_nav_menu(array(
          'container' => 'nav',
          'container_id' => 'g-nav',
          'items_wrap' => '<div id="%1$s g-nav-list" class="%2$s"><ul>%3$s</ul></div>',
          'menu' => 'global-navigation'
        )); ?>

        <section class="header-logo">
          <a href="<?php echo home_url(); ?>">
            <img class="logo image" src="<?php echo get_template_directory_uri(); ?>/img/rally_logo_sm.png" alt="Rally Japan">
            <img class="logo-m image" src="<?php echo get_template_directory_uri(); ?>/img/rally_logo.png" alt="Rally Japan">
          </a>
        </section>

        <?php wp_nav_menu(array(
          'container' => 'nav',
          'container_class' => 'pc-nav',
          'items_wrap' => '<ul id="%1$s" class="%2$s pc-nav-list">%3$s</ul>',
          'menu' => 'global-navigation'
        )); ?>

    </div>
  </header>