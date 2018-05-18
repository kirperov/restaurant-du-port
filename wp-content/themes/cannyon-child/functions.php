<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'mythemes-icons','mythemes-effects','mythemes-header','mythemes-bootstrap','mythemes-typography','mythemes-navigation','mythemes-nav','mythemes-blog','mythemes-forms','mythemes-elements','mythemes-widgets','mythemes-comments','mythemes-comments-typography','mythemes-footer','mythemes-jscrollpane','mythemes-plugins','mythemes-pretty-photo','mythemes-google-fonts' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION


/** Add CDN version of jQuery */function my_init()   
{  
if (!is_admin())   
{  
wp_deregister_script('jquery');  
// Load a copy of jQuery from the Google API CDN  
// The last parameter set to TRUE states that it should be loaded  
// in the footer.  
wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', FALSE, '1.11.0', false);  
wp_enqueue_script('jquery');  
}  
}  
add_action('init', 'my_init');