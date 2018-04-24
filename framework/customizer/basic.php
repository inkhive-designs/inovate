<?php
function inovate_customize_register_basic($wp_customize) {
    $wp_customize->add_section('inovate_basic_settings', array(
        'title' => __('Basic Settings', 'inovate'),
        'priority' => 10,
        'panel' => 'inovate_design_panel'
    ));

    $wp_customize->add_setting(
        'inovate-featured',
        array(
            'default'	=> true,
            'sanitize_callback'	=> 'inovate_sanitize_checkbox'
        )
    );

    $wp_customize->add_control(
        'inovate-featured',
        array(
            'type'	=> 'checkbox',
            'label'	=> __('Show the Featured Image in Posts','inovate'),
            'section'	=> 'inovate_basic_settings'
        )
    );

}
add_action('customize_register', 'inovate_customize_register_basic');