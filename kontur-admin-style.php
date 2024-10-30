<?php
/*
* @link              https://profiles.wordpress.org/netzaufsicht/
 * @since             1.0.0
 * @package           Kontur_Admin_Style
 *
 * @wordpress-plugin
 * Plugin Name:       kontur Admin Style
 * Plugin URI:        https://wordpress.org/plugins/kontur-admin-style/
 * Description:       A light, eye pleasing admin theme and custom login page. Easy to customize to your colors, admin bar logo, login-link, login page backround... change the admin menu colors if you like. Or just enjoy the themes pre-set and just change it to your brand logo.
 * Version:           1.0.4
 * Author:            Eilert Behrends
 * Author URI:        https://profiles.wordpress.org/netzaufsicht/
 * License: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       kontur-admin-style
 * Domain Path:       /languages/
 */

// Exit If Accessed Directly
if ( ! defined( 'ABSPATH' ) ) exit;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { exit; }

/**
 * Current plugin version.
 */

define( 'KONTURADMINSTYLE__MINIMUM_WP_VERSION', '5.6' );
define( 'KONTURADMINSTYLE__MINIMUM_PHP_VERSION', '7' );
define( 'KONTURADMINSTYLE__VERSION', '1.0.4' );

/* Register activation hook. */
register_activation_hook( __FILE__, 'kontur_admin_notice_admin_style_activation_hook' );
 
/**
 * Runs only when the plugin is activated.
 * @since 0.1.0
 */
function kontur_admin_notice_admin_style_activation_hook() {
 
    /* Create transient data */
    set_transient( 'kontur-admin-style-notice', true, 5 );
}
 
 
/* Add admin notice */
add_action( 'admin_notices', 'kontur_admin_notice_admin_style_reminder_notice' );
 
 
/**
 * Admin Notice on Activation.
 * @since 0.1.0
 */
