<?php
/*
Template Name: reservation
*/
?>
    <?php get_header(); ?>

    <!--CONTENT CONTACT-->
    <div class="container contacter">
        <div class="row">
            <div class="col-md-12" id="contact">
                <h1 class="title_contacter">Contacter</h1>
                <hr>
                <ul class="img_icon_list">
                    <li><img id="img_icon_phone" src="<?php echo get_stylesheet_directory_uri() ?>/images/icones/002-phone-call.png"> 01 02 03 04 05 06</li>
                    <li><img id="img_icon_mail" src="<?php echo get_stylesheet_directory_uri() ?>/images/icones/003-envelope.png"> contact.restaurant@email.com
                    </li>
                    <li><img id="img_icon_marker" src="<?php echo get_stylesheet_directory_uri() ?>/images/icones/001-placeholder.png"> Réstaurant du port<br> Vieux Port 13001 Marseille
                    </li>
                    <li> Les horaires d'ouverture: lundi au samedi de 12h–14h et 19h–22h
                    </li>
                </ul>
                <hr>
            </div>
            <div class="col-md-6">
                <?php echo do_shortcode( '[ninja_form id=2]' ); ?>
            </div>
            <div class="col-md-6">
                <?php echo do_shortcode('[booking-form]'); ?>
            </div>
        </div>
</div>




    <!--Smooth Back to Top Button Start-->
    <script>
        jQuery(document).ready(function() {
            var offset = 220;
            var duration = 500;
            jQuery(window).scroll(function() {
                if (jQuery(this).scrollTop() > offset) {
                    jQuery('.back-to-top').fadeIn(duration);
                } else {
                    jQuery('.back-to-top').fadeOut(duration);
                }
            });
            jQuery('.back-to-top').click(function(event) {
                event.preventDefault();
                jQuery('html, body').animate({
                    scrollTop: 0
                }, duration);
                return false;
            })
        });

    </script>
    <a href="#" class="back-to-top"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/screenshots/img_top.png"></a>
    <!--Smooth Back to Top Button End-->

    <?php get_footer(); ?>
