<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">



    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php endif; ?>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <header>

        <div class="mythemes-topper">
            <div class="container">

                <div class="row">
                    <div class="mythemes-header-antet">

                        <?php global $wp_customize; ?>

                        <!-- COLLAPSE BUTTON -->
                        <button type="button" class="btn-collapse"><i class="mythemes-icon-plus-2"></i></button>

                        <!-- LOGO / TITLE / DESCRIPTION -->
                        <?php
                                $blog_title                     = esc_attr( get_bloginfo( 'name' ) );
                                $blog_description               = esc_attr( get_bloginfo( 'description' ) );

                                $mythemes_text                  = true;
                                $mythemes_text_class            = '';

                                /* HEADER CUSTOMIZER */
                                if( isset( $wp_customize ) ) {

                                    /* HEADER LOGO */
                                    $mythemes_logo              = true;
                                    $mythemes_logo_src          = esc_url( get_theme_mod( 'mythemes-logo' , get_template_directory_uri() . '/media/_frontend/img/logo.png' ) );
                                    $mythemes_logo_class        = empty( $mythemes_logo_src ) ? 'hidden' : '';

                                    /* HEADER TEXT */
                                    $mythemes_text_class        = !empty( $mythemes_logo_src ) ? 'hidden' : '';
                                }

                                /* HEADER FRONTEND */
                                else{

                                    /* HEADER LOGO */
                                    $mythemes_logo_src          = esc_url( get_theme_mod( 'mythemes-logo' , get_template_directory_uri() . '/media/_frontend/img/logo.png' ) );
                                    $mythemes_logo              = !empty( $mythemes_logo_src );
                                    $mythemes_logo_class        = '';

                                    if( $mythemes_logo_src ){
                                        $mythemes_text          = false;
                                    }
                                }

                                echo '<div class="overflow-wrapper">';
                                echo '<div class="valign-cell-wrapper left">';
                                echo '<div class="valign-cell">';

                                /* BRANDING  */
                                if( $mythemes_logo ){
                                    echo '<a class="mythemes-logo ' . esc_attr( $mythemes_logo_class ) . '" href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( $blog_title . ' - ' . $blog_description ) . '">';
                                    echo '<img src="' . esc_url( $mythemes_logo_src ) . '" title="' . esc_attr( $blog_title . ' - ' . $blog_description ) . '"/>';
                                    echo '</a>';
                                }

                                /* BLOG TITLE */
                                if( $mythemes_text ){
                                    echo '<a class="mythemes-blog-title ' . esc_attr( $mythemes_text_class ) . '" href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( $blog_title . ' - ' . $blog_description ) . '">';
                                    bloginfo( 'name' );
                                    echo '</a>';
                                }

                                /* BLOG DESCRIPTION */
                                if( $mythemes_text ){
                                    echo '<a class="mythemes-blog-description ' . esc_attr( $mythemes_text_class ) . '" href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( $blog_title . ' - ' . $blog_description ) . '">';
                                    bloginfo( 'description' );
                                    echo '</a>';
                                }

                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            ?>
                    </div>

                    <div class="mythemes-header-menu" style="position: relative;">


                        <!-- TOPPER MENU -->
                        <nav class="col-md-12 mythemes-navigation header-menu nav-collapse">

                            <div class="menu-list-pre-wrapper">
                                <button type="button" class="btn-collapse"><i class="mythemes-icon-cancel-2"></i></button>
                                
                                <!--MY MENU-->
                                <nav class="col-sm-6 col-xs-6 col-md-12 one">
                                    <ul>
                                        <li><a href="<?php bloginfo('url'); ?>">Accueil</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>#team">Equipe</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>#our_solution">Notre Produit</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>#technology">Technologie</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>#contact">Contact</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/lang/png/fr.png"></a></li>
                                        <li><a href="<?php bloginfo('url'); ?>/en"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/lang/png/en.png"></a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="mythemes-visible-navigation"></div>
                        </nav>

                    </div>

                </div>

            </div>
        </div>

        <?php
                $show_header    = false;


                if( is_singular() ){
                    global $post;

                    if( cannyon_is_front_page( $post -> ID ) ){
                        $show_header = get_theme_mod( 'mythemes-header-front-page', true );
                    }
                    else{

                        if( $post -> post_type == 'post' )
                            $show_header = get_theme_mod( 'mythemes-header-single-posts', true );

                        if( $post -> post_type == 'page' )
                            $show_header = get_theme_mod( 'mythemes-header-single-pages', true );
                    }
                }

                else if( cannyon_is_blog_page() && cannyon_is_blog() ){
                    $show_header = get_theme_mod( 'mythemes-header-blog-page', true );
                }

                else{
                    $show_header = get_theme_mod( 'mythemes-header-templates', true );
                }

                if( $show_header ){
                    get_template_part( 'templates/header' );
                }
            ?>

    </header>


<?php

		global $wp_query,$wp_customize;

	    if( isset( $wp_customize ) ) {
	        $breadcrumbs = true;
	        $classes = !(bool)get_theme_mod( 'mythemes-breadcrumbs', true ) ? 'hidden' : '';
	    }
	    else{
	        $breadcrumbs = (bool)get_theme_mod( 'mythemes-breadcrumbs', true );
	        $classes = '';
	    }

	    if( $breadcrumbs ){
	?>

    <?php
		}
	?>