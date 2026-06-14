<?php
/**
 * ZIBO functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ZIBO
 * @author Saman Balahang
 * @since 0.1.0
 * @version 0.1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ZIBO_THEME_VERSION', '0.1.0' );
define( 'ZIBO_THEME_SETTINGS', 'astra-settings' );
define( 'ZIBO_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ZIBO_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );
define( 'ZIBO_WEBSITE_BASE_URL', 'https://github.com/samanbalahang/ZIBO' );


/**
 * Load theme files.
 *
 * The theme is organized into separate modules to keep the
 * functions.php file clean and maintainable. Each file is
 * responsible for a specific area of functionality.
 */
// Theme setup and initialization.
require_once ZIBO_THEME_DIR . 'inc/setup.php';

require_once ZIBO_THEME_DIR . 'inc/widgets.php';
// Scripts and styles.
require_once ZIBO_THEME_DIR . 'inc/enqueue.php';

// Helper functions.
require_once ZIBO_THEME_DIR . 'inc/helpers.php';

// Theme support declarations.
require_once ZIBO_THEME_DIR . 'inc/theme-support.php';

// Template helper tags.
require_once ZIBO_THEME_DIR . 'inc/template-tags.php';

// WordPress Customizer settings.
require_once ZIBO_THEME_DIR . 'inc/customizer.php';

// AJAX handlers.
require_once ZIBO_THEME_DIR . 'inc/ajax.php';

// Security enhancements.
require_once ZIBO_THEME_DIR . 'inc/security.php';

// Performance optimizations.
require_once ZIBO_THEME_DIR . 'inc/performance.php';

