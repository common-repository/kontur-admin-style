<?php
/**
 * The admin bar icon
 * 
 * @since             1.0.0
 * @package           Kontur_Admin_Style
 * Author:            Eilert Behrends
 * Author URI:        https://profiles.wordpress.org/netzaufsicht/
 * 
 * 
 */


// Exit If Accessed Directly
if ( ! defined( 'ABSPATH' ) ) exit;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


/*		Add Logo	*/
/*------------------*/

function kontur_admin_style_add_custom_logo() {
    

  $kntrlogo01 = esc_url( get_option('kontur_style_admin_logo') );
    
    
echo '
<style type="text/css">
#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
background-image: url(' .  $kntrlogo01  . ') !important;
background-position: 0 0;
background-size:cover;
color:rgba(0, 0, 0, 0);
}
#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
background-position: 0 0;
}
</style>
';

  

}

//hook into the administrative header output
add_action('wp_before_admin_bar_render', 'kontur_admin_style_add_custom_logo');


