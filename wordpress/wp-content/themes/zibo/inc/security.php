<?php
/**
 * Security enhancements.
 *
 * @package Zibo
 * @since 0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Remove WordPress version generator tag.
 *
 * @return string
 */
function zibo_remove_wp_version() {
	return '';
}
add_filter( 'the_generator', 'zibo_remove_wp_version' );

/**
 * Disable XML-RPC.
 *
 * @param bool $enabled XML-RPC status.
 * @return bool
 */
function zibo_disable_xmlrpc( $enabled ) {
	return false;
}
add_filter( 'xmlrpc_enabled', 'zibo_disable_xmlrpc' );

/**
 * Remove version query strings from assets.
 *
 * @param string $src Asset URL.
 * @return string
 */
function zibo_remove_asset_version( $src ) {

	if ( strpos( $src, 'ver=' ) ) {
		$src = remove_query_arg( 'ver', $src );
	}

	return $src;
}

add_filter( 'style_loader_src', 'zibo_remove_asset_version', 9999 );
add_filter( 'script_loader_src', 'zibo_remove_asset_version', 9999 );
