<?php
/**
 * Plugin Name: Salon Builder
 * Description: Visual builder for Salon post type.
 * Version: 0.0.1
 * Author: saman balahang
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define(
	'SALON_BUILDER_PATH',
	plugin_dir_path( __FILE__ )
);

define(
	'SALON_BUILDER_URL',
	plugin_dir_url( __FILE__ )
);

require_once SALON_BUILDER_PATH . 'includes/class-admin.php';

new Salon_Builder_Admin();
