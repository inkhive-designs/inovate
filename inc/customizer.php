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
	
	$wp_customize-> add_setting(
	'inovate-logo',
	array(
		'default'			=> '',
		'sanitize_callback'	=> 'esc_url_raw',
		)
	);
    
    $wp_customize-> add_control(
	new WP_Customize_Image_Control(
        $wp_customize,
        'inovate-logo',
        array(
            'label' => __('OR Logo Upload', 'inovate'),
            'section' => 'title_tagline',
            'settings' => 'inovate-logo'
            )
        )
    );
    
    $wp_customize-> add_section(
	    'inovate-layout',
	    array(
		    'title'		=> __('Layout Settings', 'inovate'),
		    'description'	=> __('Customize the Layout of your site', 'inovate'),
		    'priority'	=> 1
	    )
    );
    
    $wp_customize-> add_setting(
    'inovate-f-img',
    array(
    	'sanitize_callback'	=> 'inovate_sanitize_checkbox',
    	)
    );
    
    $wp_customize-> add_control(
    'inovate-f-img',
    array(
    	'type'		=> 'checkbox',
    	'label'		=> __('Show Featured Image in the Post.','inovate'),
    	'section'	=> 'inovate-layout',
    	'priority'	=> 1,
    	)
    );
    
    $wp_customize-> add_setting(
	    'inovate-sidebar',
	    array(
		    'default'	=> 'right',
		    'sanitize_callback'	=> 'inovate_sanitize_list1'
	    )
    );
    
    $wp_customize-> add_control(
	    'inovate-sidebar',
	    array(
		    'type'	=> 'radio',
		    'label'	=> __('Sidebar layout for the site', 'inovate'),
		    'description'	=> __('Specify the Sidebar orientation for the site','inovate'),
		    'section'	=> 'inovate-layout',
		    'choices'	=> array(
			    'left'	=> 'Left Sidebar',
			    'right'	=> 'Right Sidebar',
		    ),
	    )
    );
    
    $wp_customize->add_section(
	'inovate-social',
	array(
    	'title'			=> __('Social Settings','inovate'),
    	'description'	=> __('Manage the Social Icon Settings of your site.','inovate'),
    	'priority'		=> 2,
    	)
	);
	
	$wp_customize-> add_setting(
    'social',
    array(
    	'sanitize_callback'	=> 'inovate_sanitize_checkbox',
    	)
    );
    
    $wp_customize-> add_control(
	    'social',
	    array(
	    	'type'		=> 'checkbox',
	    	'label'		=> __('Enable Social Icons','inovate'),
	    	'section'	=> 'inovate-social',
	    	'priority'	=> 1,
	    	)
	    );
	    
	    $wp_customize->add_setting(
	    'inovate-social-select',
	    array(
	        'default' => 'def',
	        'sanitize_callback'	=> 'inovate_sanitize_list2',
	    )
	);
	 
	$wp_customize->add_control(
	    'inovate-social-select',
	    array(
	        'type' => 'select',
	        'label' => __('Select the icons to be displayed','inovate'),
	        'section' => 'inovate-social',
	        'priority'	=> 2,
	        'choices' => array(
	            'def'		=> 'Default',
	            'picons'		=> 'Picons',
	            'soshion'	=> 'Soshions',
	        ),
	    )
	);

   
    $wp_customize-> add_setting(
    'inovate-facebook',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'inovate-facebook',
    array(
    	'label'		=> __('Facebook URL','inovate'),
    	'section'	=>	'inovate-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'inovate-twitter',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'inovate-twitter',
    array(
    	'label'		=> __('Twitter URL','inovate'),
    	'section'	=>	'inovate-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'inovate-gplus',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'inovate-gplus',
    array(
    	'label'		=> __('Google+ URL','inovate'),
    	'section'	=>	'inovate-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'inovate-instagram',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'inovate-instagram',
    array(
    	'label'		=> __('Instagram URL','inovate'),
    	'section'	=>	'inovate-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'inovate-flickr',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'inovate-flickr',
    array(
    	'label'		=> __('Flickr URL','inovate'),
    	'section'	=>	'inovate-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'inovate-pinterest',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'inovate-pinterest',
    array(
    	'label'		=> __('Pinterest URL','inovate'),
    	'section'	=>	'inovate-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'inovate-youtube',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'inovate-youtube',
    array(
    	'label'		=> __('YouTube URL','inovate'),
    	'section'	=>	'inovate-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'inovate-rss',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'inovate-rss',
    array(
    	'label'		=> __('RSS URL','inovate'),
    	'section'	=>	'inovate-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'inovate-linkedin',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'inovate-linkedin',
    array(
    	'label'		=> __('LinkedIn URL','inovate'),
    	'section'	=>	'inovate-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'inovate-stumbleupon',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'inovate-stumbleupon',
    array(
    	'label'		=> __('StumbleUpon URL','inovate'),
    	'section'	=>	'inovate-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'inovate-mail',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'inovate-mail',
    array(
    	'label'		=> __('Contact Page URL','inovate'),
    	'section'	=>	'inovate-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'inovate-soundcloud',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'inovate-soundcloud',
    array(
    	'label'		=> __('SoundCloud URL','inovate'),
    	'section'	=>	'inovate-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'inovate-vimeo',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'inovate-vimeo',
    array(
    	'label'		=> __('Vimeo URL','inovate'),
    	'section'	=>	'inovate-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_panel(
    'inovate-slider', array(
    'priority'       => 10,
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
		    'default'	=> get_template_directory_uri()	.	'/images/slider/background.jpg',
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
	
	$wp_customize->add_panel(
    'inovate-showcase', 
    	array(
		    'priority'       => 12,
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
    
    function inovate_sanitize_checkbox( $i ) {
	    if ( $i == 1 ) {
	        return 1;
	    } 
	    else {
	        return '';
	    }
	 }
	 
	 function inovate_sanitize_list1( $input ) {
	    $valid = array(
	            'left'	=> 'Left Sidebar',
			    'right'	=> 'Right Sidebar'
	        );
	 
	    if ( array_key_exists( $input, $valid ) ) {
	        return $input;
	    } else {
	        return '';
	    }
	}
	
	function inovate_sanitize_list2( $input ) {
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
	
	 function inovate_sanitize_text( $input ) {
	    return wp_kses_post( force_balance_tags( $input ) );
	}
}
add_action( 'customize_register', 'inovate_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function inovate_customize_preview_js() {
	wp_enqueue_script( 'inovate_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'inovate_customize_preview_js' );
