<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WordPress theme development</title>
</head>
<body>

<?php wp_head(); ?>

<header class="header container" data-module="HEADER">
  <a href="/">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo.svg" alt="Nemanja.dev Logo">
  </a>

  <?php require('template-parts/navigation.php'); ?>
</header>
