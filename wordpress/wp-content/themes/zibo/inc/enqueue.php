<?php
/**
 * Enqueue theme assets.
 *
 * @package Zibo
 * @since 0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_enqueue_scripts', 'zibo_enqueue_assets' );

/**
 * Enqueue frontend styles and scripts.
 *
 * @return void
 */
function zibo_enqueue_assets() {

	// Theme stylesheet.
	wp_enqueue_style(
		'zibo-style',
		ZIBO_THEME_URI . 'assets/css/style.min.css',
		array(),
		ZIBO_THEME_VERSION
	);

	// Theme script.
	wp_enqueue_script(
		'zibo-script',
		ZIBO_THEME_URI . 'assets/js/script.min.js',
		array(),
		ZIBO_THEME_VERSION,
		true
	);

}