function kontur_admin_notice_admin_style_reminder_notice(){
 
    /* Check transient, if available display notice */
    if( get_transient( 'kontur-admin-style-notice' ) ){
        ?>

<style type="text/css">
    #kontur-admin-activation-notice,
    .kontur-info-buttons-row {

        font-weight: 200;
        font-size: 110%;
    }



    [class*=welcome-panel-icon] {

        background-color: #906d9d;

    }

    #settings-dissmiss {
        position: relative;
    }

    .text-dismiss.notice-dismiss:before {
        content: "";
        display: none;
    }

    .kontur-notice-panel-icon {
        width: 60px;
        height;
        60px;
    }

    .kontur-notice-panel-icon>.dashicons {
        width: 58px;
        height: 58px;
        font-size: 40px;
        color: white;
        border-radius: 50px;
        background: color(srgb 0.5639 0.4275 0.6162);
        /* padding: 5px; */
        line-height: 55px;
        border: 2px solid rgb(235, 235, 235);
    }

    .kontur-notice-info header {
        padding: 42px 0 10px 42px;
    }

    .bg-white {
        background: white;
    }

    .p-10px {
        padding: 10px;
    }

    .kontur-postbox {
        border: 2px solid rgba(203, 207, 212, 0.31);
        box-shadow: 0 3px 3px rgba(0, 0, 0, .04);
        background: #fffcfc;
    }

    .kontur-info-large {
        font-size: 110%;
    }
</style>
<div class="notice noticekontur welcome-panel bg-white is-dismissible" id="kontur-admin-activation-notice" style="padding:20px; ">



    <div class="welcome-panel-content">
        <div class="welcome-panel-header kontur-notice-info-header">
            <div style="width:60px; height:60px; display: inline-block;
margin-right: 1rem;">

                <svg version="1.1" id="Ebene_1" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                    <style type="text/css">
                        .st0 {
                            fill: #FFFFFF;
                            stroke: #636363;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-miterlimit: 10;
                        }
                    </style>
                    <g id="mb-stern_x5F_10">
                    </g>
                    <g>
                        <path class="st0" d="M60.4,26.5h-4.2l-8.7-15.4c-0.5-0.9-1.8-1.6-2.8-1.6h-1.2l-2.7,8.4c0.8,0.3,1.5,0.8,1.9,1.5l6,10.7
		c0.5,0.9,0.5,2.4,0,3.3L42.4,44c-0.5,0.9-1.8,1.6-2.9,1.6l-7.8-0.1L29,53.7l15.1,0.1c1,0,2.3-0.7,2.9-1.6l8.7-14.7h4.6
		c1,0,1.9-0.9,1.9-1.9v-7.2C62.3,27.4,61.4,26.5,60.4,26.5z"></path>
                    </g>
                    <g>
                        <path class="st0" d="M24.4,43.8l-6.1-10.7c-0.5-0.9-0.5-2.4,0-3.3l6.3-10.6c0.5-0.9,1.8-1.6,2.9-1.6l6.4,0.1l2.7-8.2L22.8,9.3
		c-1,0-2.3,0.7-2.9,1.6l-9.2,15.6H3.8c-1,0-1.9,0.9-1.9,1.9v7.2c0,1,0.9,1.9,1.9,1.9h7.6l8.2,14.4c0.5,0.8,1.6,1.6,2.6,1.7l2.9-9.1
		C24.8,44.4,24.6,44.1,24.4,43.8z"></path>
                    </g>
                </svg>
            </div>
            <h2 style="color: #906d9d; font-weight:200;"><?php esc_html_e( "Don't forget your setup!", 'kontur-admin-style' ); ?></h2>

            <hr>
            <p>
                <a class="text-dismiss" href="<?php echo admin_url( 'admin.php?page=kontur-admin-style' ); ?> ">
                    <?php esc_html_e( "Make sure to set and activate your preferences", 'kontur-admin-style' ); ?> >> </a>
            </p>
        </div>
        <div class="welcome-panel-column-container">
            <div class="welcome-panel-column p-10px kontur-postbox">
                <div class="kontur-notice-panel-icon">
                    <div class="dashicons dashicons-wordpress"></div>
                </div>
                <div class="welcome-panel-column-content">
                    <h3 style="color: #906d9d; font-weight:200;"><?php esc_html_e( "Set Adminbar Logo", 'kontur-admin-style' ); ?></h3>
                    <p><?php esc_html_e( "Set your own Icon / Logo in the Admin bar. It will also show on the full page editor screen" ); ?>
                    </p>
                    <a class="text-dismiss" href="<?php echo admin_url( 'admin.php?page=kontur-admin-style' ); ?> "><?php esc_html_e( "Go to settings", 'kontur-admin-style' ); ?> >> </a>

                </div>
            </div>
            <div class="welcome-panel-column p-10px kontur-postbox">
                <div class="kontur-notice-panel-icon">
                    <div class="dashicons dashicons-lock"></div>
                </div>
                <div class="welcome-panel-column-content">
                    <h3 style="color: #906d9d; font-weight:200;">Set your Login Page</h3>
                    <p><?php esc_html_e( "To use your custom login page, you will have to activate this option first and afterwards set your login-logo, background, logo-link.", 'kontur-admin-style' ); ?></p>
                    <a class="text-dismiss" href="<?php echo admin_url( 'admin.php?page=kontur-admin-style' ); ?> "><?php esc_html_e( "Go to settings", 'kontur-admin-style' ); ?> >></a>
                </div>
            </div>
            <div class="welcome-panel-column p-10px kontur-postbox">
                <div class="kontur-notice-panel-icon">
                    <div class="dashicons dashicons-admin-appearance"></div>
                </div>
                <div class="welcome-panel-column-content">
                    <h3 style="color: #906d9d; font-weight:200;">Change the Admin Style</h3>
                    <p><?php esc_html_e( "Style it Baby! Set the background of the WP sdmin bar, the highlight background color of the admin bar sub-menu...", 'kontur-admin-style' ); ?></p>
                    <a class="text-dismiss" href="<?php echo admin_url( 'admin.php?page=kontur-admin-style' ); ?> "><?php esc_html_e( "Go to settings", 'kontur-admin-style' ); ?> >></a>
                </div>
            </div>
        </div>
    </div>







    <div style="margin-left:30px;">
        <p class="kontur-info-large"><?php esc_html_e( "Important: Sorry for the interruption, but this message will only show on plaug-in activation. So no need to call us names for beeing such anoying ... ;-)", 'kontur-admin-style' ); ?></p>

    </div>
</div>
<?php
        /* Delete transient, only display this notice once. */
        delete_transient( 'kontur-admin-style-notice' );
    }
}





/**
 * Check if the version of WordPress in use on the site is supported.
 */
if ( version_compare( $GLOBALS['wp_version'], KONTURADMINSTYLE__MINIMUM_WP_VERSION, '<' ) ) {
	if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
		error_log( // phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_error_log
			sprintf(
				/* translators: Placeholders are numbers, versions of WordPress in use on the site, and required by WordPress. */
				esc_html__( 'Your version of WordPress (%1$s) is lower than the version required by kontur Admin Style (%2$s). Please update your WordPress.', 'kontur-admin-style' ),
				$GLOBALS['wp_version'],
				KONTURADMINSTYLE__MINIMUM_WP_VERSION
			)
		);
	}

	/**
	 * Outputs for an admin notice about running kontur Admin Style on outdated WordPress.
	 *
	 * @since 1.0.0
	 */
	function kontur_admin_style_admin_unsupported_wp_notice() { ?>
<div class="notice notice-error is-dismissible">
    <p><?php esc_html_e( 'kontur Admin Style requires a more recent version of WordPress and has been paused.', 'kontur-admin-style' ); ?><br><strong><?php esc_html_e( 'Please update your WordPress to continue using kontur Admin Style.', 'kontur-admin-style' ); ?></strong></p>
</div>
<?php
	}

	add_action( 'admin_notices', 'kontur_admin_style_admin_unsupported_wp_notice' );
	return;
}

