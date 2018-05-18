<?php get_header(); ?>
    <!--CONTENT WHO WE ARE-->
    <div class="content main-content col-md-12 container-fluid">
        <div class="container we_are">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title_we_are">Qui sommes-nous?</h1>
                    <hr>
                    <p class="intro_text">Une Start-Up créée en octobre 2017 à l’occasion du start-up weekend Aix Marseille que nous avons remporté. Nous sommes une société ambitieuse qui va révolutionner le secteur de la cybersécurité en proposant un produit unique et innovant aux particuliers comme aux entreprises.</p>
                    <p class="intro_text">Nous sommes, aujourd’hui, installé dans les locaux de start-up Marseille, un espace unique de co-working et co-living dédié aux nouvelles technologies.</p>
                </div>
            </div>
        </div>
        <!--CONTENT TEAM AND PARTENERS-->
        <div class="container team">
            <div class="row">
                <div class="col-md-12" id="team">
                    <h2 class="title_team">Equipe</h2>
                    <hr>
                    <div class="team" id="our_team">
                        <div>
                            <img class="img-circle" id="img_team_1" src="<?php echo get_stylesheet_directory_uri() ?>/images/screenshots/1.jpg">
                            <p class="name_team">Jérôme RASTIT CTO</p>
                        </div>
                        <div>
                            <img class="img-circle" id="img_team_2" src="<?php echo get_stylesheet_directory_uri() ?>/images/screenshots/2.jpg">
                            <p class="name_team">Bruno RIBEIRO CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h2 class="title_team">Partenaires</h2>
                    <hr>
                    <div class="team" id="parteners">
                        <div>
                            <img class="img-circle" id="img_team_1" src="<?php echo get_stylesheet_directory_uri() ?>/images/screenshots/Rond-4.jpg">
                            <p class="name_team">Pierre Broca "Atelier NAB"<br> Designer</p>
                        </div>
                        <div>
                            <img class="img-circle" id="img_team_2" src="<?php echo get_stylesheet_directory_uri() ?>/images/screenshots/Rond-5.jpg">
                            <p class="name_team">Antoine GUYON <br> Co-founder Startup Marseille</p>
                        </div>
                        <div>
                            <img class="img-circle" id="img_team_2" src="<?php echo get_stylesheet_directory_uri() ?>/images/screenshots/Rond-6.jpg">
                            <p class="name_team">Yasmina AYOUAZ Graphiste
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <div class="container col-md-12 part_logo">
                    <img class="" id="img_part_1" src="<?php echo get_stylesheet_directory_uri() ?>/images/parteners/part_1.png">
                    <img class="" id="img_part_2" src="<?php echo get_stylesheet_directory_uri() ?>/images/parteners/part_2.png">
                    <img class="" id="img_part_3" src="<?php echo get_stylesheet_directory_uri() ?>/images/parteners/part_3.png">
                    <img class="" id="img_part_4" src="<?php echo get_stylesheet_directory_uri() ?>/images/parteners/part_4.png">
                    <img class="" id="img_part_5" src="<?php echo get_stylesheet_directory_uri() ?>/images/parteners/part_5.jpg">
                </div>-->
            </div>
            <?php echo do_shortcode( '[slide-anything id=122]' ); ?>
        </div>

        <!--CONTENT OUR PRODUCT-->
        <div class="container-fluid col-md-12" id="our_solution">
            <div class="row concept">
                <div class="col-md-6">
                    <img id="img_2" src="<?php echo get_stylesheet_directory_uri() ?>/images/photo_egg/egg_1.jpg">
                </div>
                <div class="col-md-6">
                    <h1 class="white-text">Le concept Secur'Egg</h1>
                    <hr>
                    <p>Il vous avertira en cas de:</p>
                    <ul>
                        <li><strong>+ Tentative de connexion</strong></li>
                        <li><strong>+ Vol de données</strong></li>
                        <li><strong>+ Connexion à des sites tendancieux</strong></li>
                        <li><strong>+ Connexion à des sites illégaux</strong></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 fonctions">
                <p>Couplé à son application mobile, votre Secur'Egg vous offrira de nouvelles fonctionnalités</p>
                <ul>
                    <li><strong>+ Surveillance parentale</strong></li>
                    <li><strong>+ Mise à jour du firmware</strong></li>
                    <li><strong>+ Gestion de la bande passante</strong></li>
                    <li><strong>+ Fonctionnement de vos objets connectés</strong></li>
                </ul>
            </div>
            <div class="img_phones">
                <div>
                    <img class="" id="img_team_1" src="<?php echo get_stylesheet_directory_uri() ?>/images/screenshots/phone_1.png">
                </div>
                <div>
                    <img class="" id="img_team_2" src="<?php echo get_stylesheet_directory_uri() ?>/images/screenshots/phone_2.png">
                </div>
            </div>
        </div>

        <!--MAIL CHIMP SINGUP FORM-->
        <div class="col-md-12">
            <!-- Begin MailChimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
            <style type="text/css">
                /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */

            </style>

            <div class="line_separate col-md-12">
                <div id="mc_embed_signup">
                    <form action="https://aitivity.us12.list-manage.com/subscribe/post?u=0f3709d3db2000eaa10f6247f&amp;id=480c8d92ec" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="col-md-12 col-sm-12 col-xs-12 validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <label for="mce-EMAIL"><h2 id="title_stay_informed">Restez informés</h2></label>
                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0f3709d3db2000eaa10f6247f_480c8d92ec" tabindex="-1" value=""></div>
                            <div class="clear"><input type="submit" value="M'inscrire" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                        </div>
                    </form>
                </div>
            </div>


            <!--End mc_embed_signup-->
        </div>

        <!--CONTENT USER EXPERIENCE-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6" id="technology">
                    <h1>Your home security advisor:</h1>
                    <h2>Une technologie à la hauteur de vos attentes.</h2>
                    <hr>
                    <p class="never_see_text">
                        Du jamais vu dans le secteur de la cybersécurité
                    </p>
                    <p>
                        Grâce à une technologie innovante et unique, vous n'aurez plus à vous inquiéter de l'utilisation de votre réseau Wi-Fi.
                    </p>
                </div>
                <div class="col-md-6">
                    <img id="img_egg_open" src="<?php echo get_stylesheet_directory_uri() ?>/images/screenshots/egg_open.png">
                </div>
            </div>
        </div>

        <div class="line_separate col-md-12">
            <div class="parent">
                <div class="block">
                    <input class="button btn by_button" type="button" value="Pré-commander">
                </div>
            </div>
        </div>
        <!--CONTENT DESIGN-->
        <!--<div class="container design">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title_design">Une histoire de design</h1>
                    <hr>
                    <p class="text_design">Pour vous, nous avons pensé un design épuré et élégant qui s'adaptera à chaque intèrieur.</p>
                    <div>
                        <img id="img_chicken" src="<?php echo get_stylesheet_directory_uri() ?>/images/photo_egg/egg_chiken.jpg">
                    </div>
                </div>
            </div>
        </div>-->
        <div class="col-md-12">
            <?php echo do_shortcode( '[slide-anything id=123]' ); ?>

        </div>
        <!--CONTENT CONTACT-->
        <div class="container contacter">
            <div class="row">
                <div class="col-md-12" id="contact">
                    <h1 class="title_contacter">Contacter</h1>
                    <hr>
                    <ul class="img_icon_list">
                        <li><img id="img_icon_phone" src="<?php echo get_stylesheet_directory_uri() ?>/images/icones/002-phone-call.png"> 09 82 44 78 41</li>
                        <li><img id="img_icon_mail" src="<?php echo get_stylesheet_directory_uri() ?>/images/icones/003-envelope.png"> contact@aitivity.com
                        </li>
                        <li><img id="img_icon_marker" src="<?php echo get_stylesheet_directory_uri() ?>/images/icones/001-placeholder.png"> Aitivity Start-Up Marseille<br> 28 rue Montgrand 13006 Marseille
                        </li>
                        <div>
                            <?php echo do_shortcode( '[ninja_form id=2]' ); ?>
                        </div>
                    </ul>
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

