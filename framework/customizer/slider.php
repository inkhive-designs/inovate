<?php
function inovate_customize_register_slider($wp_customize) {
    $wp_customize-> add_panel(
        'inovate-slider', array(
        'priority'       => 30,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Slider Settings', 'inovate'),
        'description'    => '',
    ));

    $wp_customize-> add_section(
        'inovate-slides',
        array(
            'title'			=> __('Enable Slider','inovate'),
            'priority'		=> 3,
            'panel'			=> 'inovate-slider',
        )
    );

    $wp_customize-> add_setting(
        'inovate-slide_enable',
        array(
            'sanitize_callback'	=> 'inovate_sanitize_checkbox',
        )
    );

    $wp_customize-> add_control(
        'inovate-slide_enable',
        array(
            'type'		=> 'checkbox',
            'label'		=> __('Enable Slider','inovate'),
            'section'	=> 'inovate-slides',
            'priority'	=> 1,
        )
    );

    $wp_customize->add_setting(
        'inovate-slider-background',
        array(
            'default'	=> get_template_directory_uri()	.'/assets/images/slider/background.jpg',
            'sanitize_callback'	=> 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'inovate-slider-background',
            array(
                'label' => __('Background Image Upload','inovate'),
                'description'	=> __('Recommended width of the background Image is 1440px.','inovate'),
                'section' => 'inovate-slides',
                'settings' => 'inovate-slider-background',
            )
        )
    );

    $wp_customize-> add_section(
        'inovate-slide-1', array(
            'title'		=> __('Slide 1', 'inovate'),
            'panel'		=> 'inovate-slider',
        )
    );

    $wp_customize->add_setting(
        'inovate-slide_1', array(
            'sanitize_callback'	=> 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'inovate-slide_1',
            array(
                'label' => __('Slide Upload','inovate'),
                'section' => 'inovate-slide-1',
                'settings' => 'inovate-slide_1',
            )
        )
    );

    $wp_customize-> add_setting(
        'inovate-desc-1', array(
            'sanitize_callback'	=> 'inovate_sanitize_text',
        )
    );

    $wp_customize-> add_control(
        'inovate-desc-1', array(
            'label'		=> __('Description','inovate'),
            'section'	=> 'inovate-slide-1',
            'type'		=> 'text',
        )
    );

    $wp_customize-> add_setting(
        'inovate-url-1', array(
            'sanitize_callback'	=> 'esc_url_raw',
        )
    );

    $wp_customize-> add_control(
        'inovate-url-1', array(
            'label'		=> __('URL','inovate'),
            'section'	=> 'inovate-slide-1',
            'type'		=> 'text',
        )
    );

    $wp_customize-> add_section(
        'inovate-slide-2', array(
            'title'		=> __('Slide 2', 'inovate'),
            'panel'		=> 'inovate-slider',
        )
    );

    $wp_customize->add_setting(
        'inovate-slide_2', array(
            'sanitize_callback'	=> 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'inovate-slide_2',
            array(
                'label' => __('Slide Upload','inovate'),
                'section' => 'inovate-slide-2',
                'settings' => 'inovate-slide_2',
            )
        )
    );

    $wp_customize-> add_setting(
        'inovate-desc-2', array(
            'sanitize_callback'	=> 'inovate_sanitize_text',
        )
    );

    $wp_customize-> add_control(
        'inovate-desc-2', array(
            'label'		=> __('Description','inovate'),
            'section'	=> 'inovate-slide-2',
            'type'		=> 'text',
        )
    );

    $wp_customize-> add_setting(
        'inovate-url-2', array(
            'sanitize_callback'	=> 'esc_url_raw',
        )
    );

    $wp_customize-> add_control(
        'inovate-url-2', array(
            'label'		=> __('URL','inovate'),
            'section'	=> 'inovate-slide-2',
            'type'		=> 'text',
        )
    );

    $wp_customize-> add_section(
        'inovate-slide-3', array(
            'title'		=> __('Slide 3', 'inovate'),
            'panel'		=> 'inovate-slider',
        )
    );

    $wp_customize->add_setting(
        'inovate-slide_3', array(
            'sanitize_callback'	=> 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'inovate-slide_3',
            array(
                'label' => __('Slide Upload','inovate'),
                'section' => 'inovate-slide-3',
                'settings' => 'inovate-slide_3',
            )
        )
    );

    $wp_customize-> add_setting(
        'inovate-desc-3', array(
            'sanitize_callback'	=> 'inovate_sanitize_text',
        )
    );

    $wp_customize-> add_control(
        'inovate-desc-3', array(
            'label'		=> __('Description','inovate'),
            'section'	=> 'inovate-slide-3',
            'type'		=> 'text',
        )
    );

    $wp_customize-> add_setting(
        'inovate-url-3', array(
            'sanitize_callback'	=> 'esc_url_raw',
        )
    );

    $wp_customize-> add_control(
        'inovate-url-3', array(
            'label'		=> __('URL','inovate'),
            'section'	=> 'inovate-slide-3',
            'type'		=> 'text',
        )
    );
}
add_action('customize_register', 'inovate_customize_register_slider');