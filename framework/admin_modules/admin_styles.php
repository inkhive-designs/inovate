<?php
/**
 * Enqueue Scripts for Admin
 */
function inovate_custom_wp_admin_style() {
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css' );
    wp_enqueue_style( 'inovate-admin_css', get_template_directory_uri() . '/assets/ext-css/admin.css' );
}
add_action( 'customize_controls_print_styles', 'inovate_custom_wp_admin_style' );