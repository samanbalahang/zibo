<?php
// Retrieve the sidebar ID passed from the template, defaulting to 'sidebar-left'
$sidebar_id = isset( $args['id'] ) ? $args['id'] : 'sidebar-left';

// If the requested sidebar has no active widgets, stop here
if ( ! is_active_sidebar( $sidebar_id ) ) {
    return;
}
?>

<aside class="sidebar class-<?php echo esc_attr( $sidebar_id ); ?>">
    <?php dynamic_sidebar( $sidebar_id ); ?>
</aside>