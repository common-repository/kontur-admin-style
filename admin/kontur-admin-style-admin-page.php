<?php
/**
 * The options page
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



   


  function kontur_admin_style(){?>
<style>
    div.kontur_admin_style_adminbar_background {
        background: <?php echo esc_attr(get_option('kontur_admin_style_adminbar_background'));
        ?>
    }

    .wp-core-ui .button-primary {
        background: #ac80b1;
        border-color: #6d6e6f;
        color: #fff;
        text-decoration: none;
        text-shadow: none;
    }

    .wp-core-ui .button-primary.hover,
    .wp-core-ui .button-primary:hover,
    .wp-core-ui .button-primary.focus,
    .wp-core-ui .button-primary:focus {
        background: #6d6e6f;
        border-color: #ac80b1;
        color: #fff;
    }
</style>

<script>
    //admin_adminmenuback
    jQuery(document).ready(function() {
        jQuery('#kontur_admin_adminmenuback').iris({
            hide: true,
            change: function(event, ui) {



                jQuery("#kontur_admin_adminmenuback_info .wp-picker-container .wp-color-result.button").css('background', ui.color.toString());


                jQuery("#wpwrap").css('background', ui.color.toString());




            }
        });
    });


    //admin bar
    jQuery(document).ready(function() {
        jQuery('#kontur_admin_style_adminbar_background').iris({
            hide: true,
            change: function(event, ui) {



                jQuery("#kontur_admin_style_adminbar_background_info .wp-picker-container .wp-color-result.button").css('background', ui.color.toString());


                jQuery("#wpadminbar").css('background', ui.color.toString());

                jQuery("div.kontur_admin_style_adminbar_background").css('background', ui.color.toString());


            }
        });
    });

    //kontur_admin_current_sub_menu
    jQuery(document).ready(function() {
        jQuery('#kontur_admin_current_sub_menu').iris({
            hide: true,
            change: function(event, ui) {



                jQuery("#kontur_admin_current_sub_menu_info .wp-picker-container .wp-color-result.button").css('background', ui.color.toString());

                jQuery("#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, .folded #adminmenu li.wp-has-current-submenu, .admincurrentsub").css('background', ui.color.toString());
            }
        });
    });



    //admin_adminmenuback
    jQuery(document).ready(function() {
        jQuery('#kontur_admin_adminmenuback').iris({
            hide: true,
            change: function(event, ui) {



                jQuery("#kontur_admin_adminmenuback_info .wp-picker-container .wp-color-result.button").css('background', ui.color.toString());


                jQuery("#adminmenuback, body.wp-admin").css('background', ui.color.toString());





            }
        });
    });

    //kontur_admin_adminmenuwrap

    jQuery(document).ready(function() {
        jQuery('#kontur_admin_adminmenuwrap').iris({
            hide: true,
            change: function(event, ui) {



                jQuery("#kontur_admin_adminmenuwrap_info .wp-picker-container .wp-color-result.button").css('background', ui.color.toString());


                jQuery("#adminmenu, #adminmenuwrap").css('background', ui.color.toString());




            }
        });
    });
</script>

<div class="wrap p-4" style="background:white;">
    <hr>




    <?php if (isset($_GET['settings-updated'])) : ?>
    <div id="kontur-admin-style-notice" class="notice notice-success is-dismissible p-4" style="border-left-color: #56a73a;
background: rgb(244, 251, 232);">
        <div class="h1"><span class="kntr-large"><?php esc_html_e( 'SETTINGS UPDATED !', 'kontur-admin-style' ); ?></span>
            <?php $kontur_admin_style_checkbox_checked = get_option('kontur-settings-checkbox-admin-style', '1'); ?>
            <?php if ( 0 == $kontur_admin_style_checkbox_checked ): ?> <small style="color:red;">
                <hr><br><span class="dashicons dashicons-remove"></span> <?php esc_html_e('You are using the default WP admin style', 'kontur-admin-style') ?>
            </small>


            <?php else: ?>
            <hr><br><span class="dashicons dashicons-saved"></span>
            <?php esc_html_e('You are using your custom admin style', 'kontur-admin-style') ?><br><br>

            <?php endif ?>
            <?php $kontur_admin_style_checkbox_checked = get_option('kontur-settings-checkbox-admin-style', '1'); ?>
            <?php if ( 0 == $kontur_admin_style_checkbox_checked ): ?>


            <?php else: ?> <?php $kontur_style_admin_use_logo_checked = get_option('kontur_style_admin_use_logo', '1'); ?>
            <?php if ( 0 == $kontur_style_admin_use_logo_checked ): ?> <small style="color:red;">
                <hr><br><span class="dashicons dashicons-remove"></span> <?php esc_html_e('You did not set an admin bar icon yet', 'kontur-admin-style') ?>
            </small><br>


            <?php else: ?>
            <hr><br><span class="dashicons dashicons-saved"></span>
            <?php esc_html_e('You are using your own admin bar icon', 'kontur-admin-style') ?><br>

            <?php endif ?>

            <?php endif ?>

            <?php $kontur_admin_style_checkbox_login_checked = get_option('kontur-settings-checkbox-login', '1'); ?>
            <?php if ( 0 == $kontur_admin_style_checkbox_login_checked ): ?>
            <small style="color:red;">
                <hr><br><span class="dashicons dashicons-remove"></span> <?php esc_html_e('You are using the default WordPress LogIn Page ', 'kontur-admin-style') ?>
            </small>
            <br>
            <br>


            <?php else: ?>
            <br>
            <hr> <br><span class="dashicons dashicons-saved"></span> <?php esc_html_e('You are using your own login page style ', 'kontur-admin-style') ?>
            <br>
            <br>
            <?php endif ?>
        </div>

    </div>



    <?php endif; ?>



    <h1 class="kntr-headline p-3" style="text-align:left; font-size:42px; font-weight: 200">
        <div style="width:60px"><svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
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
		c1,0,1.9-0.9,1.9-1.9v-7.2C62.3,27.4,61.4,26.5,60.4,26.5z" />
                </g>
                <g>
                    <path class="st0" d="M24.4,43.8l-6.1-10.7c-0.5-0.9-0.5-2.4,0-3.3l6.3-10.6c0.5-0.9,1.8-1.6,2.9-1.6l6.4,0.1l2.7-8.2L22.8,9.3
		c-1,0-2.3,0.7-2.9,1.6l-9.2,15.6H3.8c-1,0-1.9,0.9-1.9,1.9v7.2c0,1,0.9,1.9,1.9,1.9h7.6l8.2,14.4c0.5,0.8,1.6,1.6,2.6,1.7l2.9-9.1
		C24.8,44.4,24.6,44.1,24.4,43.8z" />
                </g>
            </svg></div>
        <?php esc_html_e( 'kontur', 'kontur-admin-style' ); ?> <span style="text-transform: uppercase"><?php esc_html_e( 'Admin', 'kontur-admin-style' ); ?></span> <span style="text-transform: uppercase;"><?php esc_html_e( 'Style', 'kontur-admin-style' ); ?></span>
    </h1>
    <hr>
    <form method="post" action="options.php" enctype="multipart/form-data">
        <?php settings_fields( 'kontur-admin-style-plugin-settings-group' ); ?>
        <?php do_settings_sections( 'kontur-admin-style-plugin-settings-group' ); ?>

        <div id="kontur-admin-style-main-settings" class="kntr-row">


            <div class="d-flex kntr-col-12 kntr-col-lg-12 flex-wrap p-3 justify-content-start">
                <h2 class="kntr-large kntr-col-12 p-3"><?php esc_html_e( 'Change Your Settings:', 'kontur-admin-style' ); ?>
                </h2>
                <div class="card kntr-col-lg-4 p-3"><span class="kntr-large">
                        <input type="checkbox" name="kontur-settings-checkbox-admin-style" value="1" <?php checked(1, get_option('kontur-settings-checkbox-admin-style'), true); ?> /><?php esc_html_e( 'Use Admin Style ', 'kontur-admin-style' ); ?></span>

                    <hr>
                    <?php $kontur_admin_style_checkbox_checked = get_option('kontur-settings-checkbox-admin-style', '1'); ?>
                    <?php if ( 0 == $kontur_admin_style_checkbox_checked ): ?> <small> <?php esc_html_e('Check to use your custom admin style', 'kontur-admin-style') ?> </small>
                    <br> <small> <?php esc_html_e('Settings will show AFTER you checked and saved', 'kontur-admin-style') ?>

                    </small>

                    <?php else: ?>
                    <?php esc_html_e('Uncheck to use the default WordPress admin style ', 'kontur-admin-style') ?>

                    <br><br> <a href="#kntr-admin-style-styles" title="<?php esc_html_e('>> Change your admin style settings', 'kontur-admin-style') ?>"><?php esc_html_e('>> Change your admin style settings', 'kontur-admin-style') ?></a>
                    <?php endif ?>



                </div>



                <div class="card kntr-col-lg-4 p-3"><span class="kntr-large">
                        <input type="checkbox" name="kontur-settings-checkbox-login" value="1" <?php checked(1, get_option('kontur-settings-checkbox-login'), true); ?> /> <?php esc_html_e( 'Use themed login page ', 'kontur-admin-style' ); ?> </span>


                    <hr>
                    <?php $kontur_admin_style_checkbox_login_checked = get_option('kontur-settings-checkbox-login', '1'); ?>
                    <?php if ( 0 == $kontur_admin_style_checkbox_login_checked ): ?> <small> <?php esc_html_e('Check to use your own login page style', 'kontur-admin-style') ?> </small>
                    <br> <small> <?php esc_html_e('Login page settings will show AFTER you checked and saved', 'kontur-admin-style') ?>

                    </small>

                    <?php else: ?>
                    <?php esc_html_e('Uncheck to use the default WordPress login page ', 'kontur-admin-style') ?>
                    <br>
                    <br><a href="#kntr-admin-style-login" title="<?php esc_html_e('Login page Settings', 'kontur-admin-style') ?>"><?php esc_html_e('Login page Settings', 'kontur-admin-style') ?> >></a>
                    <?php endif ?>

                </div>

            </div>
            <?php submit_button( __( 'Save', 'kontur-admin-style' ),'button button-primary kntr-col-lg-8 p-3 kntr-background' ); ?>

        </div>
        <?php $kontur_admin_style_checked = get_option('kontur-settings-checkbox-admin-style', '1'); ?><?php if ( 0 == $kontur_admin_style_checked ): ?>


        <?php else: ?>

        <div class="kntr-col-lg-8">
            <hr>
            <p class="p-3"><?php esc_html_e('General note: Please keep in mind, that there might be people working on your site, that cannot work with low contrast. Our default settings are not really optimised for this usage. Our approach was a a quck fix for a more personal admin area and login page', 'kontur-admin-style') ?></p>
        </div>

        <?php endif ?>

        <div id="kntr-admin-style-dashboard" class="">


            <!-- Admin Color Settings -->

            <div class="<?php $kontur_admin_style_checked = get_option('kontur-settings-checkbox-admin-style', '1'); ?><?php if ( 0 == $kontur_admin_style_checked ): ?> <?php esc_html_e('hidden') ?> <?php else: ?><?php esc_html_e('show') ?><?php endif ?>">
                <hr>
                <div class="kntr-col-12 p-3">
                    <h2 class="kntr-large kntr-col-12">Admin Style Settings</h2>
                </div>
                <hr>
                <div id="kntr-admin-style-styles" class="kntr-col-12 d-flex flex-wrap p-3 justify-content-start ">



                    <div class="card kontur-postbox me-3">

                        <h2 class="kntr-large"> <?php esc_html_e( 'Your Icon / Logo in the Admin bar:', 'kontur-admin-style' ); ?> <div style="width:90%; height:auto; padding:8px; " class="kontur_admin_style_adminbar_background my-3">
                                <div style="min-height:30px; max-width:30px; background-image: url('<?php echo esc_attr( get_option('kontur_style_admin_logo') ); ?>'); background-size:cover;"></div>
                            </div>
                        </h2>
                        <input id="kontur_style_admin_logo" type="text" name="kontur_style_admin_logo" style="width:90%;" value="<?php echo get_option('kontur_style_admin_logo'); ?>" /><br><small><?php esc_html_e( 'paste image URL - OR:', 'kontur-admin-style' ); ?><br> </small>



                        <input id="kontur_style_admin_logo_upload_image_button" type="button" class="button-secondary" value="<?php esc_html_e( 'Select icon from media library', 'kontur-admin-style' ); ?>" />


                        <hr>

                        <br>



                        <input type="checkbox" name="kontur_style_admin_use_logo" value="1" <?php checked(1, get_option('kontur_style_admin_use_logo'), true); ?> /><?php esc_html_e( 'Use Logo in admin bar', 'kontur-admin-style' ); ?>
                        <?php $kontur_admin_style_checkbox_logo_checked = get_option('kontur_style_admin_use_logo', '1'); ?>
                        <?php if ( 0 == $kontur_admin_style_checkbox_logo_checked ): ?> <br><small><?php esc_html_e('Check to use your admin bar icon', 'kontur-admin-style') ?> </small>


                        <?php else : ?><br>
                        <?php esc_html_e('Uncheck to use the default WordPress logo ', 'kontur-admin-style') ?>
                        <?php endif ?>

                        <?php submit_button( __( 'Save Adminbar Icon', 'kontur-admin-style' ),'button button-primary kontur_admin_style_adminbar_background' ); ?>

                    </div>


                    <div class="card me-3">

                        <h2 class="admincurrentsub text-white kntr-large px-4"> <?php esc_html_e( 'Style it Baby', 'kontur-admin-style' ); ?> <span class="dashicons dashicons-admin-customizer"></span></h2>

                        <hr>




                        <div id="kontur_admin_style_adminbar_background_info">


                            <?php esc_html_e('Set the background of the admin bar', 'kontur-admin-style') ?><br>
                            <hr>
                            <input type="text" class="color-field" id="kontur_admin_style_adminbar_background" name="kontur_admin_style_adminbar_background" value="<?php echo esc_attr( get_option('kontur_admin_style_adminbar_background') ); ?>" />
                            <br>


                            <?php if ( get_option('kontur_admin_style_adminbar_background' ) == "#906d9d"): ?>

                            <?php else: ?>
                            <small><?php esc_html_e( 'Current color: ', 'kontur-admin-style' ); ?><?php echo esc_attr( get_option('kontur_admin_style_adminbar_background') ); ?></small><br>
                            <small><?php esc_html_e( 'Our theme color: ', 'kontur-admin-style' ); ?>#906d9d</small>


                            <?php endif ?>
                            <?php submit_button( __( 'Save Adminbar Background', 'kontur-admin-style' ),'button button-primary kontur_admin_style_adminbar_background' ); ?>

                        </div>
                        <hr>

<div style="margin-top: 15px;">

                        <div id="kontur_admin_current_sub_menu_info">





                            <?php esc_html_e('Set the highlight background color of the admin bar sub-menu', 'kontur-admin-style') ?><br>
                            <hr>
                            <div style="">
                                <input type="text" class="color-field" id="kontur_admin_current_sub_menu" name="kontur_admin_current_sub_menu" value="<?php echo esc_attr( get_option('kontur_admin_current_sub_menu') ); ?>" />
                            </div>


                            <?php if ( get_option('kontur_admin_current_sub_menu' ) == "#8bad86"): ?>

                            <?php else: ?>
                            <small><?php esc_html_e( 'Current color: ', 'kontur-admin-style' ); ?><?php echo esc_attr( get_option('kontur_admin_current_sub_menu') ); ?></small><br>
                            <small><?php esc_html_e( 'Our theme color: ', 'kontur-admin-style' ); ?>#8bad86</small>


                            <?php endif ?>
                            <?php submit_button( __( 'Save Color', 'kontur-admin-style' ),'button button-primary kontur_admin_style_adminbar_background' ); ?>



                            

                            </div>
                            <div style="margin-top: 15px;">
                                <hr>
                                <div id="kontur_admin_adminmenuwrap_info">

                                    <?php esc_html_e('Set admin menu-wrap background', 'kontur-admin-style') ?>
                                    <hr>
                                    <input type="text" class="color-field" id="kontur_admin_adminmenuwrap" name="kontur_admin_adminmenuwrap" value="<?php echo esc_attr( get_option('kontur_admin_adminmenuwrap') ); ?>" /><br>

                                    <?php if ( get_option('kontur_admin_adminmenuwrap' ) == "#d9dfe4"): ?>

                                    <?php else: ?>
                                    <small><?php esc_html_e( 'Current color: ', 'kontur-admin-style' ); ?><?php echo esc_attr( get_option('kontur_admin_adminmenuwrap') ); ?></small>
                                    <small><br><?php esc_html_e( 'Our theme color: ', 'kontur-admin-style' ); ?>#d9dfe4</small>


                                    <?php endif ?>
                                    <?php submit_button( __( 'Save Color', 'kontur-admin-style' ),'button button-primary kontur_admin_style_adminbar_background' ); ?>
                                </div>


                            </div>

                            <hr>


                            <div id="kontur_admin_adminmenuback_info">




                                <?php esc_html_e('Set the general admin-area background color', 'kontur-admin-style') ?>
                                <hr>
                                <input type="text" class="color-field" id="kontur_admin_adminmenuback" name="kontur_admin_adminmenuback" value="<?php echo esc_attr( get_option('kontur_admin_adminmenuback') ); ?>" /><br>

                                <?php if ( get_option('kontur_admin_adminmenuback' ) == "#fafdff"): ?>

                                <?php else: ?>
                                <small><?php esc_html_e( 'Current color: ', 'kontur-admin-style' ); ?><?php echo esc_attr( get_option('kontur_admin_adminmenuback') ); ?></small><br>
                                <small><?php esc_html_e( 'Our theme color: ', 'kontur-admin-style' ); ?>#fafdff</small>


                                <?php endif ?>





                                <?php submit_button( __( 'Save color', 'kontur-admin-style' ),'button button-primary kontur_admin_style_adminbar_background' ); ?>
                            </div>
                        </div>
                        <hr>
                        <div class="kntr-col-12">
                            <?php submit_button( __( 'Save admin style settings', 'kontur-admin-style' ),'button button-hero konturSubmitter' ); ?></div>



                    </div>


                </div>
            </div>

            <!-- Login Page Settings -->
            <div class="     <?php $kontur_admin_style_checkbox_login_checked = get_option('kontur-settings-checkbox-login', '1'); ?>
        <?php if ( 0 == $kontur_admin_style_checkbox_login_checked ): ?> <?php esc_html_e('hidden') ?>        
        <?php else: ?>
        <?php esc_html_e('show') ?>
        <?php endif ?>">
                <div id="kntr-admin-style-login" class="kontur-postbox p-4">


                    <h2 class="kntr-large"><?php esc_html_e( 'LOGIN Page Settings', 'kontur-admin-style' ); ?></h2>

                    <hr>



                    <div class="d-flex flex-wrap p-3 justify-content-start">
                        <div class="kntr-col-lg-4 me-3">

                            <h2 class="kntr-large admincurrentsub kntr-large p-3 text-white"><?php esc_html_e( 'Set your own link', 'kontur-admin-style' ); ?> <span class="dashicons dashicons-edit"></span> </h2>
                            <hr>

                            <h3 class="kntr-large"> <?php esc_html_e( 'Login-Logo Link:', 'kontur-admin-style' ); ?></h3>

                            <input type="text" id="kontur_admin_style_login_logo_link" name="kontur_admin_style_login_logo_link" placeholder="<?php esc_html_e( ' https://your-link.com', 'kontur-admin-style' ); ?>" value="<?php echo esc_attr( get_option('kontur_admin_style_login_logo_link') ); ?>" />
                            <br>
                            <small><?php esc_html_e( 'Replaces the wordpress.org link with your own', 'kontur-admin-style' ); ?> </small>
                            <?php submit_button( __( 'Save Login-Logo Link', 'kontur-admin-style' ),'button button-primary kontur_admin_style_adminbar_background' ); ?>
                        </div>
                        <div class="kntr-col-12 kntr-col-lg-8 me-3">
                            <hr>
                            <h2 class="admincurrentsub kntr-large p-3 text-white"><span class="dashicons dashicons-edit"></span> <?php esc_html_e( 'Set background and logo for the login page', 'kontur-admin-style' ); ?></h2>
                            <hr>
                            <div class="kntr-row">
                                <div class="kntr-col-6 kntr-col-lg-3" style="text-align:center;">
                                    <small><?php esc_html_e( 'Current Logo:', 'kontur-admin-style' ); ?> <br></small>
                                    <img src="<?php echo esc_url( get_option('kontur_admin_style_logo_background_image') ); ?>" alt="<?php esc_html_e( 'The current Login page background image', 'kontur-admin-style' ); ?>" width="50%" height="auto"><br><small><?php esc_html_e( '(will change after saving)', 'kontur-admin-style' ); ?></small>

                                </div>
                                <div class="kntr-col-10 kntr-col-lg-9">
                                    <h3 class="mb-1 kntr-large"> <?php esc_html_e( 'Your Logo on the Login Page', 'kontur-admin-style' ); ?></h3><small><?php esc_html_e( 'Should have a 1:1 aspect ratio - e.g. 150x150px', 'kontur-admin-style' ); ?>
                                    </small>
                                    <input id="kontur_admin_style_logo_background_image" type="text" name="kontur_admin_style_logo_background_image" style="width:80%;" value="<?php echo get_option('kontur_admin_style_logo_background_image'); ?>" /><br><small><?php esc_html_e( 'Paste your image-URL - OR:', 'kontur-admin-style' ); ?><br> </small>
                                    <input id="kontur_admin_style_logo_upload_image_button" type="button" class="button-secondary" value="<?php esc_html_e( 'Select logo from media library', 'kontur-admin-style' ); ?>" /> <?php submit_button( __( 'Save Login-Logo', 'kontur-admin-style' ),'button button-primary kontur_admin_style_adminbar_background' ); ?>

                                </div>



                            </div>
                        </div>
                        <hr class="kntr-col-12">
                        <div class="kntr-col-lg-12">

                            <div class="d-flex flex-wrap">

                                <div class="kntr-col-11 kntr-col-lg-6">
                                    <h3 class="kntr-large"> <?php esc_html_e( 'Your Login Page Background', 'kontur-admin-style' ); ?><br><small><?php esc_html_e( 'Make sure to use a large picture!', 'kontur-admin-style' ); ?></small></h3>




                                    <input id="kontur_admin_style_login_background_image" type="text" style="width:75%;" name="kontur_admin_style_login_background_image" value="<?php echo get_option('kontur_admin_style_login_background_image'); ?>" /><br><small><?php esc_html_e( 'paste image URL - OR:', 'kontur-admin-style' ); ?><br> </small>
                                    <input id="kontur_admin_style_login_background_upload_image_button" type="button" class="button-secondary" value="<?php esc_html_e( 'Select background image from media library', 'kontur-admin-style' ); ?>" />
                                    <?php submit_button( __( 'Save Login-Backgound', 'kontur-admin-style' ),'button button-primary kontur_admin_style_adminbar_background' ); ?>
                                </div>

                                <div class="card kntr-col-lg-6" style="text-align:center; min-height:200px; background:linear-gradient(
rgba(255, 255, 255, 0.52), 
rgba(255, 255, 255, 0.75)
),url('<?php echo esc_url( get_option('kontur_admin_style_login_background_image') ); ?>'); background-size:cover;">
                                    <small><?php esc_html_e( 'Current Background:', 'kontur-admin-style' ); ?> <br></small>
                                    <small><?php esc_html_e( '(will change after saving)', 'kontur-admin-style' ); ?></small>
                                </div>


                            </div>
                        </div>
                    </div>

                    <hr>


                    <?php submit_button( __( 'Save Login page settings', 'kontur-admin-style' ),'button button-hero konturSubmitter' ); ?>

                </div>

            </div>









        </div>





        <?php $kontur_admin_style_checked = get_option('kontur-settings-checkbox-admin-style', '1'); ?><?php if ( 0 == $kontur_admin_style_checked ): ?>


        <?php else: ?>
        <hr>
        <?php submit_button( __( 'Save all settings', 'kontur-admin-style' ),'button button-primary button-hero kntr-background konturSubmitter' ); ?>
        <hr>
        <?php endif ?>


    </form>

</div>

<?php }

                  
              
        