<?php
/**
 * Enqueue scripts and styles.
 */
function inovate_scripts() {

    wp_enqueue_style( 'inovate-style', get_stylesheet_uri() );

    wp_enqueue_style('inovate-title-font', '//fonts.googleapis.com/css?family='.str_replace(" ", "+", esc_html(get_theme_mod('inovate_title_font', 'Libre Baskerville')) ).':100,300,400,700' );

    wp_enqueue_style('inovate-body-font', '//fonts.googleapis.com/css?family='.str_replace(" ", "+", esc_html(get_theme_mod('inovate_body_font', 'Open Sans') ) ).':100,300,400,700' );

    wp_enqueue_style('inovate-bootstrap-style',get_template_directory_uri()."/assets/bootstrap/css/bootstrap.css", array('inovate-style'));

    wp_enqueue_style('inovate-main-style',get_template_directory_uri()."/assets/theme-styles/css/default.css", array('inovate-bootstrap-style'));

    wp_enqueue_style('inovate-font-awesome',get_template_directory_uri()."/assets/font-awesome/css/font-awesome.min.css", array('inovate-main-style'));

    wp_enqueue_style('bx-slider-default-theme-skin', get_template_directory_uri(). "/assets/slider/jquery.bxslider.css", array('inovate-main-style'));

    wp_enqueue_script( 'inovate-external', get_template_directory_uri() . '/js/external.js', array('jquery'), '20120206', true );

    wp_enqueue_script( 'inovate-slider-js', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array(), true );

    wp_enqueue_script( 'inovate-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), true );

    wp_enqueue_script( 'inovate-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    
    wp_enqueue_script( 'inovate-custom-js', get_template_directory_uri() . '/js/custom.js' );

}
add_action( 'wp_enqueue_scripts', 'inovate_scripts' );