<?php 

/**
 * The custom login page
 * 
 * @since             1.0.0
 * @package           Kontur_Admin_Style
 * Author:            Eilert Behrends
 * Author URI:        https://profiles.wordpress.org/netzaufsicht/
 * 
 * 
 */

/*------------------------------------------*/
/*			LOGIN		*/
/*------------------------------------------*/



function kontur_admin_tools_change_wp_login_url($url) {
    $kontur_login_url =  esc_url( get_option('kontur_admin_style_login_logo_link') );
	return $kontur_login_url;
    
}
add_filter('login_headerurl', 'kontur_admin_tools_change_wp_login_url');

// Set Title
function kontur_admin_tools_change_wp_login_logo_url_title() {
    $kontur_login_url = esc_url( get_option('kontur_admin_style_login_logo_link') );
    return $kontur_login_url;
}
add_filter( 'login_headertext', 'kontur_admin_tools_change_wp_login_logo_url_title' );

function kontur_admin_tools_change_wp_login_logo() { ?>
<style type="text/css">
    #login h1 a,
    .login h1 a {
        background: #fff;
        border: 3px solid rgba(205, 205, 205, 0.48);
        box-shadow: 4px 4px 14px rgba(255, 255, 255, .7);
        border-radius: 15px;
        background: url(<?php echo esc_url( get_option('kontur_admin_style_logo_background_image'));
        ?>);
        height: auto;
        min-height: 142px;
        width: 142px;
        background-size: 142px auto;
        background-repeat: no-repeat;
        padding-bottom: 0px;
    }

    body.login {
        background: linear-gradient(rgba(255, 255, 255, 0.52),
                rgba(255, 255, 255, 0.75)), url(<?php echo esc_url( get_option('kontur_admin_style_login_background_image'));
        ?>);
        background-size: cover;

    }


    p label[for=user_login],
    label[for=user_pass],
    .login label,
    p.forgetmenot {
        display: none !important;
    }
</style>


<?php }
add_action( 'login_enqueue_scripts', 'kontur_admin_tools_change_wp_login_logo' );

function admin_login_redirect( $redirect_to, $request, $user ) {
   global $user;
   
   if( isset( $user->roles ) && is_array( $user->roles ) ) {
      if( in_array( "administrator", $user->roles ) ) {
      return $redirect_to;
      } 
      else {
      return home_url();
      }
   }
   else {
   return $redirect_to;
   }
}

add_filter("login_redirect", "admin_login_redirect", 10, 3);

function kontur_login_checked_remember_me() {
add_filter( 'login_footer', 'kontur_rememberme_checked' );
}
add_action( 'init', 'kontur_login_checked_remember_me' );

function kontur_rememberme_checked() {
echo "<script>document.getElementById('rememberme').checked = true;</script>";
}