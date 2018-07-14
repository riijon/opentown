<!DOCTYPE html>
<html class="no-js" lang="ja-jp">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-75074109-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', '2UA-75074109-2');
  </script>

  <meta charset="utf-8"/>
  <meta name="title" content="open town .inc">
  <meta name="description" content="仙台の本町でデザイン、アパレル販売、撮影キャスティング、イベント運営などの業務を行なっております。"/>
  <meta name="keywords" content="opentown,sendai,design">

  <meta property="og:title" content="open town .inc">
  <meta property="og:description" content="仙台の本町でデザイン、アパレル販売、撮影キャスティング、イベント運営などの業務を行なっております。">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="open town">
  <meta property="og:image" content="https://opentown.jp/wp-content/themes/opentown/assets/img/ogimage.jpg">
  <meta property="og:url" content="https://opentown.jp/">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>open town</title>

  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/vnd.microsoft.icon">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/vnd.microsoft.icon">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">

  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <?php wp_deregister_script('jquery'); ?>
  <?php wp_head(); ?>
</head>
<body>
<header>
  <div class="header">
    <a class="logo" href="/">OPEN TOWN</a>
    <ul>
      <li><a href="/#about">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/about.svg" alt="" width="68px">
        </a></li>
      <li><a href="/works">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/work.svg" alt="" width="64px">
        </a></li>
      <li><a href="/#service">
          <img class="header_service pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/service.svg" alt="">
        </a></li>
      <li><a href="/company">
          <img class="header_company pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/company.svg" alt="">
        </a></li>
      <li><a href="/contact">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact.svg" alt="">
        </a></li>
    </ul>
  </div>
</header>
<!-- 開閉用ボタン -->
<div class="menu-btn sp" id="js__btn">
  <span data-txt-menu="MENU" data-txt-close="CLOSE"></span>
  <span></span>
</div>
<!-- モーダルメニュー -->
<nav class="menu sp" id="js__nav">
  <ul>
    <li><a href="#about"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/about_w.svg" alt=""></a></li>
    <li><a href="/works"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/work_w.svg" alt=""></a></li>
    <li><a href="#service"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/service_w.svg" alt=""></a></li>
    <li><a href="/company"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/company_w.svg" alt=""></a></li>
    <li><a href="/contact"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact_w.svg" alt=""></a></li>
  </ul>
</nav>

