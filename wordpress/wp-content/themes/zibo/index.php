<?php
/**
 * The main template file.
 *
 * @package zibo
 * @since 0.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// 1. Determine which sidebars are active
$has_left_sidebar  = is_active_sidebar( 'sidebar-left' );
$has_right_sidebar = is_active_sidebar( 'sidebar-right' );

// 2. Set dynamic width classes for the main content
if ( $has_left_sidebar && $has_right_sidebar ) {
    // Both sidebars active: Left (25%), Main (50%), Right (25%)
    $main_width_class = 'w-full lg:w-1/2';
} elseif ( $has_left_sidebar || $has_right_sidebar ) {
    // Only one sidebar active: Main (75%), Sidebar (25%)
    $main_width_class = 'w-full lg:w-3/4';
} else {
    // No sidebars active: Main (100%)
    $main_width_class = 'w-full';
}

get_header(); ?>

<div class="site-content-layout flex flex-wrap lg:flex-nowrap gap-6 max-w-7xl mx-auto px-4 py-8">

    <?php 
    // Left Sidebar (Takes up 25% on desktop if active)
    if ( $has_left_sidebar ) {
        echo '<aside class="w-full lg:w-1/4">';
        get_sidebar( null, array( 'id' => 'sidebar-left' ) );
        echo '</aside>';
    } 
    ?>

    <main id="main" class="site-main <?php echo esc_attr( $main_width_class ); ?>">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                the_title( '<h1 class="text-3xl font-bold mb-4">', '</h1>' );
                echo '<div class="prose max-w-none">';
                the_content();
                echo '</div>';
            endwhile; // Fixed typo here (was end0while)
        else :
            echo '<p class="text-gray-500">No content found</p>';
        endif;
        ?>
    </main>

    <?php 
    // Right Sidebar (Takes up 25% on desktop if active)
    if ( $has_right_sidebar ) {
        echo '<aside class="w-full lg:w-1/4">';
        get_sidebar( null, array( 'id' => 'sidebar-right' ) );
        echo '</aside>';
    } 
    ?>

</div>

<?php
get_footer();