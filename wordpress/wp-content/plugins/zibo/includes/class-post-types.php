<?php


if (! defined('ABSPATH')) {
    exit;
}

class Zibo_Post_Types
{
    private function get_labels()
    {

        return [
            'name'               => __('Salons', 'zibo'),
            'singular_name'      => __('Salon', 'zibo'),
            'menu_name'          => __('Salons', 'zibo'),
            'add_new'            => __('Add New', 'zibo'),
            'add_new_item'       => __('Add New Salon', 'zibo'),
            'edit_item'          => __('Edit Salon', 'zibo'),
            'new_item'           => __('New Salon', 'zibo'),
            'view_item'          => __('View Salon', 'zibo'),
            'search_items'       => __('Search Salons', 'zibo'),
            'not_found'          => __('No salons found.', 'zibo'),
            'not_found_in_trash' => __('No salons found in Trash.', 'zibo'),
        ];
    }
    public function __construct()
    {
        add_action('init', [$this, 'register_post_types']);
    }
    private function get_salon_args() {
    return [
        'labels'       => $this->get_labels(),
        'public'       => true,
        'menu_icon'    => 'dashicons-store',
        'supports'     => [ 'title', 'editor', 'thumbnail' ],
        'show_in_rest' => true,
    ];
}

    public function register_post_types()
    {
        register_post_type( 'salon', $this->get_salon_args() );
    }
}
