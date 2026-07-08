<?php
/**
 * Uninstall Zibo
 *
 * Fired when the plugin is deleted.
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

/*
|--------------------------------------------------------------------------
| Remove User Roles
|--------------------------------------------------------------------------
*/

remove_role( 'salon_owner' );

/*
|--------------------------------------------------------------------------
| Remove Plugin Options
|--------------------------------------------------------------------------
*/

delete_option( 'zibo_settings' );

/*
|--------------------------------------------------------------------------
| Future Cleanup
|--------------------------------------------------------------------------
|
| Uncomment these when needed.
|
*/

// delete_option( 'zibo_version' );

// delete_option( 'zibo_cache' );

// delete_option( 'zibo_templates' );