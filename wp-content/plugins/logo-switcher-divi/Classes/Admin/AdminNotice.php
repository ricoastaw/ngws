<?php 

/**
 * Fired after activation for the admin notice
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
 * This class defines all code necessary to run during the coupon creation & coupon applyed.
 *
 * @link       https://jahid.co/
 * @since      1.0.2
 *
 * @package    DiviLogoSwitcher
 * @subpackage logo-switcher-divi/inc
 */

 namespace CoderPlus\LogoSwitcherDivi\Admin;
 
 class AdminNotice{

    /**
	 * This method will run if the divi theme is not installed
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
    
     public static function template_notice()
     {
        ?>
        <div class="notice notice-error">
            <p><?php _e( 'Error! Divi logo switcher only works with divi wordpress theme. Please install and active divi theme frist', 'DiviLogoSwitcher' ); ?></p>
        </div>

        <?php
     }
 }