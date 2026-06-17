<?php
/**
 * Theme support declarations.
 *
 * Registers WordPress core features supported by the theme.
 *
 * @package Zibo
 * @since 0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register theme supports.
 *
 * @return void
 */
function zibo_theme_support() {

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Featured images.
	add_theme_support( 'post-thumbnails' );

	// Custom logo support.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 120,
			'width'       => 300,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	// HTML5 markup support.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Selective widget refresh.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Wide and full alignment blocks.
	add_theme_support( 'align-wide' );

	// Responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Editor styles.
	add_theme_support( 'editor-styles' );

	// Block editor styles.
	add_theme_support( 'wp-block-styles' );

	// Automatic feed links.
	add_theme_support( 'automatic-feed-links' );

	// Custom spacing controls.
	add_theme_support( 'custom-spacing' );
}

add_action( 'after_setup_theme', 'zibo_theme_support' );
