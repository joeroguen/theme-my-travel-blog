<?php get_header(); ?>



<div class='search-results-page'>
    <div class='container col-sm-8 offset-sm-2'>
        <h3>search results for = <em><?php the_search_query(); ?></em></h3>
        <br />
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <h5><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h5>
                <?php the_excerpt(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>



<?php get_footer(); ?>
