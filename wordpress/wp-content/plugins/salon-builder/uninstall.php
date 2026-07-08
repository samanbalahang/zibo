<?php
/**
 * Uninstall Salon Builder
 *
 * This file is executed when the plugin is deleted from
 * the WordPress Plugins screen.
 *
 * @package Salon_Builder
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

/*
|--------------------------------------------------------------------------
| Delete Plugin Options
|--------------------------------------------------------------------------
*/

delete_option( 'salon_builder_settings' );
delete_option( 'salon_builder_version' );

/*
|--------------------------------------------------------------------------
| Delete Transients
|--------------------------------------------------------------------------
*/

delete_transient( 'salon_builder_cache' );

/*
|--------------------------------------------------------------------------
| Future Cleanup
|--------------------------------------------------------------------------
|
| Delete builder metadata if the user has enabled
| "Remove all data on uninstall".
|
*/

// global $wpdb;
//
// $wpdb->delete(
//     $wpdb->postmeta,
//     [
//         'meta_key' => '_salon_builder_data',
//     ]
// );
//
// $wpdb->delete(
//     $wpdb->postmeta,
//     [
//         'meta_key' => '_salon_builder_css',
//     ]
// );
//
// delete_option( 'salon_builder_templates' );
//
// delete_option( 'salon_builder_global_styles' );