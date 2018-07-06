<?php
/**
 * Template Name: About
 *
 */
?>



<?php $isAboutPage = true; ?>
<?php get_header(); ?>



<div class='about-page'>
    <div class='container col-sm-6 offset-sm-3'>
        <h2>welcome to my travel blog</h2>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>



<?php get_footer(); ?>
