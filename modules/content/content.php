<?php
/**
 * @package inovate
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
 
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php inovate_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php 
?>
	</header><!-- .entry-header -->
	
	<div class="featured-thumb">
	<?php	
		if ( has_post_thumbnail() ) { 		
	?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<?php the_post_thumbnail('home-thumb'); ?> </a>
	<?php } ?> 
	</div>

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Read More', 'inovate' ), 
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'inovate' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
