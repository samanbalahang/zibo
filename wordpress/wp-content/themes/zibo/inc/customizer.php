<?php

/**
 * Theme Customizer functionality.
 *
 * @package Zibo
 * @since 0.1.0
 */

if (! defined('ABSPATH')) {
	exit;
}

/**
 * Register Customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 * @return void
 */
function zibo_customize_register($wp_customize)
{

	/**
	 * Theme Options Section
	 */
	$wp_customize->add_section(
		'zibo_theme_options',
		array(
			'title'       => __('Zibo Theme Options', 'zibo'),
			'description' => __('Customize Zibo theme settings.', 'zibo'),
			'priority'    => 30,
		)
	);

	/**
	 * Footer Copyright Text
	 */
	$wp_customize->add_setting(
		'zibo_footer_copyright',
		array(
			'default'           => sprintf(
				'© %s %s',
				date('Y'),
				get_bloginfo('name')
			),
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'zibo_footer_copyright',
		array(
			'label'   => __('Footer Copyright Text', 'zibo'),
			'section' => 'zibo_theme_options',
			'type'    => 'text',
		)
	);

	/**
	 * Phone Number
	 */
	$wp_customize->add_setting(
		'zibo_phone_number',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'zibo_phone_number',
		array(
			'label'   => __('Business Phone Number', 'zibo'),
			'section' => 'zibo_theme_options',
			'type'    => 'text',
		)
	);

	/**
	 * Instagram URL
	 */
	$wp_customize->add_setting(
		'zibo_instagram_url',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'zibo_instagram_url',
		array(
			'label'   => __('Instagram URL', 'zibo'),
			'section' => 'zibo_theme_options',
			'type'    => 'url',
		)
	);

	/**
	 * Show ACF in Admin
	 */
	$wp_customize->add_setting(
		'zibo_show_acf_admin',
		array(
			'default'           => false,
			'sanitize_callback' => 'rest_sanitize_boolean',
		)
	);

	$wp_customize->add_control(
		'zibo_show_acf_admin',
		array(
			'label'   => __('Show ACF in Admin', 'zibo'),
			'section' => 'zibo_theme_options',
			'type'    => 'checkbox',
		)
	);
}

add_action('customize_register', 'zibo_customize_register');
