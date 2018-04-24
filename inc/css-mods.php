<?php
/**
 *	All the custom CSS codes get loaded from here.
 **/
function inovate_custom_css_mods() {

    echo "<style id='custom-css-mods'>";

    if ( get_theme_mod('inovate-title-color') ) :
        echo "#masthead h1.site-title a { color: ".get_theme_mod('inovate-title-color')."; }";
    endif;

    if ( get_theme_mod('header_textcolor') ) :
        echo "#masthead h2.site-description { color: #".get_theme_mod('header_textcolor')."; }";
    endif;

    if (!display_header_text()):
        echo "#masthead .site-branding #text-title-desc { display: none; }";
    endif;

    if ( get_theme_mod('inovate_title_font','Libre Baskerville') ) :
        echo ".title-font, h1, h2 { font-family: ".esc_html(get_theme_mod('inovate_title_font'))."; }";
    endif;

    if ( get_theme_mod('inovate_body_font','Open Sans') ) :
        echo "body { font-family: ".esc_html(get_theme_mod('inovate_body_font'))."; }";
    endif;

    if ( get_theme_mod('inovate_sidebar_alignment') == 'left' ) :
        echo "#secondary { float: left; }#primary,#primary-mono { float: right; }";
    endif;

    $sbg = get_theme_mod('inovate-slider-background' );
    echo "#slider-wrapper {	background: url('$sbg') center center;	}";

    echo "</style>";
}

add_action('wp_head','inovate_custom_css_mods');