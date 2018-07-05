<?php $isFrontPage = true; ?>
<?php get_header(); ?>


<h2 class='offset-2'>posts</h2>
<div class='row no-gutters'>
<?php if ( have_posts() ) : ?>
    <!-- sectionmain sectionleft sectionposts sectionblog -->
    <div class='section-main col-md-9'>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php if ( has_post_thumbnail() ) { $post_bg_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); } ?>
            <div class='post' <?php if ( has_post_thumbnail() ) { echo 'style="background-image:url(' . $post_bg_image[0] . ')"'; } else { echo 'style="background-color:#f5f5f5;"'; } ?>>
                <div class='info col-sm-8 offset-sm-2'>
                    <span class='date'><?php the_time( 'F j, Y' ); ?></span>
                    <h3 class='trip-name'><?php the_category(); ?></h3>
                    <h2 class='title'><a href='<?php the_shortlink(); ?>'><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                    <a class='read-more' href='<?php the_shortlink(); ?>'>read more <i class="fas fa-angle-double-right"></i></a>
                    <div class='tags'>
                        <?php the_tags( $before = false ); ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <a class='button-view-more-blogs offset-sm-2' href='#'>view more blogs</a>
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
                <li>food<a href='<?php echo get_option( 'fav_food_post_url' ); ?>'><?php echo get_option( 'fav_food' ); ?></a></li>
                <li>hotel<a href='#'><?php echo get_option( 'fav_hotel' ); ?></a></li>
                <li>resort<a href='#'><?php echo get_option( 'fav_resort' ); ?></a></li>
                <li>night life<a href='#'><?php echo get_option( 'fav_night_life' ); ?></a></li>
                <li>people<a href='#'><?php echo get_option( 'fav_people' ); ?></a></li>
                <li>shopping<a href='#'><?php echo get_option( 'fav_shopping' ); ?></a></li>
                <li>weather<a href='#'><?php echo get_option( 'fav_weather' ); ?></a></li>
                <li>seeing<a href='#'><?php echo get_option( 'fav_sight_seeing' ); ?></a></li>
            </ul>
        </div>
    </div>
</div>






<h2 class='offset-2'>my travels</h2>
<div class='map section'>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7961367.508651016!2d96.99302230057528!3d13.011043023699465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304d8df747424db1%3A0x9ed72c880757e802!2sThailand!5e0!3m2!1sen!2sus!4v1529628778627" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>



<?php get_footer(); ?>
