<?php get_header(); ?>



<div class='row no-gutters'>
<?php if ( have_posts() ) : ?>
    <!-- sectionmain sectionleft sectionposts sectionblog -->
    <div class='section-main col-md-9'>
        <?php while ( have_posts() ) : the_post(); ?>
            <div id='<?php the_ID(); ?>' <?php post_class(); ?>>
                <span class='date offset-md-2'><?php the_time( 'F j, Y' ); ?></span>
                <h3 class='trip-name offset-md-2'><?php the_category(); ?></h3>
                <h2 class='title offset-md-2'><?php the_title(); ?></h2>
                <?php
                    if ( has_post_thumbnail() ) {
                        $post_thumbnail_args = array( 'class' => 'featured-image' );
                        the_post_thumbnail( '', $post_thumbnail_args );
                    }
                ?>
                <div class="content offset-md-2">
                    <?php the_content(); ?>
                </div>
                <div class='tags offset-md-2'>
                    <?php the_tags( $before = false ); ?>
                </div>
                <div class="mtb-post-pagination offset-md-2">
                    <?php wp_link_pages(); ?>
                </div>
            </div>
            <div class='button-view-more-blogs offset-sm-2'>
                <?php previous_post_link(); next_post_link(); ?>
            </div>
            <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    echo '<div class="offset-md-2">';
                        comments_template();
                    echo '</div>';
                endif;
            ?>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
    <!-- sectionsidebar -->
    <div class='section-sidebar col-md-3'>
        <div class='sidebar-container'>

            <img class='photo' src='<?php echo get_option( 'profile_photo' ); ?>' alt='[image of blog owner]' />
            <p class='introduction'>
                <em><?php echo get_option( 'greeting_message' ); ?></em>
                <br />
                <?php echo get_option( 'short_intro' ); ?>
            </p>
            <div class='stat'>
                <span class='total'><?php echo get_option( 'total_countries_visited' ); ?></span>
                <p class='description'>countries visited</p>
            </div>
            <div class='stat'>
                <span class='total'><?php echo get_option( 'total_miles_traveled' ); ?></span>
                <p class='description'>miles traveled</p>
            </div>
            <h3>favs</h3>
            <ul class='list'>
                <?php
                //get_option variables for favs list
                $fav_food_val = get_option( 'fav_food_post_url' );
                $fav_hotel_val = get_option( 'fav_hotel_post_url' );
                $fav_resort_val = get_option( 'fav_resort_post_url' );
                $fav_night_life_val = get_option( 'fav_night_life_post_url' );
                $fav_people_val = get_option( 'fav_people_post_url' );
                $fav_shopping_val = get_option( 'fav_shopping_post_url' );
                $fav_weather_val = get_option( 'fav_weather_post_url' );
                $fav_sight_seeing_val = get_option( 'fav_sight_seeing_post_url' );
                ?>
                <?php if ( ! empty( $fav_food_val ) ) : ?>
                    <li>food<a href='<?php echo get_option( 'fav_food_post_url' ); ?>'><?php echo get_option( 'fav_food' ); ?></a></li>
                <?php endif; ?>
                <?php if ( ! empty( $fav_hotel_val ) ) : ?>
                    <li>hotel<a href='<?php echo get_option( 'fav_hotel_post_url' ); ?>'><?php echo get_option( 'fav_hotel' ); ?></a></li>
                <?php endif; ?>
                <?php if ( ! empty( $fav_resort_val ) ) : ?>
                    <li>resort<a href='<?php echo get_option( 'fav_resort_post_url' ); ?>'><?php echo get_option( 'fav_resort' ); ?></a></li>
                <?php endif; ?>
                <?php if ( ! empty( $fav_night_life_val ) ) : ?>
                    <li>night life<a href='<?php echo get_option( 'fav_night_life_post_url' ); ?>'><?php echo get_option( 'fav_night_life' ); ?></a></li>
                <?php endif; ?>
                <?php if ( ! empty( $fav_people_val ) ) : ?>
                    <li>people<a href='<?php echo get_option( 'fav_people_post_url' ); ?>'><?php echo get_option( 'fav_people' ); ?></a></li>
                <?php endif; ?>
                <?php if ( ! empty( $fav_shopping_val ) ) : ?>
                    <li>shopping<a href='<?php echo get_option( 'fav_shopping_post_url' ); ?>'><?php echo get_option( 'fav_shopping' ); ?></a></li>
                <?php endif; ?>
                <?php if ( ! empty( $fav_weather_val ) ) : ?>
                    <li>weather<a href='<?php echo get_option( 'fav_weather_post_url' ); ?>'><?php echo get_option( 'fav_weather' ); ?></a></li>
                <?php endif; ?>
                <?php if ( ! empty( $fav_sight_seeing_val ) ) : ?>
                    <li>sight seeing<a href='<?php echo get_option( 'fav_sight_seeing_post_url' ); ?>'><?php echo get_option( 'fav_sight_seeing' ); ?></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>



<?php get_footer(); ?>
