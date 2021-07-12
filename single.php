<?php get_header(); ?>

    <div data-router-view="single">
        <?php require('template-parts/blog-post.php'); ?>
        <a href="<?php echo home_url(); ?>">HOME</a>
    </div>

<?php get_footer(); ?>