<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'widgets_init', 'zibo_register_sidebars' );

function zibo_register_sidebars() {

    register_sidebar(
        array(
            'name' => __( 'Main Sidebar', 'zibo' ),
            'id'   => 'main-sidebar',
        )
    );
}