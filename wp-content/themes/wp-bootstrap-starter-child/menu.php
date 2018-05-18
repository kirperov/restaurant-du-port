<?php
/*
Template Name: menu
*/
?>

<?php get_header(); ?>


<?php add_post_meta($post_id, $meta_key, $meta_value, $unique); ?> 
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

