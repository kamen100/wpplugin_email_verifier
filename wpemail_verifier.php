<?php

/*
Plugin Name: WordPress Email Virifier
Plugin URI: https://prebor.space/wpplugin_email_verifier
Description: verifier for domains
Version: 0.1
Author: Kamen Petkov
Author URI: https://dulodesign.eu/
*/

/**
 * Copyright (c) `date "+%Y"` . All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * **********************************************************************
 */

// Add a link to our plugin in the admin menu
function wpplugin_email_verifier_menu(){
  //add_option ($page_title, $menu_title, $capability, $menu-slug, $function)
  add_options_page(
    'Domains Verifier KrumchKamen plugin',
    'Menu .*** Verifier',
    'manage_options',
    'wpemail-verifier',
    'wpplugin_verifier_options_page'
  );

}
add_action('admin_menu', 'wpplugin_email_verifier_menu');

function wpplugin_verifier_options_page(){
if (!current_user_can('manage_options')){
  wp_die( __('You do not have permissions'));
}
global $plugin_url;

if(isset($_POST['adddomain_form_submitted'])){
  $hidden_field= esc_html($_POST['adddomain_form_submitted']);
  if ($hidden_field=='Y'){
    $adddomain=esc_html($_POST['adddomain']);
    echo $adddomain;
  }
}
  require('options-page-wraper.php');
}

// Function for add options
function wpplugin_verifier_options(){

          add_option('wpplugin_verifier_options', 'Plugin options');
// update_option('wpplugin_verifier_options', 'New Plugin options');
// delete_option('wpplugin_verifier_options');

}
add_action('admin_init', 'wpplugin_verifier_options');



// function validate_email_domain(){
//
// }

// add_action('registration_errors', 'validate_email_domain', 10, 3);
// function validate_email_domain( $errors, $login, $email ) {
//     if ( is_email($email) and  substr($email, -3) != 'edu' ) {
//         $errors->add('email_domain', __('ERROR: You may only register with a .edu email address.'));
//     }
//     return $errors;
// }







 ?>
