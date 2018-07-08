<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section as well as the nav section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mytravelblog
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> lang='en'>
<head>
<meta charset='<?php bloginfo( 'charset' ); ?>'>
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>



<!-- sectionbanner -->
<?php if ( is_front_page() ) : ?>
    <div class='banner' style='background-image:url(<?php echo get_option( 'home_banner_image' ); ?>'>
        <h1><?php bloginfo( 'name' ); ?></h1>
    </div>
<?php elseif ( is_search() ) : ?>
<?php elseif ( is_single() ) : ?>
<?php elseif ( is_page_template() ) : ?>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php if ( has_post_thumbnail() ) : ?>
                <?php $about_page_banner_image = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
                <div class='banner' style='background-image:url(<?php echo $about_page_banner_image; ?>); height:200px;'>
                    <h1><?php the_title(); ?></h1>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
<?php elseif ( is_page() ) : ?>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php if ( has_post_thumbnail() ) : ?>
                <?php $about_page_banner_image = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
                <div class='banner' style='background-image:url(<?php echo $about_page_banner_image; ?>); height:200px;'>
                    <h1><?php the_title(); ?></h1>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
<?php elseif ( !is_home() ) : ?>
    <div class='banner'></div>
<?php endif; ?>



<!-- sectionnav sectionnavbar -->
<div class='navbar-container sticky-top'>
    <nav class="navbar navbar-expand-lg container sticky-top navbar-light">
          <?php the_custom_logo(); ?>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
                wp_nav_menu(
                    array(
                        'container' => 'ul',
                        'menu_class' => 'navbar-nav ml-auto'
                    )
                );
            ?>
            <?php get_search_form(); ?>
          </div>
    </nav>
</div>
