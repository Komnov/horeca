<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION


//удаляем хуки
add_action('after_setup_theme', 'remove_adctions'); 
function remove_adctions() {
    remove_action('storefront_header', 'storefront_header_cart', 60);
    remove_action('storefront_header', 'storefront_primary_navigation', 50);
    remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
    remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);

}

 //добавляем хуки
add_action('after_setup_theme', 'add_adctions');
function add_adctions() {
    add_action('storefront_header', 'storefront_primary_navigation', 30);
    add_action('woocommerce_before_single_product_summary', 'woocommerce_output_product_data_tabs', 30);
    add_action('woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 5);
}

// создаем области меню
function register_my_menus() {
    register_nav_menus(
        array(
            'main_menu'  => __( 'Main Menu', 'onepress' ),
            'footer_menu'  => __( 'Footer Menu', 'onepress' )
        )   
    );
}
add_action( 'init', 'register_my_menus' );

//добавляем стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' ); 
// function theme_name_scripts() {
     wp_enqueue_style( 'animate.css', '/wp-content/themes/storefront-child/assets/css/animate.css' );
    wp_enqueue_script( 'main.js', '/wp-content/themes/storefront-child/assets/js/main.js', array(), '1.0.0', true );
    wp_enqueue_script( 'wow.min.js', '/wp-content/themes/storefront-child/assets/js/wow.min.js', array(), '1.0.0', true );
// }

// удаляем зум изображения в карточке
add_action('after_setup_theme', 'remove_zoom_theme_support', 100); 
function remove_zoom_theme_support() {
    remove_theme_support('wc-product-gallery-zoom');
}


add_filter( 'woocommerce_product_tabs', 'reorder_tabs', 30 );
 
function reorder_tabs( $tabs ) {
	$tabs[ 'description' ][ 'priority' ] = 10000;
	return $tabs;
}

add_filter( 'woocommerce_product_tabs', 'remove_product_tabs', 30 );
 
function remove_product_tabs( $tabs ) { 
	unset( $tabs[ 'description' ] ); // вкладка Описание
	return $tabs;
}