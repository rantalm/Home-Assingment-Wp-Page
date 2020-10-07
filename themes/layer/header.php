<!DOCTYPE html>
<html lang="he">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<div class="container">
  <header class="header">
    <div class="header__inner">
      <div class="logo"><a href="<?= get_home_url(); ?>"><img src="/wp-content/uploads/2020/10/logo.png" alt=""></a></div>
      <div class="menu-icon" id="menu-icon">
        <div class="menu-icon__bar"></div>
        <div class="menu-icon__bar"></div>
        <div class="menu-icon__bar"></div>
      </div>
    </div>
    <nav class="main-nav" id="main-nav">
      <?php wp_nav_menu(['menu' => 'main-menu']); ?>
    </nav>
  </header>


  <body>