<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
class Zibo_Admin_Menu {

    public function __construct() {
        add_action('admin_menu', [$this, 'register_menu']);
    }

    public function register_menu() {

        add_menu_page(
            'Zibo',
            'Zibo',
            'manage_options',
            'zibo',
            [$this, 'dashboard_page'],
            'dashicons-store'
        );

        add_submenu_page(
            'zibo',
            'Cities',
            'Cities',
            'manage_options',
            'zibo-cities',
            [$this, 'cities_page']
        );

        add_submenu_page(
            'zibo',
            'Settings',
            'Settings',
            'manage_options',
            'zibo-settings',
            [$this, 'settings_page']
        );
    }

    public function dashboard_page() {
        echo '<h1>Zibo Dashboard</h1>';
    }

    public function cities_page() {
        include ZIBO_PATH . 'admin/views/cities-page.php';
    }

    public function settings_page() {
        include ZIBO_PATH . 'admin/views/settings-page.php';
    }
}