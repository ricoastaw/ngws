<?php
/** 
 * Customize Upgrade control class.
 *
 * @package Daddy Plus
 * 
 * @see     WP_Customize_Control
 * @access  public
 */

/**
 * Class Daddy_Plus_Customize_Upgrade_Control
 */
 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly    
 if ( ! class_exists( 'WP_Customize_Control' ) )
    return NULL;


class Daddy_Plus_Customize_Upgrade_Control extends WP_Customize_Control {

	/**
	 * Customize control type.
	 *
	 * @access public
	 * @var    string
	 */
	public $type = 'flixita-upgrade';

	/**
	 * Renders the Underscore template for this control.
	 *
	 * @see    WP_Customize_Control::print_template()
	 * @access protected
	 * @return void
	 */
	protected function content_template() {
		
	}

	/**
	 * Render content is still called, so be sure to override it with an empty function in your subclass as well.
	 */
	protected function render_content() {
		$activate_theme_data = wp_get_theme(); // getting current theme data.
		$activate_theme      = $activate_theme_data->name;
		if ( 'FlixiCart' == $activate_theme ) {
			$upgrade_to_pro_link = 'https://themesdaddy.com/themes/flixicart-pro/';
		}elseif ( 'Alexia' == $activate_theme ) {
			$upgrade_to_pro_link = 'https://themesdaddy.com/themes/alexia-pro/';	
		}elseif ( 'Arvila' == $activate_theme ) {
			$upgrade_to_pro_link = 'https://themesdaddy.com/themes/arvila-pro/';	
		}elseif ( 'MultiBiz' == $activate_theme ) {
			$upgrade_to_pro_link = 'https://themesdaddy.com/themes/multibiz-pro/';	
		}elseif ( 'Avine' == $activate_theme ) {
			$upgrade_to_pro_link = 'https://themesdaddy.com/themes/avine-pro/';	
		}elseif ( 'Avire' == $activate_theme ) {
			$upgrade_to_pro_link = 'https://themesdaddy.com/themes/avire-pro/';		
		}elseif ( 'Enovia' == $activate_theme ) {
			$upgrade_to_pro_link = 'https://themesdaddy.com/themes/enovia-pro/';
		}elseif ( 'Flixify' == $activate_theme ) {
			$upgrade_to_pro_link = 'https://themesdaddy.com/themes/flixify-pro/';	
		}elseif ( 'Flecto' == $activate_theme ) {
			$upgrade_to_pro_link = 'https://themesdaddy.com/themes/flecto-pro/';	
		}elseif ( 'QuickBiz' == $activate_theme ) {
			$upgrade_to_pro_link = 'https://themesdaddy.com/themes/quickbiz-pro/';	
		}elseif ( 'Alvert' == $activate_theme ) {
			$upgrade_to_pro_link = 'https://themesdaddy.com/themes/alvert-pro/';	
		}else{
			$upgrade_to_pro_link = 'https://themesdaddy.com/themes/flixita-pro/';
		}	
		?>

		<div class="flixita-upgrade-pro-message" style="display:none;";>
			<?php if(!empty($this->label)): ?>
				<h4 class="customize-control-title"><?php echo wp_kses_post( 'Upgrade to <a href="'.$upgrade_to_pro_link.'" target="_blank" > '. esc_html($activate_theme) .' </a> to add more', 'daddy-plus')?> <?php echo esc_html($this->label) ?> <?php esc_html_e( 'and get the other premium features.', 'daddy-plus') ?></h4>
			<?php endif; ?>
		</div>

		<?php
	}

}