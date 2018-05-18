<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
    </div>
    <!-- .row -->
    </div>
    <!-- .container -->
    </div>
    <!-- #content -->

    <?php get_template_part( 'footer-widget' ); ?>
    <footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
        <div class="container-fluid p-3 p-md-5 col-md-12 social_media">
            <div class="site-info">
                &copy;
                <?php echo date('Y'); ?>
                <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <span class="sep"> | </span>
                <a class="credits" href="https://afterimagedesigns.com/wp-bootstrap-starter/" target="_blank" title="Wordpress Technical Support" alt="Bootstrap Wordpress Theme">
                    <?php echo esc_html__('Bootstrap Wordpress Theme','wp-bootstrap-starter'); ?>
                </a>
                <div class="col-md-6">
                    <p>Suivez nous sur les reseaux sociaux</p>
                    <img id="facebook" src="<?php echo get_stylesheet_directory_uri() ?>/images/icones/png/facebook.png">
                     <img id="facebook" src="<?php echo get_stylesheet_directory_uri() ?>/images/icones/png/twitter.png">
                     <img id="facebook" src="<?php echo get_stylesheet_directory_uri() ?>/images/icones/png/instagram.png">
                </div>
                </div>

            </div>
            <!-- close .site-info -->
        </div>
    </footer>
    <!-- #colophon -->
    <?php endif; ?>
    </div>
    <!-- #page -->

    <?php wp_footer(); ?>
    </body>

    </html>
