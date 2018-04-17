<?php
/**
 * inovate functions and definitions
 *
 * @package inovate
 */


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 730; /* pixels */
}

if ( ! function_exists( 'inovate_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function inovate_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on inovate, use a find and replace
	 * to change 'inovate' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'inovate', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('home-thumb',1200, 600, true);
	add_image_size('showcase-thumb',500, 400, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'inovate' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
	
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'inovate_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // inovate_setup
add_action( 'after_setup_theme', 'inovate_setup' );

/*Enqueue Font in the theme */

function inovate_fonts_url() {
    $fonts_url = '';
    
    $open_sans = _x('on', 'Open Sans font: on or off', 'inovate');
    
    $libre	= _x('on', 'Libre Baskerville font: on or off', 'inovate');

	if ( 'off' !== $open_sans || 'off'	!== $libre ) {
	    $font_families = array();
	
	    if ('off' !== $open_sans ) {
		    $font_families[] = 'Open Sans:300,400';
	    }
	    
	    if ('off' !== $libre ) {
		    $font_families[] = 'Libre Baskerville:400,700';
	    }
	    
		$query_args = array(
		    'family' => urlencode( implode( '|', $font_families ) ),
		    'subset' => urlencode( 'latin,latin-ext' ),
		);
	}
	
	$fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
 
    return $fonts_url;
}

function inovate_scripts_styles() {
    wp_enqueue_style( 'inovate-fonts', inovate_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'inovate_scripts_styles' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function inovate_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'inovate' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'inovate' ), /* Primary Sidebar for Everywhere else */
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'inovate' ), /* Primary Sidebar for Everywhere else */
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'inovate' ), /* Primary Sidebar for Everywhere else */
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer 4', 'inovate' ), /* Primary Sidebar for Everywhere else */
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'inovate_widgets_init' );

function inovate_initialize_header() {

	echo "<script>"; ?>
	
		$(document).ready(function(){
		  $('.bxslider').bxSlider({
		  mode: 'fade',
		  adaptiveHeight: true,
		  captions: true
		 });
		});	
		
	<?php
	
	echo "</script>";
	
	echo "<style>";
	
	if ( get_theme_mod( 'inovate-sidebar','right' ) == 'left' ) {
		echo ".single #primary {
				float: right;
				}";
	}
	
	echo "</style>";
	
} 

add_action('wp_head', 'inovate_initialize_header');


/**
 * Enqueue scripts and styles.
 */
function inovate_scripts() {

	wp_enqueue_style( 'inovate-style', get_stylesheet_uri() );
	
	wp_enqueue_style('inovate-bootstrap-style',get_template_directory_uri()."/assets/bootstrap/css/bootstrap.css", array('inovate-style'));
	
	wp_enqueue_style('inovate-custom-style',get_template_directory_uri()."/assets/skins/main.css", array('inovate-bootstrap-style'));
	
	wp_enqueue_style('inovate-font-awesome',get_template_directory_uri()."/assets/font-awesome/css/font-awesome.min.css", array('inovate-custom-style'));

	
	wp_enqueue_style('bx-slider-default-theme-skin', get_template_directory_uri(). "/assets/slider/jquery.bxslider.css", array('inovate-custom-style'));

	wp_enqueue_script( 'inovate-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	
	wp_enqueue_script( 'inovate-js', get_template_directory_uri() . '/js/jquery-1.11.2.js', array('jquery'));
	
	wp_enqueue_script( 'inovate-slider-js', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array(), true );
	
	wp_enqueue_script( 'inovate-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), true );

	wp_enqueue_script( 'inovate-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'inovate_scripts' );

function inovate_custom_css() {
	
		$bg		=	get_theme_mod('inovate-slider-background' );
		$css1	=	"#slider-wrapper {
					background: url($bg) center center;
					}";
	
	wp_add_inline_style('inovate-custom-style', $css1 );
}

add_action('wp_enqueue_scripts', 'inovate_custom_css');

function modify_read_more_link() {
    return '<br><a class="more-link" href="' . get_permalink() . '">Read More</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
