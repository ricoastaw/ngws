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
namespace CoderPlus\LogoSwitcherDivi\Admin;

class Customizer{ 

    //Public poperty for the plugin name
    public $plugin = DLS_PLUGIN_BASENAME;

     /**
     * Register action and filter
     * @package DiviLogoSwitcher
     * 
     */
    public function init()
    {       
        add_action( 'customize_register', [$this, 'customizer'] ); //Register customzer
        add_filter( "plugin_action_links_$this->plugin", [$this, 'settings_links']); //Add settings links

    }

    // public function customizer_enqueue()
    // {
        
    //     wp_enqueue_script( 'custom-customize', plugins_url( '/assets/js/customizer.js', __FILE__ ), array( 'jquery', 'customize-controls' ), false, true );
        
    // }

    /**
     * @package DiviLogoSwitcher     * 
     * Add theme customizer link
     * @param links
     * 
     */
    public function settings_links($links)
    {
        $customizer_url = admin_url( 'customize.php?autofocus[control]=dls_option[extra_logo]' );
        //Add custom settings link
        $settings_link = wp_sprintf( "<a href='%s'>%s</a>",  $customizer_url, __('Settings', 'DiviLogoSwitcher'));
        array_push($links, $settings_link);

        return $links;

    }

    /**
     * enqueue scripts
     * 
     * @package DiviLogoSwitcher
     */
    // public function enqueue()
    // {
    //     if($this->get_dls_option('extra_logo')  != NULL){

    //         wp_enqueue_script( 'dsl_mainjs', DLS_PLUGIN_URL.'/assets/js/main.js' , 'jquery', DLS_VERSION, true );

    //         $logo_id    = $this->get_dls_option( 'extra_logo'); // Get attachment form the option table
    //         $logo       = wp_get_attachment_image_src( $logo_id, 'full'); //et thw attachment array 
    //         $dlsLogo    = esc_attr( ($logo[0] ) );  
    //         $homeUrl    = esc_url( home_url( '/' ) ); //Get home url        
    //         $imgAlt     = esc_attr( get_bloginfo( 'name' ) );
    //         $logoHeight = get_option( 'et_divi');
    //         $logoHeight = @esc_attr($logoHeight['logo_height']) ;

    //         wp_localize_script( 'dsl_mainjs', 'dslLogoAttr', array(
    //             'homeUrl'    => $homeUrl, 
    //             'dlsLogo'    => $dlsLogo, 
    //             'imgAlt'     => $imgAlt, 
    //             'logoHeight' => $logoHeight, 
    //             ) 
    //         );

    //     }
    // }
   

    /**
     * Create get_dls_option method for get option form theme.
     * 
     * @package DiviLogoSwitcher     
     * @param optionNaeme
     */

    public static function get_dls_option($optionNaeme)
    {
        $option = get_option('dls_option');
        $option = @$option[$optionNaeme];

        return $option;
    }


    /** 
     * @package DiviLogoSwitcher
     * 
     * Regiseter customizer in divi theme customizer in "Fixed navigations Setttings";
     */ 
    public function customizer($wp_customize){

        $wp_customize->add_setting('dls_option[extra_logo]', array(
            'type' => 'option', // or 'option'
            'capability' => 'edit_theme_options',
            'default' => '',
            'transport' => 'refresh', // or postMessage
        ));


        $wp_customize->add_control( new \WP_Customize_Media_Control( $wp_customize, 'dls_option[extra_logo]', array(
            'section'     => 'et_divi_header_fixed',
            'label'       => __( 'Fixed Navigation Logo', 'DiviLogoSwitcher' ),
            'mime_type' => 'image',
        ) ) );
        
    }
    
}