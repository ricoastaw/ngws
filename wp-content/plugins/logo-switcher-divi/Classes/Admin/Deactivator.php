<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://jahid.co/
 * @since      1.0.2
 *
 * @package    DiviLogoSwitcher
 * @subpackage logo-switcher-divi/inc
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.2
 * @package    DiviLogoSwitcher
 * @subpackage logo-switcher-divi/inc
 * @author     Jahid <contact@jahid.co>
 */
namespace CoderPlus\LogoSwitcherDivi\Admin;

class Deactivator {

	/**
	 * This method will run upon deactivation
	 *
	 * Long Description.
	 *
	 * @since    1.0.2
	 */
	public static function deactivate() {

		// Flush rewrite rules upon deactivation
		flush_rewrite_rules( );
	}

}
