<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/**
 * Get default option by passing option id
 */
if ( !function_exists( 'daddy_plus_flixita_get_default_option' ) ):
	function daddy_plus_flixita_get_default_option( $option ) {

		if ( empty( $option ) ) {
			return false;
		}

		$flixita_default_options = array(
			'enable_top_hdr' => '1',
			'enable_hdr_info1' => '1',
			'hdr_info1_icon' => 'fa-envelope',
			'hdr_info1_title' => __('info@example.com', 'daddy-plus'),
			'hdr_info1_link' => '#',
			'enable_hdr_info2' => '1',
			'hdr_info2_icon' => 'fa-phone',
			'hdr_info2_title' => __('+123 456 7890', 'daddy-plus'),
			'hdr_info2_link' => '#',
			'enable_hdr_info3' => '1',
			'hdr_info3_icon' => 'fa-map-marker',
			'hdr_info3_title' => __('California, TX 70240', 'daddy-plus'),
			'hdr_info3_link' => '#',
			'enable_social_icon' => '1',
			'hdr_social_icons' => daddy_plus_flixita_get_social_icon_default(),
			'enable_top_footer' => '1',
			'footer_top_info' => daddy_plus_flixita_footer_top_default(),
			'enable_slider' => '1',
			'slider' => daddy_plus_flixita_get_slider_default(),	
			'slider_opacity' => '0.75',	
			'slider_overlay_clr' => '#000000',	
			'enable_info' => '1',
			'info_data' => daddy_plus_flixita_info_default(),	
			'info_data2' => daddy_plus_flixita_info2_default(),
			'enable_marque' => '1',
			'marque_data' => daddy_plus_flixita_marquee_default(),	
			'enable_service' => '1',
			'service_ttl' => __('Service', 'daddy-plus'),
			'service_subttl' => __('Our <span class="color-primary">Services</span>', 'daddy-plus'),
			'service_desc' => __('There are many variations words pulvinar dapibus passages dont available.', 'daddy-plus'),
			'service_data' => daddy_plus_flixita_service_default(),	
			'service_column' => '3',
			'enable_call_action' => '1',			
			'call_action_ttl' => __('Join In Our Team', 'daddy-plus'),
			'call_action_subttl' => __('Please, Call Us To join in Our Team.', 'daddy-plus'),
			'call_action_icon1' => 'fa-headphones',		
			'call_action_ttl1' => __('+1 (800) 216 2020', 'daddy-plus'),
			'call_action_link1' => 'tel:18002162020',
			'call_action_icon2' => 'fa-envelope',		
			'call_action_ttl2' => __('info@example.com', 'daddy-plus'),
			'call_action_link2' => 'mailto:info@example.com',
			'call_action_img' => esc_url(daddy_plus_plugin_url . '/inc/flixita//images/call-action.png'),
			'call_action_bg_img' => esc_url(daddy_plus_plugin_url . '/inc/flixita/images/call-action-bg.png'),
			'call_action_bg_color' => '#007bff',
			'enable_blog' => '1',
			'blog_ttl' => __('Our Blog', 'daddy-plus'),
			'blog_subttl' => __('Our <span class="text-primary">Blog</span>', 'daddy-plus'),
			'blog_desc' => __('There are many variations words pulvinar dapibus passages dont available.', 'daddy-plus'),
			'blog_column' => '4',
			'blog_num' => '3',
		);



		$flixita_default_options = apply_filters( 'flixita_modify_default_options', $flixita_default_options );

		if ( isset( $flixita_default_options[$option] ) ) {
			return $flixita_default_options[$option];
		}

		return false;
	}
endif;

?>
