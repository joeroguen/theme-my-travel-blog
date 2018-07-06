<?php get_header(); ?>



<div class='about-page'>
    <div class='container col-sm-8 offset-sm-2'>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>



<?php get_footer(); ?>
