<?php
function inovate_customize_register_social($wp_customize) {
    $wp_customize-> add_section(
        'inovate_social_section',
        array(
            'title'			=> __('Social Icons','inovate'),
            'description'	=> __('Manage the Social Icon Setings of your site.','inovate'),
            'priority'		=> 20,
            'panel' => 'inovate_header_panel'
        )
    );

    $wp_customize-> add_setting(
        'inovate_social_enable',
        array(
            'priority'	=> 'inovate_sanitize_checkbox',
        )
    );

    $wp_customize-> add_control(
        'inovate_social_enable',
        array(
            'type'		=> 'checkbox',
            'label'		=> __('Enable Social Icons','inovate'),
            'section'	=> 'inovate_social_section',
            'settings'  => 'inovate_social_enable',
            'priority'	=> 1,
        )
    );

    $wp_customize->add_setting(
        'inovate-social-select',
        array(
            'default' => 'def',
            'sanitize_callback'	=> 'inovate_sanitize_sicon_type',
        )
    );

    $wp_customize->add_control(
        'inovate-social-select',
        array(
            'type' => 'select',
            'label' => __('Select the icons to be displayed','inovate'),
            'section' => 'inovate_social_section',
            'priority'	=> 2,
            'choices' => array(
                'def'		=> 'Default',
                'picons'		=> 'Picons',
                'soshion'	=> 'Soshions',
            ),
        )
    );

    function inovate_sanitize_sicon_type( $input ) {
        $valid = array(
            'def'		=> 'Default',
            'picons'		=> 'Picons',
            'soshion'	=> 'Soshions',
        );

        if ( array_key_exists( $input, $valid ) ) {
            return $input;
        } else {
            return '';
        }
    }

    $social_networks = array( //Redefinied in Sanitization Function.
        'none' => __('-','inovate'),
        'facebook' => __('Facebook','inovate'),
        'google' => __('Google Plus','inovate'),
        'twitter' => __('Twitter','inovate'),
        'instagram' => __('Instagram','inovate'),
        'linkedin' => __('LinkedIn','inovate'),
        'rss' => __('RSS Feeds','inovate'),
        'vimeo' => __('Vimeo','inovate'),
        'youtube' => __('Youtube','inovate'),
        'flickr' => __('Flickr','inovate'),
        'yelp' => __('Yelp','inovate'),
        'vk' => __('VK','inovate'),
        'stumbleupon' => __('StumbleUpon','inovate'),
        'soundcloud' => __('SoundCloud','inovate'),
        'pinterest' => __('Pinterest','inovate'),
        'mail' => __('Mail','inovate'),
    );

    $social_count = count($social_networks);

    for ($x = 1 ; $x <= ($social_count - 3) ; $x++) :

        $wp_customize->add_setting(
            'inovate_social_'.$x, array(
            'sanitize_callback' => 'inovate_sanitize_social',
            'default' => 'none'
        ));

        $wp_customize->add_control( 'inovate_social_'.$x, array(
            'settings' => 'inovate_social_'.$x,
            'label' => __('Icon ','inovate').$x,
            'section' => 'inovate_social_section',
            'type' => 'select',
            'choices' => $social_networks,
        ));

        $wp_customize->add_setting(
            'inovate_social_url'.$x, array(
            'sanitize_callback' => 'esc_url_raw'
        ));

        $wp_customize->add_control( 'inovate_social_url'.$x, array(
            'settings' => 'inovate_social_url'.$x,
            'description' => __('Icon ','inovate').$x.__(' Url','inovate'),
            'section' => 'inovate_social_section',
            'type' => 'url',
            'choices' => $social_networks,
        ));

    endfor;

    function inovate_sanitize_social( $input ) {
        $social_networks = array(
            'none' ,
            'facebook',
            'twitter',
            'google',
            'instagram',
            'rss',
            'vimeo',
            'youtube',
            'vk',
            'flickr',
            'mail',
            'soundcloud',
            'pinterest',
            'stumbleupon',
            'linkedin',
            'yelp',
        );
        if ( in_array($input, $social_networks) )
            return $input;
        else
            return '';
    }
}
add_action('customize_register', 'inovate_customize_register_social');