<?php
/**
 * inovate Theme Customizer
 *
 * @package inovate
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function inovate_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
//	$wp_customize-> add_setting(
//	'inovate-logo',
//	array(
//		'default'			=> '',
//		'sanitize_callback'	=> 'esc_url_raw',
//		)
//	);
//
//    $wp_customize-> add_control(
//	new WP_Customize_Image_Control(
//        $wp_customize,
//        'inovate-logo',
//        array(
//            'label' => __('OR Logo Upload', 'inovate'),
//            'section' => 'title_tagline',
//            'settings' => 'inovate-logo'
//            )
//        )
//    );
    
//    $wp_customize-> add_section(
//	    'inovate-layout',
//	    array(
//		    'title'		=> __('Layout Settings', 'inovate'),
//		    'description'	=> __('Customize the Layout of your site', 'inovate'),
//		    'priority'	=> 1
//	    )
//    );
//
//    $wp_customize-> add_setting(
//    'inovate-f-img',
//    array(
//    	'sanitize_callback'	=> 'inovate_sanitize_checkbox',
//    	)
//    );
//
//    $wp_customize-> add_control(
//    'inovate-f-img',
//    array(
//    	'type'		=> 'checkbox',
//    	'label'		=> __('Show Featured Image in the Post.','inovate'),
//    	'section'	=> 'inovate-layout',
//    	'priority'	=> 1,
//    	)
//    );
//
//    $wp_customize-> add_setting(
//	    'inovate-sidebar',
//	    array(
//		    'default'	=> 'right',
//		    'sanitize_callback'	=> 'inovate_sanitize_list1'
//	    )
//    );
//
//    $wp_customize-> add_control(
//	    'inovate-sidebar',
//	    array(
//		    'type'	=> 'radio',
//		    'label'	=> __('Sidebar layout for the site', 'inovate'),
//		    'description'	=> __('Specify the Sidebar orientation for the site','inovate'),
//		    'section'	=> 'inovate-layout',
//		    'choices'	=> array(
//			    'left'	=> 'Left Sidebar',
//			    'right'	=> 'Right Sidebar',
//		    ),
//	    )
//    );
    
//    $wp_customize->add_section(
//	'inovate-social',
//	array(
//    	'title'			=> __('Social Settings','inovate'),
//    	'description'	=> __('Manage the Social Icon Settings of your site.','inovate'),
//    	'priority'		=> 2,
//    	)
//	);
//
//	$wp_customize-> add_setting(
//    'social',
//    array(
//    	'sanitize_callback'	=> 'inovate_sanitize_checkbox',
//    	)
//    );
//
//    $wp_customize-> add_control(
//	    'social',
//	    array(
//	    	'type'		=> 'checkbox',
//	    	'label'		=> __('Enable Social Icons','inovate'),
//	    	'section'	=> 'inovate-social',
//	    	'priority'	=> 1,
//	    	)
//	    );
//

//
//
//    $wp_customize-> add_setting(
//    'inovate-facebook',
//    array(
//    	'default'	=> '',
//    	'sanitize_callback' => 'esc_url_raw',
//    	)
//    );
//
//    $wp_customize-> add_control(
//    'inovate-facebook',
//    array(
//    	'label'		=> __('Facebook URL','inovate'),
//    	'section'	=>	'inovate-social',
//    	'type'		=>	'text',
//    	)
//    );
//
//    $wp_customize-> add_setting(
//    'inovate-twitter',
//    array(
//    	'default'	=> '',
//    	'sanitize_callback' => 'esc_url_raw',
//    	)
//    );
//
//    $wp_customize-> add_control(
//    'inovate-twitter',
//    array(
//    	'label'		=> __('Twitter URL','inovate'),
//    	'section'	=>	'inovate-social',
//    	'type'		=>	'text',
//    	)
//    );
//
//    $wp_customize-> add_setting(
//    'inovate-gplus',
//    array(
//    	'default'	=> '',
//    	'sanitize_callback' => 'esc_url_raw',
//    	)
//    );
//
//    $wp_customize-> add_control(
//    'inovate-gplus',
//    array(
//    	'label'		=> __('Google+ URL','inovate'),
//    	'section'	=>	'inovate-social',
//    	'type'		=>	'text',
//    	)
//    );
//
//    $wp_customize-> add_setting(
//    'inovate-instagram',
//    array(
//    	'default'	=> '',
//    	'sanitize_callback' => 'esc_url_raw',
//    	)
//    );
//
//    $wp_customize-> add_control(
//    'inovate-instagram',
//    array(
//    	'label'		=> __('Instagram URL','inovate'),
//    	'section'	=>	'inovate-social',
//    	'type'		=>	'text',
//    	)
//    );
//
//    $wp_customize-> add_setting(
//    'inovate-flickr',
//    array(
//    	'default'	=> '',
//    	'sanitize_callback' => 'esc_url_raw',
//    	)
//    );
//
//    $wp_customize-> add_control(
//    'inovate-flickr',
//    array(
//    	'label'		=> __('Flickr URL','inovate'),
//    	'section'	=>	'inovate-social',
//    	'type'		=>	'text',
//    	)
//    );
//
//    $wp_customize-> add_setting(
//    'inovate-pinterest',
//    array(
//    	'default'	=> '',
//    	'sanitize_callback' => 'esc_url_raw',
//    	)
//    );
//
//    $wp_customize-> add_control(
//    'inovate-pinterest',
//    array(
//    	'label'		=> __('Pinterest URL','inovate'),
//    	'section'	=>	'inovate-social',
//    	'type'		=>	'text',
//    	)
//    );
//
//    $wp_customize-> add_setting(
//    'inovate-youtube',
//    array(
//    	'default'	=> '',
//    	'sanitize_callback' => 'esc_url_raw',
//    	)
//    );
//
//    $wp_customize-> add_control(
//    'inovate-youtube',
//    array(
//    	'label'		=> __('YouTube URL','inovate'),
//    	'section'	=>	'inovate-social',
//    	'type'		=>	'text',
//    	)
//    );
//
//    $wp_customize-> add_setting(
//    'inovate-rss',
//    array(
//    	'default'	=> '',
//    	'sanitize_callback' => 'esc_url_raw',
//    	)
//    );
//
//    $wp_customize-> add_control(
//    'inovate-rss',
//    array(
//    	'label'		=> __('RSS URL','inovate'),
//    	'section'	=>	'inovate-social',
//    	'type'		=>	'text',
//    	)
//    );
//
//    $wp_customize-> add_setting(
//    'inovate-linkedin',
//    array(
//    	'default'	=> '',
//    	'sanitize_callback' => 'esc_url_raw',
//    	)
//    );
//
//    $wp_customize-> add_control(
//    'inovate-linkedin',
//    array(
//    	'label'		=> __('LinkedIn URL','inovate'),
//    	'section'	=>	'inovate-social',
//    	'type'		=>	'text',
//    	)
//    );
//
//    $wp_customize-> add_setting(
//    'inovate-stumbleupon',
//    array(
//    	'default'	=> '',
//    	'sanitize_callback' => 'esc_url_raw',
//    	)
//    );
//
//    $wp_customize-> add_control(
//    'inovate-stumbleupon',
//    array(
//    	'label'		=> __('StumbleUpon URL','inovate'),
//    	'section'	=>	'inovate-social',
//    	'type'		=>	'text',
//    	)
//    );
//
//    $wp_customize-> add_setting(
//    'inovate-mail',
//    array(
//    	'default'	=> '',
//    	'sanitize_callback' => 'esc_url_raw',
//    	)
//    );
//
//    $wp_customize-> add_control(
//    'inovate-mail',
//    array(
//    	'label'		=> __('Contact Page URL','inovate'),
//    	'section'	=>	'inovate-social',
//    	'type'		=>	'text',
//    	)
//    );
//
//    $wp_customize-> add_setting(
//    'inovate-soundcloud',
//    array(
//    	'default'	=> '',
//    	'sanitize_callback' => 'esc_url_raw',
//    	)
//    );
//
//    $wp_customize-> add_control(
//    'inovate-soundcloud',
//    array(
//    	'label'		=> __('SoundCloud URL','inovate'),
//    	'section'	=>	'inovate-social',
//    	'type'		=>	'text',
//    	)
//    );
//
//    $wp_customize-> add_setting(
//    'inovate-vimeo',
//    array(
//    	'default'	=> '',
//    	'sanitize_callback' => 'esc_url_raw',
//    	)
//    );
//
//    $wp_customize-> add_control(
//    'inovate-vimeo',
//    array(
//    	'label'		=> __('Vimeo URL','inovate'),
//    	'section'	=>	'inovate-social',
//    	'type'		=>	'text',
//    	)
//    );




    

}
add_action( 'customize_register', 'inovate_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function inovate_customize_preview_js() {
	wp_enqueue_script( 'inovate_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'inovate_customize_preview_js' );
