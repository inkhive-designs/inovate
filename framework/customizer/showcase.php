<?php
function inovate_customize_register_showcase($wp_customize) {
    $wp_customize->add_panel(
        'inovate-showcase',
        array(
            'priority'       => 40,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => __('Showcase Settings', 'inovate'),
        )
    );

    $wp_customize->add_section(
        'inovate-showcase-enable',
        array(
            'title'		=> __( 'Enable Showcase','inovate' ),
            'priority'	=> 1,
            'panel'	=> 'inovate-showcase',
        )
    );

    $wp_customize->add_setting(
        'inovate-showcase-check',
        array(
            'default'			=> false,
            'sanitize_callback'	=> 'inovate_sanitize_checkbox',
        )
    );

    $wp_customize->add_control(
        'inovate-showcase-check',
        array(
            'label'		=> __( 'Enable the Showcase area', 'inovate' ),
            'description'=> __('Showcase will be enabled only on the homepage','inovate'),
            'type'		=> 'checkbox',
            'section'	=> 'inovate-showcase-enable',
            'priority'	=> 1,
        )
    );

    $wp_customize->add_section(
        'inovate-showcase-1',
        array(
            'title'		=> __('Featured Item 1','inovate'),
            'priority'	=> 1,
            'panel'		=> 'inovate-showcase',
        )
    );

    $wp_customize->add_setting(
        'inovate-s-img-1', array(
            'sanitize_callback'	=> 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'inovate-s-img-1',
            array(
                'label' => __('Image Upload','inovate'),
                'section' => 'inovate-showcase-1',
                'settings' => 'inovate-s-img-1',
            )
        )
    );

    $wp_customize-> add_setting(
        'inovate-s-title-1', array(
            'sanitize_callback'	=> 'inovate_sanitize_text',
        )
    );

    $wp_customize-> add_control(
        'inovate-s-title-1', array(
            'label'		=> __('Description','inovate'),
            'section'	=> 'inovate-showcase-1',
            'type'		=> 'text',
        )
    );

    $wp_customize-> add_setting(
        'inovate-s-url-1', array(
            'sanitize_callback'	=> 'esc_url_raw',
        )
    );

    $wp_customize-> add_control(
        'inovate-s-url-1', array(
            'label'		=> __('URL','inovate'),
            'section'	=> 'inovate-showcase-1',
            'type'		=> 'text',
        )
    );

    $wp_customize->add_section(
        'inovate-showcase-2',
        array(
            'title'		=> __('Featured Item 2','inovate'),
            'priority'	=> 2,
            'panel'		=> 'inovate-showcase',
        )
    );

    $wp_customize->add_setting(
        'inovate-s-img-2', array(
            'sanitize_callback'	=> 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'inovate-s-img-2',
            array(
                'label' => __('Image Upload','inovate'),
                'section' => 'inovate-showcase-2',
                'settings' => 'inovate-s-img-2',
            )
        )
    );

    $wp_customize-> add_setting(
        'inovate-s-title-2', array(
            'sanitize_callback'	=> 'inovate_sanitize_text',
        )
    );

    $wp_customize-> add_control(
        'inovate-s-title-2', array(
            'label'		=> __('Description','inovate'),
            'section'	=> 'inovate-showcase-2',
            'type'		=> 'text',
        )
    );

    $wp_customize-> add_setting(
        'inovate-s-url-2', array(
            'sanitize_callback'	=> 'esc_url_raw',
        )
    );

    $wp_customize-> add_control(
        'inovate-s-url-2', array(
            'label'		=> __('URL','inovate'),
            'section'	=> 'inovate-showcase-2',
            'type'		=> 'text',
        )
    );

    $wp_customize->add_section(
        'inovate-showcase-3',
        array(
            'title'		=> __('Featured Item 3','inovate'),
            'priority'	=> 2,
            'panel'		=> 'inovate-showcase',
        )
    );

    $wp_customize->add_setting(
        'inovate-s-img-3', array(
            'sanitize_callback'	=> 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'inovate-s-img-3',
            array(
                'label' => __('Image Upload','inovate'),
                'section' => 'inovate-showcase-3',
                'settings' => 'inovate-s-img-3',
            )
        )
    );

    $wp_customize-> add_setting(
        'inovate-s-title-3', array(
            'sanitize_callback'	=> 'inovate_sanitize_text',
        )
    );

    $wp_customize-> add_control(
        'inovate-s-title-3', array(
            'label'		=> __('Description','inovate'),
            'section'	=> 'inovate-showcase-3',
            'type'		=> 'text',
        )
    );

    $wp_customize-> add_setting(
        'inovate-s-url-3', array(
            'sanitize_callback'	=> 'esc_url_raw',
        )
    );

    $wp_customize-> add_control(
        'inovate-s-url-3', array(
            'label'		=> __('URL','inovate'),
            'section'	=> 'inovate-showcase-3',
            'type'		=> 'text',
        )
    );
}
add_action('customize_register', 'inovate_customize_register_showcase');