<?php

/**
 * @package DiviLogoSwitcher
*/

/*
Plugin Name: Logo Switcher Divi
Plugin URI: https://jahid.co/plugins
Description: Divi Logo Switcher switch logo when after acrolling the page
Author: Jahid
Author URI: https://jahid.co
Version: 2.0.0
License: GPLv2 or later
Tags: switch divi logo, divi logo, divi theme, divi fixed navigation logo, switch logo of divi when scroll
Text Domain: DiviLogoSwitcher
Domain Path: /i18n/languages
*/

/*
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see 

copyright 2005 to 2015 Auttomatic, Inc.
 */

defined('ABSPATH') or die('Hello boro what are you doing here? Aren\'t you human?');

// Include the Composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

/**
 * Plugin Text Domain
 */
function DiviLogoSwitcher_domain_load_function(){
    load_plugin_textdomain('DiviLogoSwitcher', false, dirname(__FILE__)."/i18n/languages");
}
add_action('plugins_loaded', 'DiviLogoSwitcher_domain_load_function');

/**
 * Currently plugin version.
 * Start at version 1.0.0 
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'DLS_VERSION', '2.0.0' );

define('DLS_PLUGIN_URL', plugin_dir_url(__FILE__));

define('DLS_PLUGIN_BASENAME', plugin_basename( __FILE__ ));

use CoderPlus\LogoSwitcherDivi\Admin\Activator;
use CoderPlus\LogoSwitcherDivi\Admin\AdminNotice;
use CoderPlus\LogoSwitcherDivi\Admin\Deactivator;
use CoderPlus\LogoSwitcherDivi\Admin\Customizer;
use CoderPlus\LogoSwitcherDivi\FrontEnd\Assets;

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-jahid-activator.php
 */
function activate_dls() {
	Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-jahid-deactivator.php
 */
function deactivate_dls() {
	Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_dls' );
register_deactivation_hook( __FILE__, 'deactivate_dls' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.2
 */
if('Divi' !== get_option( 'template' ))
{        
    add_action( 'admin_notices', 'AdminNotice::template_notice' );

}else{
    $divilogoswitcherAdmin = new Customizer();
    $divilogoswitcherFrontEnd = new Assets();
    $divilogoswitcherAdmin->init();
    $divilogoswitcherFrontEnd->init();
    
}




