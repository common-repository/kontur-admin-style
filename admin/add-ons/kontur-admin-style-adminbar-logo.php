<?php
/**
 * The adminbar & editor icon
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


/*		Add logo to the wp admin bar	*/
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

// add the logo as well to the gutenberg editor
add_action('wp_before_admin_bar_render', 'kontur_admin_style_add_custom_logo');


add_action( 'admin_head', 'kontur_admin_style_custom_editor_logo' );

function kontur_admin_style_custom_editor_logo(){
  $kntrlogo01 = esc_url( get_option('kontur_style_admin_logo') );
     $kontur_wpadminbar_back = esc_attr( get_option('kontur_admin_style_adminbar_background') );
	// it is not a necessary thing but it prevents this CSS to be added on every WordPress admin page
	$myscreen = get_current_screen();
	if( !$myscreen->is_block_editor ) {
		return;
	}

	echo '<style type="text/css">
    

 
    
	.edit-post-fullscreen-mode-close.components-button {
            display: flex;
            align-items: center;
            align-self: stretch;
            border: none;
            background:'. $kontur_wpadminbar_back . '; 
            border-color:#6d6e6f!important;
            color: #fff;
            box-shadow:none;
            border-radius: 0;
            height: 61px;
            width: 60px;
            position: relative;
            margin-bottom: -1px;
}
.edit-post-fullscreen-mode-close.components-button svg{
	       display: none;
}

.edit-post-fullscreen-mode-close.components-button:before  {
            background: url(' .  $kntrlogo01  . ') ;
            box-shadow:none;
            background-size:cover!important;
            background: url(' .  $kntrlogo01  . ') ;
}

img.edit-post-fullscreen-mode-close_site-icon {
            display:none!important; 
            visbility:hidden;
            z-index: -100;
}
    
.edit-post-fullscreen-mode-close.components-button:hover:before  {
            background: url(' .  $kntrlogo01  . ') !important;
            box-shadow:none;
            background-size:cover!important;}
            opacity:0.6;
            
            
	</style>';

}