<?php
/**
 * Custom template hooks for this theme.
 *
 *
 * @package krystal
 */


/**
 * Before menu hook
 */
if ( ! function_exists( 'krystal_before_menu' ) ) :
function krystal_before_menu() {
	do_action('krystal_before_menu');
}
endif;


/**
 * WooCommerce show responsive menu cart icon
 */
if ( ! function_exists( 'krystal_responsive_woocommerce_cart_menu_icon' ) ) :
function krystal_responsive_woocommerce_cart_menu_icon() {
	do_action('krystal_responsive_woocommerce_cart_menu_icon');
}
endif;


/**
 * WooCommerce show cart
 */
if ( ! function_exists( 'krystal_woocommerce_show_cart' ) ) :
function krystal_woocommerce_show_cart() {
	do_action('krystal_woocommerce_show_cart');
}
endif;


/**
 * WooCommerce shop title
 */
if ( ! function_exists( 'krystal_get_shop_title' ) ) :
function krystal_get_shop_title() {
	do_action('krystal_get_shop_title');
}
endif;