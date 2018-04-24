<?php
function inovate_customize_register_googlefonts($wp_customize){
    $wp_customize->add_section(
        'inovate_typo_options',
        array(
            'title'     => __('Google Web Fonts','inovate'),
            'priority'  => 41,
            'panel' => 'inovate_design_panel'
        )
    );

    $font_array = array('Libre Baskerville','HIND','Khula','Open Sans','Droid Sans','Droid Serif','Roboto','Roboto Condensed','Lato','Bree Serif','Oswald','Slabo','Lora','Source Sans Pro','Arimo','Bitter','Noto Sans');
    $fonts = array_combine($font_array, $font_array);

    $wp_customize->add_setting(
        'inovate_title_font',
        array(
            'default'=> 'Libre Baskerville',
            'sanitize_callback' => 'inovate_sanitize_gfont'
        )
    );

    function inovate_sanitize_gfont( $input ) {
        if ( in_array($input, array('Libre Baskerville','HIND','Khula','Open Sans','Droid Sans','Droid Serif','Roboto','Roboto Condensed','Lato','Bree Serif','Oswald','Slabo','Lora','Source Sans Pro','Arimo','Bitter','Noto Sans') ) )
            return $input;
        else
            return '';
    }

    $wp_customize->add_control(
        'inovate_title_font',array(
            'label' => __('Title','inovate'),
            'settings' => 'inovate_title_font',
            'section'  => 'inovate_typo_options',
            'type' => 'select',
            'choices' => $fonts,
        )
    );

    $wp_customize->add_setting(
        'inovate_body_font',
        array(	'default'=> 'Open Sans',
            'sanitize_callback' => 'inovate_sanitize_gfont' )
    );

    $wp_customize->add_control(
        'inovate_body_font',array(
            'label' => __('Body','inovate'),
            'settings' => 'inovate_body_font',
            'section'  => 'inovate_typo_options',
            'type' => 'select',
            'choices' => $fonts
        )
    );
}
add_action('customize_register', 'inovate_customize_register_googlefonts');