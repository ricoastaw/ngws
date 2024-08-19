<?php

/**
 * Fired during plugin activation
 *
 * @link       https://jahid.co/
 * @since      1.0.3
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
 * @since      1.0.3
 *
 * @package    DiviLogoSwitcher
 * @subpackage logo-switcher-divi/inc
 */

namespace CoderPlus\LogoSwitcherDivi\FrontEnd;
use CoderPlus\LogoSwitcherDivi\Admin\Customizer; 

class Assets{

    public function init()
    {       
        add_action( 'wp_enqueue_scripts', [$this, 'enqueue']); //Register acript

    }

    /**
     * enqueue scripts
     * 
     * @package DiviLogoSwitcher
     */
    public function enqueue()
    {
        if(Customizer::get_dls_option('extra_logo')  != NULL){

            wp_enqueue_script( 'dsl_mainjs', DLS_PLUGIN_URL.'/assets/js/main.js' , 'jquery', DLS_VERSION, true );

            $logo_id    = Customizer::get_dls_option( 'extra_logo'); // Get attachment form the option table
            $logo       = wp_get_attachment_image_src( $logo_id, 'full'); //et thw attachment array 
            $dlsLogo    = esc_attr( ($logo[0] ) );  
            $homeUrl    = esc_url( home_url( '/' ) ); //Get home url        
            $imgAlt     = esc_attr( get_bloginfo( 'name' ) );
            $logoHeight = get_option( 'et_divi');
            $logoHeight = @esc_attr($logoHeight['logo_height']) ;

            wp_localize_script( 'dsl_mainjs', 'dslLogoAttr', array(
                'homeUrl'    => $homeUrl, 
                'dlsLogo'    => $dlsLogo, 
                'imgAlt'     => $imgAlt, 
                'logoHeight' => $logoHeight, 
                ) 
            );

        }
    }
   
    
}