<?php

/**
 * Fired during plugin activation
 *
 * @link       https://jahid.co/
 * @since      1.0.2
 *
 * @package    DiviLogoSwitcher
 * @subpackage logo-switcher-divi/inc
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.2
 * @package    DiviLogoSwitcher
 * @subpackage logo-switcher-divi/inc
 * @author     Jahid <contact@jahid.co>
 */
namespace CoderPlus\LogoSwitcherDivi\Admin;

class Activator {

	/**
	 * This static method will run when activate the plugin
	 *
	 * Long Description.
	 *
	 * @since    1.0.2
	 */
	public static function activate() {

		// Flush rewrite rules upon activation
		flush_rewrite_rules( );
	}

}