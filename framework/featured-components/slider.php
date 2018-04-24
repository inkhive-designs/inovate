<?php
$count = 1;
if( get_theme_mod('inovate-slide_enable') && is_home() ) : ?>
	
	    <div id="slider-wrapper">
		    <div class="container frame-c">
			    <div class="bxslider">
			    	<?php 
		                for($i = 1; $i <= 3; $i++) :
		                	$img = get_theme_mod('inovate-slide_' . $i);
		                	$desc = get_theme_mod('inovate-desc-' . $i);
		                	$url = get_theme_mod('inovate-url-'.$i);

		                	?>

			            <?php if ($img) : ?>
                                <div class="slide">
                                    <a href="<?php echo $url; ?>">
                                        <img src="<?php echo $img ?>" data-thumb="<?php echo $img ?>" title="<?php echo $title." - ".$desc ?>" alt="<?php echo $title; ?>" />
                                    </a>
                                    <div class="slidecaption">

                                        <?php if ($title) : ?>
                                            <div class="slide-title"><?php echo $title ?></div>
                                            <div class="slide-desc"><span><?php echo $desc ?></span></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                        <?php endif; ?>
                    <?php endfor; ?>
			     </div>
		    </div>
		</div>
<?php endif; ?>