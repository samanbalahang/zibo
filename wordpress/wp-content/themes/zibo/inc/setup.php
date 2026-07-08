<?php

if (! defined('ABSPATH')) {
    exit;
}
add_action('after_setup_theme', 'zibo_setup');

function zibo_setup()
{

    load_theme_textdomain('zibo');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5');

    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'zibo'),
            'secondary' => __('Secondary Menu', 'zibo'),
            'footer'  => __('Footer Menu', 'zibo'),
        )
    );
    /**
     * Include Embedded Advanced Custom Fields
     */
    // 1. Check if another instance of ACF is already active on the site
    if (! class_exists('ACF')) {
        // 2. Define the path and URL to your bundled ACF folder
        define('MY_THEME_ACF_PATH', get_template_directory() . '/inc/acf/');
        define('MY_THEME_ACF_URL',  get_template_directory_uri() . '/inc/acf/');
        // 3. Include the main ACF bootstrap file
        include_once(MY_THEME_ACF_PATH . 'acf.php');
        // 4. Customize the URL settings so ACF knows where its assets (CSS/JS) live
        add_filter('acf/settings/url', 'my_theme_acf_settings_url');
        function my_theme_acf_settings_url($url)
        {
            return MY_THEME_ACF_URL;
        }
        // 5. Hide the ACF Admin Menu if you want a clean theme experience
        // Remove or comment out this filter if you want users to see the "ACF" menu item
        add_filter('acf/settings/show_admin',function () {
		    return get_theme_mod( 'zibo_show_acf_admin', false );
	    });

        // 6. Disable ACF update notices (since it's baked into your theme)
        add_filter('acf/settings/show_updates', '__return_false', 100);
    }
}
/**
 * Load ACF JSON files from theme.
 */
add_filter('acf/settings/load_json', 'zibo_acf_json_load_point');

function zibo_acf_json_load_point($paths)
{
    // Append our theme's acf-json path
    $paths[] = get_template_directory() . '/acf-json';
    return $paths;
}
