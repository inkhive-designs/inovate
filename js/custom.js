jQuery(document).ready( function() {

    jQuery(document).ready(function(){
        jQuery('.bxslider').bxSlider({
            mode: 'fade',
            adaptiveHeight: true,
            captions: true
        });
    });

    jQuery(window).resize(function(){

        if (jQuery(window).width() <= 600) {

            jQuery(".menu").hide();

        }
        else
            jQuery(".menu").show();

    });

    jQuery(".menu-toggle").click(function(){
        jQuery(".menu").toggle('slow');
    });
});