/*------------------------------------------*/
/*			Plugin Setup Functions			*/
/*------------------------------------------*/

// Direct Link To Options Page In Plugins List
function kontur_admin_style_settings_link( $links ) {
	return array_merge(
		array(
			'settings' => '<a href="' . admin_url( 'themes.php?page=kontur-admin-style' ) . '">' . __( '>> Settings', 'kontur-admin-style' ) . '</a>'
		),
		$links
	);
}
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'kontur_admin_style_settings_link' );



// Load Text Domain
function kontur_admin_style_load_plugin_textdomain() {
    load_plugin_textdomain( 'kontur-admin-style', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'kontur_admin_style_load_plugin_textdomain' );


/*------------------------------------------*/
/*	Options Page                 	        */
/*                         @since    1.0.0  */
/*------------------------------------------*/
// Check if we are in admin mode and load options page
if ( is_admin() ) {

// Add the Options Page-Link
if ( !function_exists( 'kontur_admin_style_Menu' ) ) {
function kontur_admin_style_Menu()
	{
 global $hook_suffix;
		/* Adding menu */
		$hook_suffix = add_theme_page(__('kontur Admin Style'),__('kontur Admin Style'), 'manage_options','kontur-admin-style', 'kontur_admin_style');
		
	}
add_action('admin_menu', 'kontur_admin_style_Menu');
    }
if ( !function_exists( 'kontur_admin_style_set_plug_backend' ) ) {
   function kontur_admin_style_set_plug_backend() {
  require plugin_dir_path( __FILE__ ) . 'admin/kontur-admin-style-admin-page.php';

}
add_action( 'init', 'kontur_admin_style_set_plug_backend' );
}
}


// get the style and scripts for the options page only

if ( !function_exists( 'kontur_admin_style_admin_enqueue_script' ) ) {
function kontur_admin_style_admin_enqueue_script($hook) {
        // $hook is string value given add_menu_page function.
        if($hook != 'appearance_page_kontur-admin-style') {
                return;
        }
        wp_enqueue_style( 'kontur-admin-style-admin', plugin_dir_url( __FILE__ ) . 'admin/css/kontur-admin-style_admin-options-page.css' ); 
	// Add the color picker css file       
        wp_enqueue_style( 'wp-color-picker' ); 
    // Include the Media Uplaoder
        wp_enqueue_media();
    	wp_register_script('media-uploader', plugins_url('admin/js/media-uploader.js' , __FILE__ ), array('jquery'));
    	wp_enqueue_script('media-uploader');
        wp_enqueue_script('jquery');
        // Include Admin jQuery file with WordPress Color Picker dependency
        wp_enqueue_script( 'color-script', plugins_url( 'admin/js/kontur_admin_style_admin-script.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
}
add_action( 'admin_enqueue_scripts', 'kontur_admin_style_admin_enqueue_script' );
}


/*------------------------------------------*/
/*	Register Settings            	        */
/*                         @since    1.0.0  */
/*------------------------------------------*/


if ( !function_exists( 'register_kontur_admin_style_plugin_settings' ) ) {
function register_kontur_admin_style_plugin_settings() {
	
	  register_setting( 'kontur-admin-style-plugin-settings-group', 'kontur-settings-checkbox-admin-style' ,  array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field'
    ) );
    
       register_setting( 'kontur-admin-style-plugin-settings-group', 'kontur_admin_style_adminbar_background' ,  array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field'
    ) );
    

        register_setting( 'kontur-admin-style-plugin-settings-group', 'kontur_admin_adminmenuback' ,  array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field'
    ) );
    
      register_setting( 'kontur-admin-style-plugin-settings-group', 'kontur_admin_current_sub_menu' ,  array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field'
    ) );
    
      register_setting( 'kontur-admin-style-plugin-settings-group', 'kontur_admin_adminmenuwrap' ,  array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field'
    ) );
    
    

      register_setting( 'kontur-admin-style-plugin-settings-group', ' kontur_style_admin_logo' ,  array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field'
    ) );
   
    
      register_setting( 'kontur-admin-style-plugin-settings-group', 'kontur_style_admin_use_logo' ,  array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field'
    ) );
          
      register_setting( 'kontur-admin-style-plugin-settings-group', 'kontur-settings-checkbox-login' ,  array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field'
    ) );
    
     register_setting( 'kontur-admin-style-plugin-settings-group', 'kontur_admin_style_login_logo_link' ,  array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field'
    ) );
    
           register_setting( 'kontur-admin-style-plugin-settings-group', 'kontur_admin_style_login_background_image' ,  array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field'
    ) );
    
    register_setting( 'kontur-admin-style-plugin-settings-group', 'kontur_admin_style_logo_background_image' ,  array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field'
    ) );
    
    
        }
}
	//call register settings function
		add_action( 'admin_init', 'register_kontur_admin_style_plugin_settings' );

