<?php
/**
 * My Travel Blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mytravelblog
 * @since 1.0
 */



//hide admin dashboard toolbar at top
show_admin_bar( false );



//after theme setup
if ( ! function_exists( 'mtb_after_setup_theme' ) ) {
    add_action( 'after_setup_theme', 'mtb_after_setup_theme' );
    function mtb_after_setup_theme() {
        //sectionlogo
        add_theme_support( 'custom-logo' );
        //sectiontitle - adds title tag to head section
        add_theme_support( 'title-tag' );
        //sectionfeaturedimage
        add_theme_support( 'post-thumbnails' );
        //sectionbackground
        add_theme_support( 'custom-background' );
        //sectionnav sectionmenu
        add_theme_support( 'menus' );
    }
}



//sectionenqueeue sectionstyles sectionscripts
if ( ! function_exists( 'mtb_add_styles_and_scripts' ) ) {
    add_action( 'wp_enqueue_scripts', 'mtb_add_styles_and_scripts' );
    function mtb_add_styles_and_scripts() {
        //bootstrap 4.1.1 styles
        wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/styles/bootstrap-4-1-1/bootstrap.min.css' );
        //fontawesome 5.1.0 icons
        wp_enqueue_style( 'fontawesome-styles', get_template_directory_uri() . '/styles/fontawesome-5-1-0/css/all.css' );
        //main styles
        wp_enqueue_style( 'main-css-styles', get_stylesheet_uri() );
        //jquery 3.3.1 script
        wp_enqueue_script( 'jquery-script', get_template_directory_uri() . '/scripts/jquery-3-3-1.js' );
        //popper 1.14.3 , required by bootstrap
        wp_enqueue_script( 'popper-script', get_template_directory_uri() . '/scripts/popper-1-14-3.js' );
        //bootstrap 4.1.1 script
        wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/scripts/bootstrap-4-1-1/bootstrap.min.js' );
        //main javascript file
        wp_enqueue_script( 'main-javascript-file', get_template_directory_uri() . '/scripts/main.js' );
    }
}



