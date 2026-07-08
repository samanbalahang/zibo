<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Salon_Builder_Admin {

	/**
	 * Post types supported by Salon Builder.
	 */
	private $supported_post_types = [
		'salon',
	];
	public function __construct() {

		add_action(
			'edit_form_after_title',
			[ $this, 'editor_button' ]
		);

		add_action(
			'admin_notices',
			[ $this, 'header_button' ]
		);
	}

	private function is_salon_screen() {

		$screen = get_current_screen();

		return (
			$screen &&
			$screen->post_type === 'salon'
		);
	}

	public function editor_button( $post ) {

		if ( $post->post_type !== 'salon' ) {
			return;
		}

		$url = admin_url(
			'admin.php?page=salon-builder&post_id=' . $post->ID
		);

		echo '<p>';
		echo '<a class="button button-primary button-large" href="' . esc_url( $url ) . '">';
		echo 'Build With Salon Builder';
		echo '</a>';
		echo '</p>';
	}

	public function header_button() {

		if ( ! $this->is_salon_screen() ) {
			return;
		}

		global $post;

		if ( ! $post ) {
			return;
		}

		$url = admin_url(
			'admin.php?page=salon-builder&post_id=' . $post->ID
		);

		?>
		<div class="notice notice-info inline">
			<p>
				<a
					class="button button-primary"
					href="<?php echo esc_url( $url ); ?>"
				>
					Build With Salon Builder
				</a>
			</p>
		</div>
		<?php
	}
    public function show_builder_button( $post ) {

		if ( ! in_array( $post->post_type, $this->supported_post_types, true ) ) {
			return;
		}

		echo '<a class="button button-primary">Build With Salon Builder</a>';
	}
    
}
