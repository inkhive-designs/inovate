<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package inovate
 */
get_template_part('modules/header/head'); ?>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<?php get_template_part('modules/navigation/primary', 'menu'); ?>
	
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'inovate' ); ?></a>

    <?php get_template_part('modules/header/masthead'); ?>
	
	<?php
	
	/*
	* The Showcase Section.
	* Checking the conditions of either a blog page or static front page.
	* Calling showcase.php template if the Showcase is enabled.
	*/
	get_template_part('framework/featured-components/showcase');

		 
	get_template_part('framework/featured-components/slider'); ?>
	
	<div id="bar"></div>
	
	<div id="content" class="site-content container">
