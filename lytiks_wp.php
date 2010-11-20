<?php
/*
Plugin Name: Lytiks - Marketing Performance Tracking
Plugin URI: http://lytiks.com/wordpress-plugin
Description: Lytiks provides marketing analytics for your websites.  This plugin writes the Lytiks tracking code to your site's pages.
Version: 0.1a
Author: Lytiks, Inc.
Author URI: http://lytiks.com
License: GPLv2
*/
function lytiks_wp()
{
	include('script.php');
}

add_action('wp_footer', 'lytiks_wp');

add_action('admin_menu', 'lwp_plugin_menu');
add_action('admin_init', 'register_lwp_settings');

function lwp_plugin_menu() {

  add_options_page('Lytiks Options', 'Lytiks Options', 'manage_options', 'm1', 'lwp_plugin_options');

}

function register_lwp_settings() { // whitelist options
  register_setting( 'lwp_options_group', 'lwp_tracking_code' );
}

function lwp_plugin_options() {
  if (!current_user_can('manage_options'))  {
    wp_die( __('You do not have sufficient permissions to access this page.') );
  }

  include("lwp_admin.php");
}

?>