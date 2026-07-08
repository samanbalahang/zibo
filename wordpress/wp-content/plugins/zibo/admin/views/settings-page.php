<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="wrap">
	<h1>Zibo Settings</h1>

	<form method="post" action="options.php">

		<?php
		settings_fields( 'zibo_settings_group' );
		do_settings_sections( 'zibo-settings' );
		submit_button();
		?>

	</form>
</div>
