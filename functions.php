<?php

add_theme_support( 'title-tag' );
function fsr_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'fsr_woocommerce_support' );

add_action('after_setup_theme', 'register_custom_nav_menus');
function register_custom_nav_menus()
{
    register_nav_menus(array(
        'Header' => 'Header Navigation Menu',
        // 'footer_menu' => 'My Custom Footer Menu',
    ));
}

// add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

// function my_wp_nav_menu_objects( $items, $args ) {
	
// 	// loop
// 	foreach( $items as &$item ) {
		
// 		// vars
// 		$icon = get_field('titulo', $item);
		
		
// 		// append icon
// 		if( $icon ) {
			
// 			$item->title .= ' <i class="fa fa-'.$icon.'"></i>';
			
// 		}
		
// 	}
	
	
// 	// return
// 	return $items;
	
// }


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
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), filemtime(get_template_directory() . '/js/custom.js'), false);

}

add_action( 'after_setup_theme', 'register_multiple_widget_areas' );

function register_multiple_widget_areas()
{
    register_sidebar(
        array(
        'name'          => 'Carrito',
        'id'            => 'Carrito',
        'description'   => 'Widget que se isntala en la tienda de WooCommerce.'
        )
    );

    register_sidebar(
        array(
        'name'          => 'Buscador',
        'id'            => 'Buscador',
        'description'   => 'Añade un buscador de productos.'
        )
    );
}