<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#171819">
    <meta name="msapplication-navbutton-color" content="#171819">
    <meta name="apple-mobile-web-app-status-bar-style" content="#171819">
    <?php wp_head(); ?>
    <title><?php wp_title("|", true, "right"); ?>Nemanja.dev </title>

</head>
<body>


<div class="container">
  <header class="header" data-module="HEADER">
    <a class="header__logo button button--icon" title="Home" href="/">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo.svg" alt="Nemanja.dev Logo">
      <div class="header__logo-text-wrapper">
        <span class="header__logo-text">Home</span>
      </div>
    </a>

    <?php require('template-parts/navigation.php'); ?>
  </header>
</div>
