<?php
/**
 * Helper functions.
 *
 * @package Zibo
 * @since 0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get a theme mod with a fallback value.
 *
 * @param string $key     Theme mod key.
 * @param mixed  $default Default value.
 * @return mixed
 */
function zibo_get_option( $key, $default = '' ) {

	return get_theme_mod( $key, $default );
}

/**
 * Get trimmed excerpt.
 *
 * @param int $length Number of words.
 * @return string
 */
function zibo_get_excerpt( $length = 20 ) {

	return wp_trim_words(
		get_the_excerpt(),
		$length,
		'...'
	);
}

/**
 * Check if WooCommerce is active.
 *
 * @return bool
 */
function zibo_is_woocommerce_active() {

	return class_exists( 'WooCommerce' );
}

/**
 * Get current year.
 *
 * @return string
 */
function zibo_current_year() {

	return gmdate( 'Y' );
}

/**
 * Return sanitized phone number link.
 *
 * @param string $phone Phone number.
 * @return string
 */
function zibo_phone_link( $phone ) {

	return preg_replace( '/[^0-9+]/', '', $phone );
}
