<?php 

/**
 * The frontend styles for logged in users
 * 
 * @since             1.0.0
 * @package           Kontur_Admin_Style
 * Author:            Eilert Behrends
 * Author URI:        https://profiles.wordpress.org/netzaufsicht/
 * 
 * 
 */


/*------------------------------------------*/
/*			Frontend 		*/
/*------------------------------------------*/


defined( 'ABSPATH' ) || exit;

/**
 * Add color styling from theme to frontend. 
 * This will only load, if the kontur Admin Style Option is checked
 */

    
     if ( is_user_logged_in() )  {
    function load_kontur_admin_style_frontend() {
     wp_register_style( 'kontur-admin-style-frontend',  plugin_dir_url( __DIR__  ) . 'public/css/kontur-admin-style-frontend.css' );
    wp_enqueue_style( 'kontur-admin-style-frontend' );
      $kontur_wpadminbar_back = esc_attr( get_option('kontur_admin_style_adminbar_background') );
   
        $custom_css = "/* kontur Admin Style */
#wpadminbar { background: $kontur_wpadminbar_back!important;}";
        wp_add_inline_style( 'kontur-admin-style-frontend', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'load_kontur_admin_style_frontend' );}



