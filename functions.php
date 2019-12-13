<?php 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
//
// Your code goes below
//
//
////CNK hide price

add_filter( 'woocommerce_get_price_html', 'react2wp_woocommerce_hide_product_price' );
function react2wp_woocommerce_hide_product_price( $price ) {
    return '';
}

/// cnk hide add cart button 

//remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

	
/// END cnk hide add cart button 