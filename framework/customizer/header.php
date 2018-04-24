<?php
function inovate_customize_register_header_settings($wp_customize) {
    $wp_customize-> get_section('title_tagline')->panel = 'inovate_header_panel';
    $wp_customize-> get_section('header_image')->panel = 'inovate_header_panel';

    $wp_customize-> add_panel('inovate_header_panel', array(
       'title' => __('Header Settings', 'inovate'),
       'priority' => 20
    ));
}
add_action('customize_register', 'inovate_customize_register_header_settings');