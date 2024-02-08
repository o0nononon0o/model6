<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2カラム</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/main_style.css">
  <?php wp_head(); ?>
</head>

<body>

  <header>
    <div class="header">
      <h1>Title</h1>
      <nav>
        <ul>
          <li><a href="#news">News</a></li>
          <li><a href="#product">Product</a></li>
          <li><a href="#review">Review</a></li>
          <li><a href="#items">Items</a></li>
          <li><a href="#sns">SNS</a></li>
          <a href="#contact" class="contact-btn">お問い合わせ</a>
        </ul>
      </nav>
      <div class="hamburger-menu">
        <div class="hamburger-menu_btn">
          <span class="ham1"></span><span class="ham2"></span><span class="ham3"></span>
        </div>
        <div class="hamburger-menu_inner">
          <h3>Menu</h3>
          <ul>
            <li><a href="#news">News</a></li>
            <li><a href="#product">Product</a></li>
            <li><a href="#review">Review</a></li>
            <li><a href="#items">Items</a></li>
            <li><a href="#sns">SNS</a></li>
          </ul>
          <a href="#contact" class="contact-btn">お問い合わせ</a>
        </div>
      </div>
    </div>
  </header>