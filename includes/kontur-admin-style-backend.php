<?php 

/**
 * The backend styles for wp-admin users
 * 
 * @since             1.0.0
 * @package           Kontur_Admin_Style
 * Author:            Eilert Behrends
 * Author URI:        https://profiles.wordpress.org/netzaufsicht/
 * 
 * 
 */

/*------------------------------------------*/
/*			Admin Styles	BACKEND	*/
/*------------------------------------------*/

// Add inline CSS in the admin head with the style tag

if ( !function_exists( 'kontur_admin_style_custom_styles' ) ) {
add_action('admin_head', 'kontur_admin_style_custom_styles');

function kontur_admin_style_custom_styles() {
    $kontur_wpadminbar_back = esc_attr( get_option('kontur_admin_style_adminbar_background') );
    
    $kontur_admin_adminmenuback = esc_attr( get_option('kontur_admin_adminmenuback') );
    $kontur_admin_adminmenuwrap = esc_attr( get_option('kontur_admin_adminmenuwrap') );
    
     $kontur_admin_current_sub_menu = esc_attr( get_option('kontur_admin_current_sub_menu') );
  echo '<style>
    .adminbarcolor   {color:'. $kontur_wpadminbar_back . ';}
   
   .adminbarbackgroundcolor   {background:'. $kontur_wpadminbar_back . '!important; border-color:#6d6e6f!important;}
   .admincurrentsub   {background:'. $kontur_admin_current_sub_menu . '; color:#fcfcfc}
   #wpadminbar{background:' . $kontur_wpadminbar_back .
     '; }
     #adminmenuback, div#adminmenuback, body {background:' . $kontur_admin_adminmenuback   .'; background-color:'. $kontur_admin_adminmenuback  .';}

    #adminmenu, #adminmenu .wp-submenu, #adminmenuwrap {background:'. $kontur_admin_adminmenuwrap . ';}
    
    #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, .folded #adminmenu li.wp-has-current-submenu {background:'
        . $kontur_admin_current_sub_menu . ';}
        
/*DASHBOARD */
    [class*=welcome-panel-icon] {
    background-color: '. $kontur_wpadminbar_back . ';
}   
  [class*=welcome-panel-icon] {
  background-color: '. $kontur_wpadminbar_back . ';} 
        
        .adminbarbackgroundcolor:hover   {background:#6d6e6f!important;}
        
        .postbox {

        border: 2px solid rgba(203, 207, 212, 0.31);
        box-shadow: 0 3px 3px rgba(0,0,0,.04);
        background: #fffcfc;
}
    .plugins .active td, .plugins .active th {
    background-color: #f4f7f0;}
    .plugin-update-tr.active td, .plugins .active th.check-column {
  border-left: 4px solid #a6cda7;}
        
        #adminmenu .opensub .wp-submenu li.current a, #adminmenu .wp-submenu li.current, #adminmenu .wp-submenu li.current a, #adminmenu .wp-submenu li.current a:focus, #adminmenu .wp-submenu li.current a:hover, #adminmenu a.wp-has-current-submenu:focus+.wp-submenu li.current a {
        color: #565b69;
}
    #adminmenu .wp-has-current-submenu .wp-submenu, #adminmenu .wp-has-current-submenu .wp-submenu.sub-open, #adminmenu .wp-has-current-submenu.opensub .wp-submenu, #adminmenu a.wp-has-current-submenu:focus+.wp-submenu, .no-js li.wp-has-current-submenu:hover .wp-submenu {background-color: #ffffff;}
    
.plugins .active td, .plugins .active th {
background-color: #f4f7f0;
}
 .plugin-update-tr.active td, .plugins .active th.check-column {
border-left: 4px solid #a6cda7;
}

#adminmenu a {color: #757b81;}
#adminmenu div.wp-menu-image:before {color: #886f8c;}
#adminmenu .wp-submenu a {color: #3e3e3e;}</style>';
    
}

}