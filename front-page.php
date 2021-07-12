<?php get_header(); ?>
  
  <div data-router-view="front-page">
    <?php require('template-parts/intro.php'); ?>
    <?php require('template-parts/latest-articles.php'); ?>
  </div>

<?php get_footer(); ?>