<?php
function inovate_customize_register_layouts($wp_customize)
{
    $wp_customize->get_section('background_image')->panel = 'inovate_design_panel';
    $wp_customize->get_section('colors')->panel = 'inovate_design_panel';

    $wp_customize->add_panel('inovate_design_panel', array(
        'title' => __('Design & Layout', 'inovate'),
        'priority' => 50,
    ));

    $wp_customize->add_section(
        'inovate_sidebar_options',
        array(
            'title' => __('Sidebar Layout', 'inovate'),
            'priority' => 1,
            'panel' => 'inovate_design_panel'
        )
    );

    $wp_customize->add_setting(
        'inovate_disable_sidebar',
        array('sanitize_callback' => 'inovate_sanitize_checkbox')
    );

    $wp_customize->add_control(
        'inovate_disable_sidebar', array(
            'settings' => 'inovate_disable_sidebar',
            'label' => __('Disable Sidebar Everywhere.', 'inovate'),
            'section' => 'inovate_sidebar_options',
            'type' => 'checkbox',
            'default' => false
        )
    );

    $wp_customize->add_setting(
        'inovate_disable_sidebar_home',
        array('sanitize_callback' => 'inovate_sanitize_checkbox')
    );

    $wp_customize->add_control(
        'inovate_disable_sidebar_home', array(
            'settings' => 'inovate_disable_sidebar_home',
            'label' => __('Disable Sidebar on Home/Blog.', 'inovate'),
            'section' => 'inovate_sidebar_options',
            'type' => 'checkbox',
            'active_callback' => 'inovate_show_sidebar_options',
            'default' => false
        )
    );

    $wp_customize->add_setting(
        'inovate_disable_sidebar_front',
        array('sanitize_callback' => 'inovate_sanitize_checkbox')
    );

    $wp_customize->add_control(
        'inovate_disable_sidebar_front', array(
            'settings' => 'inovate_disable_sidebar_front',
            'label' => __('Disable Sidebar on Front Page.', 'inovate'),
            'section' => 'inovate_sidebar_options',
            'type' => 'checkbox',
            'active_callback' => 'inovate_show_sidebar_options',
            'default' => false
        )
    );


    $wp_customize->add_setting(
        'inovate_sidebar_width',
        array(
            'default' => 4,
            'sanitize_callback' => 'inovate_sanitize_positive_number')
    );

    $wp_customize->add_control(
        'inovate_sidebar_width', array(
            'settings' => 'inovate_sidebar_width',
            'label' => __('Sidebar Width', 'inovate'),
            'description' => __('Min: 25%, Default: 33%, Max: 40%', 'inovate'),
            'section' => 'inovate_sidebar_options',
            'type' => 'range',
            'active_callback' => 'inovate_show_sidebar_options',
            'input_attrs' => array(
                'min' => 3,
                'max' => 5,
                'step' => 1,
                'class' => 'sidebar-width-range',
                'style' => 'color: #0a0',
            ),
        )
    );

    $wp_customize->add_setting(
        'inovate_sidebar_alignment',
        array(
            'default' => 'right',
            'transport' => 'refresh',
            'sanitize_callback' => 'inovate_sanitize_radio',
        )
    );

    $wp_customize->add_control(
        'inovate_sidebar_alignment',
        array(
            'type' => 'radio',
            'label' => 'Sidebar Layout',
            'section' => 'inovate_sidebar_options',
            'settings' => 'inovate_sidebar_alignment',
            'active_callback' => 'inovate_show_sidebar_options',
            'choices' => array(
                'left' => 'Left Sidebar',
                'right' => 'Right Sidebar',
            ),
        )
    );

    /* Active Callback Function */
    function inovate_show_sidebar_options($control)
    {

        $option = $control->manager->get_setting('inovate_disable_sidebar');
        return $option->value() == false;

    }

    $wp_customize->add_section(
        'inovate_design_options',
        array(
            'title' => __('Blog Layout', 'inovate'),
            'priority' => 0,
            'panel' => 'inovate_design_panel'
        )
    );


    $wp_customize->add_setting(
        'inovate_blog_layout',
        array(
            'deafault' => 'inovate',
            'sanitize_callback' => 'inovate_sanitize_blog_layout')
    );

    function inovate_sanitize_blog_layout($input) {
        if (in_array($input, array( 'grid',)))
            return $input;
        else
            return '';


    }
    $wp_customize->add_control(
        'inovate_blog_layout', array(
            'label' => __('Select Layout', 'inovate'),
            'description' => __('Use 3 Column Layouts, only after disabling sidebar for the page.', 'inovate'),
            'settings' => 'inovate_blog_layout',
            'section' => 'inovate_design_options',
            'type' => 'select',
            'choices' => array(
                'grid' => __('Standard Blog Layout', 'inovate'),
            )
        )
    );
}
add_action('customize_register', 'inovate_customize_register_layouts');