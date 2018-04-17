<?php
$count = 1;
	if( get_theme_mod('inovate-slide_enable') && is_front_page() ) : 
	?>
	
	    <div id="slider-wrapper">
		    <div class="container frame-c">
			    <ul class="bxslider">
			    	<?php 
		for($i = 1; $i <= 3; $i++) { 
			$s = 'inovate-slide_' . $i;
			$d = 'inovate-desc-' . $i;
			$u = 'inovate-url-'	.	$i;
			
			if ( get_theme_mod($s) != '' ) {
		?>	
			<li>
			<?php	if ( get_theme_mod( $u ) ) { 
				
			?>
			<a href="<?php echo( esc_url( get_theme_mod($u) ) ); ?>">
			<?php	
				}
				?>
				<div class="slide"><img src = <?php echo esc_html(get_theme_mod($s), 'trance'); ?>><div class="slide_caption"><?php echo get_theme_mod($d); ?> </div></div>
				<?php	if ( get_theme_mod( $u ) ) { 
				
			?>
			</a>
			
			<?php	
				}
				?>
				
			 </li>
		<?php } 
			}
		?>
			     </ul>   
		    </div>
		</div>
	    
	<?php endif; 
?>