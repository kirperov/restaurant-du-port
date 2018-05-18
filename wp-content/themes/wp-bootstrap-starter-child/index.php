<?php
/*
Template Name: Accueil
*/
?>


    <?php get_header(); ?>
    <!--CONTENT DESCRIPTION-->
    <div class="col-md-12">
        <?php
echo do_shortcode('[smartslider3 slider=2]');
?>
    </div>
    <div class="content main-content col-md-12 container-fluid">
        <div class="container presentation">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title_restau">Restaurant du Port</h1>
                    <hr>
                    <p class="intro_text">Notre restaurant au coeur de centre ville vous accueil avec une ambience chaleureuse et amicale</p>
                    <p class="intro_text">Dépuis 20 ans notre réstaurant est spécialisé sur le plats de mer avec les ingredients frais et de qualité approuve. La satisfaction de nos clients est notre priorité.</p>
                </div>
            </div>
        </div>
        <!--CONTENT-->
        <div class="container team">
            <div class="row">
                <div class="col-md-12" id="team">
                    <h2 class="title_team">Plat du jour</h2>
                    <hr>
                    <div class="team col-md-12" id="our_team">
                        <div>
                            <img class="col-md-12" src="<?php echo get_stylesheet_directory_uri() ?>/images/screenshots/plat_jour.jpg">
                            <p class="name_team">Rouleaux de poisson chinois </p>
                        </div>
                    </div>
                </div>
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
