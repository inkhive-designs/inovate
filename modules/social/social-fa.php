<?php

/*
Checking for Social icons.
Calling the social.php template if social icons are enabled.
*/
if ( get_theme_mod('inovate_social_enable') ): ?>

	<div class="social-icons col-lg-12 col-md-12 col-sm-12 col-xs-12">

	    <?php
	    /*
	    Defining a variable to specify the path of the social icons images.
	    */

	    $path = get_template_directory_uri()."/assets/images/social/" . get_theme_mod('inovate-social-select', 'def'); ?>

        <?php for($i = 1; $i <= 15; $i ++ ):
            $sicon =  get_theme_mod('inovate_social_'.$i, 'default');

            $social = esc_attr(get_theme_mod('inovate_social_'.$i)); ?>

            <?php if ( ($social != 'none') && ($social != '') ) : ?>
	            <a target="_blank" href="<?php echo esc_url( get_theme_mod('inovate_social_url'.$i) ); ?>" title="Facebook" ><img src="<?php echo $path."/".$sicon.".png"; ?>"></a>
            <?php endif; ?>
        <?php endfor; ?>

	</div>

<?php endif; ?>