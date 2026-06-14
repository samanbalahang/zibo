<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
add_action( 'after_setup_theme', 'zibo_setup' );

function zibo_setup() {

    load_theme_textdomain( 'zibo' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5' );

    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'zibo' ),
            'secondary' =>__('Secondary Menu' , 'zibo'),
            'footer'  => __( 'Footer Menu', 'zibo' ),
        )
    );
}