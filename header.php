<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package inovate
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<div class = "nav-wrapper">
	<div class = "container">
	<div class = "default-nav col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<nav id="site-navigation" class="main-navigation toggled" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'inovate' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</div>
	</div>
	</div>
	
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'inovate' ); ?></a>
	<?php global $opt_inovate; ?>
	<header id="masthead" class="site-header container" role="banner">
			<div class="site-branding">
					<?php if ( get_theme_mod( 'inovate-logo', '') != '' ) : ?>
						<div id="site-logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_mod('inovate-logo') ); ?>"></a>
						</div>
					<?php else : ?>	
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" data-hover="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					<?php endif; ?>	

		</div>
		
	<?php
	
	/*
	Checking for Social icons.
	Calling the social.php template if social icons are enabled.
	*/
		if ( get_theme_mod('social') ):
	 get_template_part('social'); 
	 endif; ?>
	 
	 <div id="search-bar" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<form method="get" id="searchform" action="<?php echo esc_url( home_url() ); ?>/">
						<div><input type="text" size="18" value="" name="s" id="s" />
						<button type="submit" class="search-submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</div>
				</form>		
		</div>

	</header><!-- #masthead -->
	
	<?php
	
	/*
	* The Showcase Section.
	* Checking the conditions of either a blog page or static front page.
	* Calling showcase.php template if the Showcase is enabled.
	*/
	 if (is_home() && is_front_page()) {
			if ( get_theme_mod('inovate-showcase-check')) {
				get_template_part('showcase'); 
		 	}
		 }
		 
	get_template_part('slider'); ?>
	
	<div id="bar"></div>
	
	<div id="content" class="site-content container">
