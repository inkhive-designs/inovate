<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package inovate
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	
	<?php get_template_part('footer', 'sidebar'); ?>
	
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'inovate' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'inovate' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'inovate' ), 'inovate', '<a href="http://divjot.co/" rel="designer">Divjot Singh</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