/*------------------------------------------*/
/*	Default Option Values       	        */
/*                         @since    1.0.0  */
/*------------------------------------------*/


// We set our default values here
if ( !function_exists( 'kontur_admin_style_default_values' ) ) {
function kontur_admin_style_default_values(){

$minilogo =   plugin_dir_url( __FILE__ ) . 'admin/images/kontur_us.svg';
$loginlogo =   plugin_dir_url( __FILE__ ) . 'admin/images/kontur_admin_style_login_logo.png';
$loginback =   plugin_dir_url( __FILE__ ) . 'admin/images/Eilert_Behrends_DSC04481.jpg';
    
// Form settings defaults
add_option( 'kontur_admin_style_adminbar_background', '#906d9d' );
add_option('kontur-settings-checkbox-login', '0' );
add_option('kontur-settings-checkbox-admin-style', '1' );
add_option('kontur-settings-checkbox-dashboard', '0' );
add_option('kontur-settings-use-stlye', '1' );   
add_option('kontur-settings-checkbox-media', '0' );
add_option( 'kontur_admin_adminmenuback', '#fafdff' ); 
add_option( 'kontur_admin_current_sub_menu', '#8bad86' ); 
add_option( 'kontur_admin_adminmenuwrap', '#d9dfe4' );
add_option( 'kontur_admin_style_login_background_image', $loginback );
add_option( 'kontur_admin_style_logo_background_image',  $loginlogo  );
add_option( 'kontur_admin_style_background', '#232323' );
add_option( 'kontur_admin_style_login_logo_link', 'https://kontur.us' );
add_option( 'kontur_style_admin_logo' , $minilogo );
add_option( 'kontur_style_admin_use_logo' ,'0' );
          

}

add_action( 'kontur_admin_style_default_options', 'kontur_admin_style_default_values' );
}

/**
*  Activate
*
*
* @since    1.0.0
*/
if ( !function_exists( 'kontur_admin_style_activation' ) ) {
function kontur_admin_style_activation(){
    do_action( 'kontur_admin_style_default_options' );
}
register_activation_hook( __FILE__, 'kontur_admin_style_activation' );

}
/*------------------------------------------*/
/*			Check one, check two	     	*/
/*------------------------------------------*/
// Check if kontur admin style is active

if ( !function_exists( 'kontur_admin_style_set_plug_admin_style' ) ) {
function kontur_admin_style_set_plug_admin_style() {

$kontur_admin_stlye_login_option = get_option('kontur-settings-checkbox-admin-style', '1');
if($kontur_admin_stlye_login_option == '1') {
  require_once plugin_dir_path( __FILE__ ) . 'includes/kontur-admin-style-backend.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/kontur-admin-style-frontend.php';
} else { 
}
}
add_action( 'init', 'kontur_admin_style_set_plug_admin_style' );
}
// Check if custom admin bar logo is active
if ( !function_exists( 'kontur_admin_style_set_plug_logo' ) ) {
function kontur_admin_style_set_plug_logo() {

$kontur_style_admin_logo_option = get_option('kontur_style_admin_use_logo', '1');
if($kontur_style_admin_logo_option == '1') {
  require_once plugin_dir_path( __FILE__ ) . 'admin/add-ons/kontur-admin-style-adminbar-logo.php';
} else { 
}
}
add_action( 'init', 'kontur_admin_style_set_plug_logo' );
}
// Check if Custom Login Page is active
if ( !function_exists( 'kontur_admin_style_set_plug_login' ) ) {
function kontur_admin_style_set_plug_login() {
$kontur_admin_stlye_login_option = get_option('kontur-settings-checkbox-login', '1');
if($kontur_admin_stlye_login_option == '1') {
  require plugin_dir_path( __FILE__ ) . 'admin/add-ons/kontur-admin-style-login.php';
} 
    else { }
}
add_action( 'init', 'kontur_admin_style_set_plug_login' );
}