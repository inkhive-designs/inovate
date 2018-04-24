<?php
/**
 * @package Inovate
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12 col-sm-12 grid'); ?>>

    <?php if (has_post_thumbnail()) : ?>
        <div class="featured-thumb col-md-12 col-sm-12 col-xs-12">
				<a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('inovate-pop-thumb', array(  'alt' => trim(strip_tags( $post->post_title )))); ?></a>
		</div><!--.featured-thumb-->
    <?php endif; ?>

    <div class="out-thumb col-md-12 col-sm-12 col-xs-12">
        <header class="entry-header">
            <h3 class="entry-title title-font"><a class="hvr-underline-reveal" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
            <div class="postedon"><?php inovate_posted_on(); ?></div>
            <span class="entry-excerpt"><?php echo substr(get_the_excerpt(),0,200).(get_the_excerpt() ? "..." : "" ); ?></span>
            <span class="readmore"><a class="hvr-underline-from-center" href="<?php the_permalink() ?>"><?php esc_html_e('Read More','inovate'); ?></a></span>
        </header><!-- .entry-header -->
    </div><!--.out-thumb-->

</article><!-- #post-## -->