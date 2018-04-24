<?php global $opt_inovate; ?>
<header id="masthead" class="site-header container" role="banner">
    <div class="site-branding">
        <?php if ( inovate_has_logo() ) : ?>
            <div id="site-logo">
                <?php inovate_logo(); ?>
            </div>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" data-hover="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
        <?php else : ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" data-hover="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
        <?php endif; ?>

    </div>

    <?php get_template_part('modules/social/social', 'fa'); ?>

    <?php get_template_part('modules/header/search', 'bar'); ?>

</header><!-- #masthead -->