<?php

add_action('after_setup_theme', 'register_custom_nav_menus');
function register_custom_nav_menus()
{
    register_nav_menus(array(
        'Header' => 'Header Navigation Menu',
        // 'footer_menu' => 'My Custom Footer Menu',
    ));
}


// Register style sheet.
add_action('wp_enqueue_scripts', 'register_theme_styles');

/**
 * Register style sheet.
 */
function register_theme_styles()
{
    wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css', array(), filemtime(get_template_directory() . '/css/header.css'), false);
    wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css', array(), filemtime(get_template_directory() . '/css/footer.css'), false);
    wp_enqueue_style('global', get_template_directory_uri() . '/css/global.css', array(), filemtime(get_template_directory() . '/css/global.css'), false);
    wp_enqueue_style('woocommerce', get_template_directory_uri() . '/css/woocommerce.css', array(), filemtime(get_template_directory() . '/css/woocommerce.css'), false);
    wp_enqueue_style('montserrat', get_template_directory_uri() . '/fonts/Montserrat.css', array(), filemtime(get_template_directory() . '/fonts/Montserrat.css'), false);
    wp_enqueue_script('jquery');
}
