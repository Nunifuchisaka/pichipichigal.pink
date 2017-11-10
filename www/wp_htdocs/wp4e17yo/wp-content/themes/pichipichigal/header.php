<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=320">
<meta name="format-detection" content="telephone=no">
<!-- <link rel="profile" href="http://gmpg.org/xfn/11"> -->
<link rel="apple-touch-icon" href="http://pichipichigal.pink/apple-touch-icon.png">
<meta name="apple-mobile-web-app-title" content="ぴちぴちぎゃる">

<?php wp_head(); ?>

<title><?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">

<!-- ogp -->
<meta property="og:title" content="<?php bloginfo('name'); ?>">
<meta property="og:description" content="<?php bloginfo('description'); ?>">
<meta property="og:url" content="http://pichipichigal.pink/">
<meta property="og:type" content="website">
<meta property="og:image" content="http://pichipichigal.pink/<?php echo get_template_directory_uri(); ?>/assets/img/og_image.jpg">

<!-- twitter cards -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
<meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
<meta name="twitter:url" content="http://pichipichigal.pink/" />
<meta name="twitter:image" content="http://pichipichigal.pink/assets/img/og_image.jpg" />

<!-- stylesheet -->
<!-- <link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet" /> -->
<link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css?ver=2">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/utility.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/patch.css">

<!-- analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109421512-1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/analytics.js"></script>

</head>

<body id="top" <?php body_class(); ?>>

<div class="l_wrapper_1">


<header class="g_header_1">
  <?php
  $jijii_num = rand(1,2);
  ?>
  <div class="g_header_1__2">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/g_header_1__eyecatch.jpg" alt="">
  </div>
  <div class="g_header_1__1">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/g_header_1__jijii-<?php echo $jijii_num; ?>.jpg" alt="" width="930" height="680" />
    <h1>DQRギルド《ぴちぴちぎゃる》</h1>
    <!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a> -->
  </div>
</header>


<!--
<div class="g_nav_1__toggle"><a class="menu-trigger active" href="#gnav"><span></span><span></span><span></span></a></div>

<nav id="gnav" class="g_nav_1">
  <div class="g_nav_1__1">
    <?php
    wp_nav_menu( array(
      'theme_location'=>'gnav', 
      'container'     =>'', 
      'menu_class'    =>'',
      'items_wrap'    =>'<ul class="g_nav_1__items">%3$s</ul>')
    );
    ?>
  </div>
</nav>
-->
<!-- /#gnav -->


<div class="l_container_1">
