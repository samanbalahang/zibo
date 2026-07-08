<?php

$post_id = absint(
	$_GET['post_id'] ?? 0
);

?>

<div class="wrap">

	<h1>Salon Builder</h1>

	<p>
		Editing Salon ID:
		<strong>
			<?php echo esc_html( $post_id ); ?>
		</strong>
	</p>

	<div id="salon-builder-app">

		<h2>Visual Builder Coming Soon</h2>

	</div>

</div>