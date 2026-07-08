<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
class Zibo_Taxonomies {
    public function __construct() {
        add_action('init', [$this, 'register_taxonomies']);
    }
    public function register_taxonomies() {
        register_taxonomy(
            'city',
            ['salon'],
            [
                'label'             => 'Cities',
                'hierarchical'      => false,
                'show_admin_column' => true,
                'show_in_rest'      => true,
            ]
        );
    }
}
