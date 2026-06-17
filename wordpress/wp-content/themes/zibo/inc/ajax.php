<?php
/**
 * AJAX handlers.
 *
 * @package Zibo
 * @since 0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
require_once ZIBO_THEME_DIR . 'inc/ajax/contact-form.php';
require_once ZIBO_THEME_DIR . 'inc/ajax/search.php';
require_once ZIBO_THEME_DIR . 'inc/ajax/booking.php';
/**
 * Example AJAX handler.
 *
 * @return void
 */
function zibo_ajax_example() {

	// Verify nonce.
	check_ajax_referer( 'zibo_nonce', 'nonce' );

	wp_send_json_success(
		array(
			'message' => __( 'AJAX request successful.', 'zibo' ),
		)
	);
}

add_action( 'wp_ajax_zibo_example', 'zibo_ajax_example' );
add_action( 'wp_ajax_nopriv_zibo_example', 'zibo_ajax_example' );
