<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Zibo_Settings {

	public function __construct() {
		add_action( 'admin_init', [ $this, 'register_settings' ] );
	}

	public function register_settings() {

		register_setting(
			'zibo_settings_group',
			'zibo_settings'
		);

		add_settings_section(
			'zibo_general_section',
			__( 'General Settings', 'zibo' ),
			'__return_false',
			'zibo-settings'
		);

		add_settings_field(
			'allow_registration',
			__( 'Allow Salon Registration', 'zibo' ),
			[ $this, 'allow_registration_callback' ],
			'zibo-settings',
			'zibo_general_section'
		);

		add_settings_field(
			'admin_email',
			__( 'Notification Email', 'zibo' ),
			[ $this, 'admin_email_callback' ],
			'zibo-settings',
			'zibo_general_section'
		);
	}

	public function allow_registration_callback() {

		$options = get_option( 'zibo_settings', [] );

		?>
		<label>
			<input
				type="checkbox"
				name="zibo_settings[allow_registration]"
				value="1"
				<?php checked( ! empty( $options['allow_registration'] ) ); ?>
			>
			Allow salon owners to register
		</label>
		<?php
	}

	public function admin_email_callback() {

		$options = get_option( 'zibo_settings', [] );

		?>
		<input
			type="email"
			name="zibo_settings[admin_email]"
			value="<?php echo esc_attr( $options['admin_email'] ?? '' ); ?>"
			class="regular-text"
		>
		<?php
	}
}