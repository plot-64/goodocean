<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  












  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&family=Marcellus&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css">
<?php if(is_single()): ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
<?php elseif(is_front_page()): ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<?php endif; ?>
<?php if(is_page('company') || is_front_page()): ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<?php endif; ?>

  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
<?php wp_head();?> <!-- word press が出力するソースコードを入力 -->
</head>
<body>
  <header class="header">
    <div id="header-nav" class="header-nav is-fixed">
      <div class="site-id-wrapper">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-id">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/site-id-img.svg" alt="<?php bloginfo('name'); ?>" class="site-id-img">
          <?php if(is_front_page()): ?>
  <h1 class="site-id-text"><?php bloginfo('name'); ?></h1>
<?php else: ?>
  <p class="site-id-text"><?php bloginfo('name'); ?></p>
<?php endif; ?>
        </a>
      </div>
    </div>
    <nav id="gnav" class="gnav">
      <ul class="gnav-list">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>#about">私たちの取り組み</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>#service">事業内容</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>company/"<?php if(is_page('company')) echo ' class="current"'; ?>>会社概要</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>news/"<?php if(is_single()|| is_archive()||is_home()) echo ' class="current"'; ?>>お知らせ</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>contact/"<?php if (is_page('contact'))
             echo 'class="current"'; ?>>お問い合わせ</a></li>
      </ul>
    </nav>
    <button id="btn-nav" class="btn-nav"></button>
  </header>