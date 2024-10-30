<?php

/**
 * Uninstall 
 * 
 * @since             1.0.0
 * @package           Kontur_Admin_Style
 * Author:            Eilert Behrends
 * Author URI:        https://profiles.wordpress.org/netzaufsicht/
 * 
 * 
 */

// If uninstall not called from WordPress, then exit. 
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
} 

//Delete Options because nobody want stuffed tables with useless content
   
delete_option( 'kontur_admin_style_adminbar_background' );
delete_option('kontur-settings-checkbox-login' );
delete_option('kontur-settings-checkbox-admin-style' );
delete_option('kontur-settings-checkbox-dashboard' );
delete_option('kontur-settings-use-stlye' );   
delete_option('kontur-settings-checkbox-media' );
delete_option( 'kontur_admin_adminmenuback' ); 
delete_option( 'kontur_admin_current_sub_menu' ); 
delete_option( 'kontur_admin_adminmenuwrap' );
delete_option( 'kontur_admin_style_login_background_image' );
delete_option( 'kontur_admin_style_logo_background_image'  );
delete_option( 'kontur_admin_style_background');
delete_option( 'kontur_admin_style_login_logo_link' );
delete_option( 'kontur_style_admin_logo' );
delete_option( 'kontur_style_admin_use_logo' );