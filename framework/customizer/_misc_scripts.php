<?php
function inovate_customize_register_misc($wp_customize) {
    //Upgrade to Pro
    $wp_customize->add_section(
        'inovate_sec_pro',
        array(
            'title'     => __('Important Links','inovate'),
            'priority'  => 10,
        )
    );

    $wp_customize->add_setting(
        'inovate_pro',
        array( 'sanitize_callback' => 'esc_textarea' )
    );

    $wp_customize->add_control(
        new Inovate_WP_Customize_Upgrade_Control(
            $wp_customize,
            'inovate_pro',
            array(
                'description'	=> '<a class="inovate-important-links" href="https://inkhive.com/contact-us/" target="_blank">'.__('InkHive Support Forum', 'inovate').'</a>
                                    <a class="inovate-important-links" href="https://www.facebook.com/inkhivethemes/" target="_blank">'.__('We Love Our Facebook Fans', 'inovate').'</a>
                                    <a class="inovate-important-links" href="https://wordpress.org/support/theme/inovate/reviews" target="_blank">'.__('Review Inovate on WordPress', 'inovate').'</a>',
                'section' => 'inovate_sec_pro',
                'settings' => 'inovate_pro',
            )
        )
    );
}
add_action('customize_register', 'inovate_customize_register_misc');