//enqueue styles and scripts for admin pages
add_action( 'admin_enqueue_scripts', 'mtb_add_scripts_admin_pages' );
function mtb_add_scripts_admin_pages() {
    wp_register_style( 'admin_pages_styles', get_template_directory_uri() . '/styles/admin-pages.css' );
    wp_enqueue_style( 'admin_pages_styles' );
    wp_register_script( 'admin_pages_scripts', get_template_directory_uri() . '/scripts/mtb-admin-scripts.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'admin_pages_scripts' );
    wp_enqueue_media(); //loads all necessary files to use media uploader
}



//sectionprofilepic sectionprofilephoto
if ( ! function_exists( 'mtb_add_admin_submenu_frontpage_sidebar' ) ) {
    //add submenu to admin page under media
    add_action( 'admin_menu', 'mtb_add_admin_submenu_frontpage_sidebar' );
    function mtb_add_admin_submenu_frontpage_sidebar() {
        add_submenu_page( 'themes.php', 'Sidebar Options', 'Sidebar', 'manage_options', 'mtb_subpage_sidebar', 'mtb_add_sidebar_options' );
    }
    //make submenu page layout
    function mtb_add_sidebar_options() {
        echo '<h1>Sidebar Settings</h1>';
        echo 'Settings for sidebar section on front page of website';
        echo '<hr />';
        settings_errors();
        echo '<form id="form-subpage-sidebar" action="options.php" method="post">';
        settings_fields( 'settings_group_main' ); //hidden fields, place before do_settings_sections
        do_settings_sections( 'mtb_subpage_sidebar' );
        submit_button( 'Save Changes', 'primary', 'submit', true );
        echo '</form>';
        $profile_photo_url = get_template_directory_uri() . '/images/admin-dashboard/admin-subpage-sidebar-preview.png';
        echo '<img id="sidebar-img-preview" src="' . $profile_photo_url . '" alt="[image of web blog owners profile photo]" />';
    }
    //add profile photo settings
    add_action( 'admin_init', 'mtb_add_settings_sidebar' );
    function mtb_add_settings_sidebar() {
        //section main
        add_settings_section( 'section_main', '<h2>Information</h2>', 'mtb_add_section_main', 'mtb_subpage_sidebar' );
        //fields main
        register_setting( 'settings_group_main', 'profile_photo' );
        add_settings_field( 'field_profile_photo', 'Profile Photo', 'mtb_add_field_profile_photo', 'mtb_subpage_sidebar', 'section_main' );
        register_setting( 'settings_group_main', 'greeting_message' );
        add_settings_field( 'field_greeting_message', 'Greeting', 'mtb_add_field_greeting_message', 'mtb_subpage_sidebar', 'section_main' );
        register_setting( 'settings_group_main', 'short_intro' );
        add_settings_field( 'field_short_intro', 'Short Intro', 'mtb_add_field_short_intro', 'mtb_subpage_sidebar', 'section_main' );
        register_setting( 'settings_group_main', 'total_countries_visited' );
        add_settings_field( 'field_total_countries_visited', 'Total Countries Visited', 'mtb_add_field_total_countries_visited', 'mtb_subpage_sidebar', 'section_main' );
        register_setting( 'settings_group_main', 'total_miles_traveled' );
        add_settings_field( 'field_total_miles_traveled', 'Total Miles Traveled', 'mtb_add_field_total_miles_traveled', 'mtb_subpage_sidebar', 'section_main' );
        //section favs
        add_settings_section( 'section_favs', '<hr /><h2>Favorites</h2>', 'mtb_add_section_favs', 'mtb_subpage_sidebar' );
        //fields favs
        register_setting( 'settings_group_main', 'fav_food' );
        register_setting( 'settings_group_main', 'fav_food_post_url' );
        add_settings_field( 'field_fav_food', 'food', 'mtb_add_field_fav_food', 'mtb_subpage_sidebar', 'section_favs' );
        register_setting( 'settings_group_main', 'fav_hotel' );
        register_setting( 'settings_group_main', 'fav_hotel_post_url' );
        add_settings_field( 'field_fav_hotel', 'hotel', 'mtb_add_field_fav_hotel', 'mtb_subpage_sidebar', 'section_favs' );
        register_setting( 'settings_group_main', 'fav_resort' );
        register_setting( 'settings_group_main', 'fav_resort_post_url' );
        add_settings_field( 'field_fav_resort', 'resort', 'mtb_add_field_fav_resort', 'mtb_subpage_sidebar', 'section_favs' );
        register_setting( 'settings_group_main', 'fav_night_life' );
        register_setting( 'settings_group_main', 'fav_night_life_post_url' );
        add_settings_field( 'field_fav_night_life', 'night life', 'mtb_add_field_fav_night_life', 'mtb_subpage_sidebar', 'section_favs' );
        register_setting( 'settings_group_main', 'fav_people' );
        register_setting( 'settings_group_main', 'fav_people_post_url' );
        add_settings_field( 'field_fav_people', 'people', 'mtb_add_field_people', 'mtb_subpage_sidebar', 'section_favs' );
        register_setting( 'settings_group_main', 'fav_shopping' );
        register_setting( 'settings_group_main', 'fav_shopping_post_url' );
        add_settings_field( 'field_fav_shopping', 'shopping', 'mtb_add_field_shopping', 'mtb_subpage_sidebar', 'section_favs' );
        register_setting( 'settings_group_main', 'fav_weather' );
        register_setting( 'settings_group_main', 'fav_weather_post_url' );
        add_settings_field( 'field_fav_weather', 'weather', 'mtb_add_field_weather', 'mtb_subpage_sidebar', 'section_favs' );
        register_setting( 'settings_group_main', 'fav_sight_seeing' );
        register_setting( 'settings_group_main', 'fav_sight_seeing_post_url' );
        add_settings_field( 'field_fav_sight_seeing', 'sight_seeing', 'mtb_add_field_sight_seeing', 'mtb_subpage_sidebar', 'section_favs' );
    }
    //section main
    function mtb_add_section_main() { }
    function mtb_add_field_profile_photo() {
        $profile_photo = esc_attr( get_option( 'profile_photo' ) );
        echo '<input type="button" value="Upload Photo" id="button-upload-profile-photo" class="button button-secondary" /><input type="hidden" name="profile_photo" id="hidden-data-photo-url" value="' . $profile_photo . '" /><p class="description">Upload an image with an aspect ratio of  1:1 (Example: 200px by 200px)</p><img id="profile_photo_preview" src="' . $profile_photo . '" />';
    }
    function mtb_add_field_greeting_message() {
        $greeting_message = esc_attr( get_option( 'greeting_message' ) );
        echo '<input type="text" name="greeting_message" value="' . $greeting_message . '" /><p class="description">Example = hi!</p>';
    }
    function mtb_add_field_short_intro() {
        $short_intro = esc_attr( get_option( 'short_intro' ) );
        echo '<input type="text" name="short_intro" value="'.$short_intro.'" /><p class="description">Example = my name is Lara. follow me on my travels.</p>';
    }
    function mtb_add_field_total_countries_visited() {
        $total_countries_visited = esc_attr( get_option( 'total_countries_visited' ) );
        echo '<input type="text" name="total_countries_visited" value="' . $total_countries_visited . '" />';
    }
    function mtb_add_field_total_miles_traveled() {
        $total_miles_traveled = esc_attr( get_option( 'total_miles_traveled' ) );
        echo '<input type="text" name="total_miles_traveled" value="' . $total_miles_traveled . '" />';
    }
    //section favs
    function mtb_add_section_favs() {
        echo '<p class="description">List your favorites here and link to a blog post</p>';
    }
    function mtb_add_field_fav_food() {
        $fav_food = esc_attr( get_option( 'fav_food' ) );
        $fav_food_post_url = esc_attr( get_option( 'fav_food_post_url' ) );
        echo '<label for="fav_food">Title</label> <input type="text" name="fav_food" value="' . $fav_food . '" /><br /><label for="fav_food_post_url">Post Url</label> <input type="text" name="fav_food_post_url" value="' . $fav_food_post_url . '" />';
    }
    function mtb_add_field_fav_hotel() {
        $fav_hotel = esc_attr( get_option( 'fav_hotel' ) );
        $fav_hotel_post_url = esc_attr( get_option( 'fav_hotel_post_url' ) );
        echo '<label for="fav_hotel">Title</label> <input type="text" name="fav_hotel" value="' . $fav_hotel . '" /><br /><label for="fav_hotel_post_url">Post Url</label> <input type="text" name="fav_hotel_post_url" value="' . $fav_hotel_post_url . '" />';
    }
    function mtb_add_field_fav_resort() {
        $fav_resort = esc_attr( get_option( 'fav_resort' ) );
        $fav_resort_post_url = esc_attr( get_option( 'fav_resort_post_url' ) );
        echo '<label for="fav_resort">Title</label> <input type="text" name="fav_resort" value="' . $fav_resort . '" /><br /><label for="fav_resort_post_url">Post Url</label> <input type="text" name="fav_resort_post_url" value="' . $fav_resort_post_url . '" />';
    }
    function mtb_add_field_fav_night_life() {
        $fav_night_life = esc_attr( get_option( 'fav_night_life' ) );
        $fav_night_life_post_url = esc_attr( get_option( 'fav_night_life_post_url' ) );
        echo '<label for="fav_night_life">Title</label> <input type="text" name="fav_night_life" value="' . $fav_night_life . '" /><br /><label for="fav_night_life_post_url">Post Url</label> <input type="text" name="fav_night_life_post_url" value="' . $fav_night_life_post_url . '" />';
    }
    function mtb_add_field_people() {
        $fav_people = esc_attr( get_option( 'fav_people' ) );
        $fav_people_post_url = esc_attr( get_option( 'fav_people_post_url' ) );
        echo '<label for="fav_people">Title</label> <input type="text" name="fav_people" value="' . $fav_people . '" /><br /><label for="fav_people_post_url">Post Url</label> <input type="text" name="fav_people_post_url" value="' . $fav_people_post_url . '" />';
    }
    function mtb_add_field_shopping() {
        $fav_shopping = esc_attr( get_option( 'fav_shopping' ) );
        $fav_shopping_post_url = esc_attr( get_option( 'fav_shopping_post_url' ) );
        echo '<label for="fav_shopping">Title</label> <input type="text" name="fav_shopping" value="' . $fav_shopping . '" /><br /><label for="fav_shopping_post_url">Post Url</label> <input type="text" name="fav_shopping_post_url" value="' . $fav_shopping_post_url . '" />';
    }
    function mtb_add_field_weather() {
        $fav_weather = esc_attr( get_option( 'fav_weather' ) );
        $fav_weather_post_url = esc_attr( get_option( 'fav_weather_post_url' ) );
        echo '<label for="fav_weather">Title</label> <input type="text" name="fav_weather" value="' . $fav_weather . '" /><br /><label for="fav_weather_post_url">Post Url</label> <input type="text" name="fav_weather_post_url" value="' . $fav_weather_post_url . '" />';
    }
    function mtb_add_field_sight_seeing() {
        $fav_sight_seeing = esc_attr( get_option( 'fav_sight_seeing' ) );
        $fav_sight_seeing_post_url = esc_attr( get_option( 'fav_sight_seeing_post_url' ) );
        echo '<label for="fav_sight_seeing">Title</label> <input type="text" name="fav_sight_seeing" value="' . $fav_sight_seeing . '" /><br /><label for="fav_sight_seeing_post_url">Post Url</label> <input type="text" name="fav_sight_seeing_post_url" value="' . $fav_sight_seeing_post_url . '" />';
    }
}
