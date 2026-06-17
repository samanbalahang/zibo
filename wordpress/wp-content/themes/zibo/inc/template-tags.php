<?php
/**
 * Custom template tags for this theme.
 *
 * @package Zibo
 * @since 0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Prints post date.
 *
 * @return void
 */
function zibo_posted_on() {

	printf(
		'<span class="zibo-post-date"><time datetime="%1$s">%2$s</time></span>',
		esc_attr( get_the_date( DATE_W3C ) ),
		esc_html( get_the_date() )
	);
}

/**
 * Prints post author.
 *
 * @return void
 */
function zibo_posted_by() {

	printf(
		'<span class="zibo-post-author">%s</span>',
		esc_html( get_the_author() )
	);
}

/**
 * Prints post categories.
 *
 * @return void
 */
function zibo_post_categories() {

	$categories = get_the_category_list( ', ' );

	if ( ! empty( $categories ) ) {
		printf(
			'<div class="zibo-post-categories">%s</div>',
			wp_kses_post( $categories )
		);
	}
}

/**
 * Prints post tags.
 *
 * @return void
 */
function zibo_post_tags() {

	$tags = get_the_tag_list( '', ', ' );

	if ( ! empty( $tags ) ) {
		printf(
			'<div class="zibo-post-tags">%s</div>',
			wp_kses_post( $tags )
		);
	}
}