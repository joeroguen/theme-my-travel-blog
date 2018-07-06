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
    <div class='banner' style='background-image:url(<?php echo get_template_directory_uri(); ?>/images/nolan-marketti-93667-unsplash.jpg)'>
        <h1><?php bloginfo( 'name' ); ?></h1>
    </div>
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
            <!--
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">about</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">resources</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#footer">follow</a>
              </li>
            </ul>
            -->
            <form class="form-inline my-2 my-lg-0" action="">
                <i class="search-icon fas fa-search"></i>
                <div class='search-field'>
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn my-2 my-sm-0" type="submit">Search</button>
                </div>
            </form>
          </div>
    </nav>
</div>
