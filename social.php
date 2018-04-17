
	<div class="social-icons col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
	
	<?php
	
	/*
	Defining a variable to specify the path of the social icons images.
	*/
	
	$path = get_template_directory_uri()."/images/social/" . get_theme_mod('inovate-social-select', 'default'); ?>

	<?php if ( get_theme_mod('inovate-facebook') ) : ?>
	 <a target="_blank" href="<?php echo esc_url( get_theme_mod('inovate-facebook') ); ?>" title="Facebook" ><img src="<?php echo $path."/facebook.png"; ?>"></a>
<?php endif; ?>
	<?php if (get_theme_mod('inovate-twitter')) : ?>
	 <a target="_blank" href="<?php echo esc_url(get_theme_mod('inovate-twitter')); ?>" title="Twitter" ><img src="<?php echo $path."/twitter.png"; ?>"></a>
<?php endif; ?>
	<?php if (get_theme_mod('inovate-google')) : ?>
	 <a target="_blank" href="<?php echo esc_url(get_theme_mod('inovate-google')); ?>" title="Google" ><img src="<?php echo $path."/google.png"; ?>"></a>
<?php endif; ?>
	<?php if (get_theme_mod('inovate-instagram')) : ?>
	 <a target="_blank" href="<?php echo esc_url(get_theme_mod('inovate-instagram')); ?>" title="Instagram" ><img src="<?php echo $path."/instagram.png"; ?>"></a>
<?php endif; ?>
	<?php if (get_theme_mod('inovate-youtube')) : ?>
	 <a target="_blank" href="<?php echo esc_url(get_theme_mod('inovate-youtube')); ?>" title="Youtube" ><img src="<?php echo $path."/youtube.png"; ?>"></a>
<?php endif; ?>
	<?php if (get_theme_mod('inovate-pinterest')) : ?>
	 <a target="_blank" href="<?php echo esc_url(get_theme_mod('inovate-pinterest')); ?>" title="Pinterest" ><img src="<?php echo $path."/pinterest.png"; ?>"></a>
<?php endif; ?>
	<?php if (get_theme_mod('inovate-rss')) : ?>
	 <a target="_blank" href="<?php echo esc_url(get_theme_mod('inovate-rss')); ?>" title="Rss" ><img src="<?php echo $path."/rss.png"; ?>"></a>
<?php endif; ?>
	<?php if (get_theme_mod('inovate-mail')) : ?>
	 <a target="_blank" href="<?php echo esc_url(get_theme_mod('inovate-mail')); ?>" title="Mail" ><img src="<?php echo $path."/mail.png"; ?>"></a>
<?php endif; ?>
	<?php if (get_theme_mod('inovate-vimeo')) : ?>
	 <a target="_blank" href="<?php echo esc_url(get_theme_mod('inovate-vimeo')); ?>" title="Vimeo" ><img src="<?php echo $path."/vimeo.png"; ?>"></a>
<?php endif; ?>
	<?php if (get_theme_mod('inovate-flickr')) : ?>
	 <a target="_blank" href="<?php echo esc_url(get_theme_mod('inovate-flickr')); ?>" title="Flickr" ><img src="<?php echo $path."/flickr.png"; ?>"></a>
<?php endif; ?>
	<?php if (get_theme_mod('inovate-linkedin')) : ?>
	 <a target="_blank" href="<?php echo esc_url(get_theme_mod('inovate-linkedin')); ?>" title="Linked-In" ><img src="<?php echo $path."/linkedin.png"; ?>"></a>
<?php endif; ?>
	<?php if (get_theme_mod('inovate-youtube')) : ?>
	 <a target="_blank" href="<?php echo esc_url(get_theme_mod('stumbleupon')); ?>" title="StumbleUpon" ><img src="<?php echo $path."/stumbleupon.png"; ?>"></a>
<?php endif; ?>
	<?php if (get_theme_mod('inovate-vine')) : ?>
	 <a target="_blank" href="<?php echo esc_url(get_theme_mod('inovate-vine')); ?>" title="Vine" ><img src="<?php echo $path."/vine.png"; ?>"></a>
<?php endif; ?>
	<?php if (get_theme_mod('inovate-rss')) : ?>
	 <a target="_blank" href="<?php echo esc_url(get_theme_mod('inovate-soundcloud')); ?>" title="Soundcloud" ><img src="<?php echo $path."/soundcloud.png"; ?>"></a>
<?php endif; ?>
	<?php if (get_theme_mod('inovate-mail')) : ?>
	 <a target="_blank" href="<?php echo esc_url(get_theme_mod('inovate-vk')); ?>" title="VKontakte" ><img src="<?php echo $path."/vk.png"; ?>"></a>
<?php endif; ?>
	<?php if (get_theme_mod('inovate-vimeo')) : ?>
	 <a target="_blank" href="<?php echo esc_url(get_theme_mod('inovate-yelp')); ?>" title="Yelp" ><img src="<?php echo $path."/yelp.png"; ?>"></a>
<?php endif; ?>

	</div>