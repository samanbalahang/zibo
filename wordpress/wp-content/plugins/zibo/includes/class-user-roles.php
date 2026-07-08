<?php
if (! defined('ABSPATH')) {
    exit;
}

class Zibo_User_Roles
{

    /**
     * Create roles on plugin activation.
     */
    public static function activate()
    {

        add_role(
            'salon_owner',
            __('Salon Owner', 'zibo'),
            [
                'read'                 => true,
                'upload_files'         => true,

                'edit_salon'           => true,
                'read_salon'           => true,
                'delete_salon'         => true,

                'edit_salons'          => true,
                'publish_salons'       => true,
                'delete_salons'        => true,
            ]
        );
    }

    /**
     * Remove roles on plugin uninstall/deactivation.
     * Optional.
     */
    public static function deactivate()
    {

        // Uncomment if you want the role removed when plugin is deactivated.
        // remove_role( 'salon_owner' );
    }
}
