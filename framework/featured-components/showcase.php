<?php  if (is_home() && get_theme_mod('inovate-showcase-check') ) : ?>
        <div id = "showcase-wrapper">
            <?php for($i = 1; $i <= 3 ; $i++ ) :
	            	$simg	=	get_theme_mod('inovate-s-img-'.$i);
	            	$stitle 	=	get_theme_mod('inovate-s-title-'.$i);
	            	$surl	=	get_theme_mod('inovate-s-url-'.$i);
	                ?>

                <div class = "showcase-box col-lg-4 col-md-4 col-sm-4 col-xs-12">
	                <?php if ( $simg  ) : ?>
	                	<a href = "<?php echo $surl; ?>">
                            <div class = "showcase-image"><img src = "<?php echo $simg; ?>"></div>
                            <div class="showcase-title"><?php echo $stitle; ?></div>

	                	</a>
	                <?php endif; ?>
	            </div>

            <?php endfor; ?>
        </div>
<?php endif; ?>