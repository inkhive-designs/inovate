<div id = "showcase-wrapper">
<?php 
	for($i = 1; $i <= 3 ; $i++ ) { 
		$s	=	'inovate-s-img-'	.	$i;
		$t 	=	'inovate-s-title-'	.	$i;
		$u	=	'inovate-s-url-'	.	$i;
	?>
	<div class = "showcase-box col-lg-4 col-md-4 col-sm-4 col-xs-12">
		
	<?php if ( get_theme_mod( $u ) ) { ?>
		<a href = "<?php echo esc_url(get_theme_mod($u) ); ?>">
	<?php } ?>
			<div class = "showcase-image"><img src = "<?php echo get_theme_mod( $s ); ?>"></div><div class="showcase-title"><?php echo get_theme_mod($t); ?></div>
		
	<?php if ( get_theme_mod( $u ) ) { ?>
		</a>
	<?php } ?>
	</div>
<?php 
}
?>
</div>