<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'widgets_init', 'zibo_register_sidebars' );

function zibo_register_sidebars() {

    register_sidebar(
        array(
            'name' => __( 'Main Sidebar', 'zibo' ),
            'id'   => 'sidebar-left',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
        )
    );
    register_sidebar(
        array(
            'name' => __( 'Second Sidebar', 'zibo' ),
            'id'   => 'sidebar-right',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
        )
    );
}