<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
* Plugin Name:          Daddy Plus
* Plugin URI:           
* Description:          Daddy Plus plugin provides Daddy themes extra settings for front page.
* Version:              1.0.17
* Author:               Themes Daddy
* Author URI:           
* Tested up to:         6.6
* Requires:             4.6 or higher
* License:              GPLv3 or later
* License URI:          http://www.gnu.org/licenses/gpl-3.0.html
* Requires PHP:         5.6
* Text Domain:          daddy-plus
*/

/*
Daddy Plus is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Daddy Plus is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Daddy Plus. If not, see http://www.gnu.org/licenses/gpl-3.0.html.
*/

define( 'daddy_plus_plugin_url', plugin_dir_url( __FILE__ ) );
define( 'daddy_plus_plugin_dir', plugin_dir_path( __FILE__ ) );

if ( ! function_exists( 'daddy_plus_init' ) ) {
	function daddy_plus_init() {

		$activate_theme_data = wp_get_theme(); // getting current theme data.
		$activate_theme      = $activate_theme_data->name;
		require_once('inc/customize-upgrade-control.php');
		
		if ( 'Flixita' == $activate_theme ) {
			require 'inc/flixita/flixita.php';
		}
		
		if ( 'FlixiCart' == $activate_theme ) {
			require 'inc/flixicart/flixicart.php';
		}
		
		if ( 'Alexia' == $activate_theme ) {
			require 'inc/alexia/alexia.php';
		}
		if ( 'Arvila' == $activate_theme ) {
			require 'inc/arvila/arvila.php';
		}
		if ( 'MultiBiz' == $activate_theme ) {
			require 'inc/multibiz/multibiz.php';
		}
		if ( 'Avine' == $activate_theme ) {
			require 'inc/avine/avine.php';
		}
		if ( 'Enovia' == $activate_theme ) {
			require 'inc/enovia/enovia.php';
		}
		if ( 'Avire' == $activate_theme ) {
			require 'inc/avire/avire.php';
		}
		if ( 'Flixify' == $activate_theme ) {
			require 'inc/flixify/flixify.php';
		}
		if ( 'Flixita News' == $activate_theme ) {
			require 'inc/flixita-news/flixita-news.php';
		}
		if ( 'Flecto' == $activate_theme ) {
			require 'inc/flecto/flecto.php';
		}
		if ( 'QuickBiz' == $activate_theme ) {
			require 'inc/quickbiz/quickbiz.php';
		}
		if ( 'Alvert' == $activate_theme ) {
			require 'inc/alvert/alvert.php';
		}

	}
	add_action( 'init', 'daddy_plus_init' );
}

// on plugin activation.
function daddy_plus_activate() {
	require_once plugin_dir_path( __FILE__ ) . 'inc/daddy-plus-activator.php';
	daddy_plus_plugin_activator::activate();
}
register_activation_hook( __FILE__, 'daddy_plus_activate' );
