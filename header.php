<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>
    <?php
    if (!is_home()){
      wp_title('-',true,'right');
    }
    bloginfo('name'); ?>
  </title>

  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" type="text/css"/>

  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">


  <?php
  wp_enqueue_script('jquery');
  wp_enqueue_script('hotel-common', get_template_directory_uri(). '/js/common.js');
  wp_head();
  ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118760641-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-118760641-1');
  </script>
</head>

<body class="<?php body_class(); ?>">
  <div class="globalHeader">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
  </div>

  <div class="header-head">
    <div class="header-logo">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="旅するシンガーソングライター">
      </a>
    </div>
  </div>
  
  <div class="header-nav">
    <div class="header-nav-inner">
      <div class="menu">
        <?php
        $args = array(
          'menu' => 'header-nav', //管理画面で作成したメニューの名前
          'container' => false, //<ul>タグを囲んでいる<div>タグを削除
        );
        wp_nav_menu( $args );
        ?>
      </div>
    </div>
  </div>

  <div class="header-pageokuri">
    <p>≫</p>
  </div>
  <!--
  <?php get_search_form(); ?>
  -->
  <div class="top-panel">
    <div class="top-img__pc">
      <?php if( is_home() ): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/top-img__pc.jpg" alt="ヘッダー">
      <?php endif; ?>
    </div>
    <div class="top-img__sp">
      <?php if( is_home() ): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/top-img__sp.jpg" alt="ヘッダー">
      <?php endif; ?>
    </div>
    <div class="hajimete-button">
    <?php if( is_home() ): ?>
      <a href="<?php echo get_permalink(3669);?>">初めての方はこちら！</a>
    <?php endif; ?>
    </div>
  </div>
</body>
