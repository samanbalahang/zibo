<?php
/**
 * Plugin Name: Zibo
 * Description: Salon management plugin.
 * Version: 1.0.0
 * Author: saman balahang
 * Author url : https://github.com/samanbalahang/
 * 
 */

if (!defined('ABSPATH')) {
    exit;
}

define('ZIBO_PATH', plugin_dir_path(__FILE__));
define('ZIBO_URL', plugin_dir_url(__FILE__));

require_once ZIBO_PATH . 'includes/class-post-types.php';
require_once ZIBO_PATH . 'includes/class-user-roles.php';
require_once ZIBO_PATH . 'includes/class-admin-menu.php';
require_once ZIBO_PATH . 'includes/class-settings.php';
require_once ZIBO_PATH . 'includes/class-taxonomies.php';

register_activation_hook(
	__FILE__,
	[ 'Zibo_User_Roles', 'activate' ]
);

register_deactivation_hook(
	__FILE__,
	[ 'Zibo_User_Roles', 'deactivate' ]
);
// add translate
add_action( 'plugins_loaded', 'zibo_load_textdomain' );

function zibo_load_textdomain() {

	load_plugin_textdomain(
		'zibo',
		false,
		dirname( plugin_basename( __FILE__ ) ) . '/languages'
	);
}
new Zibo_Taxonomies();
new Zibo_Post_Types();
new Zibo_User_Roles();
new Zibo_Admin_Menu();
new Zibo_Settings();
