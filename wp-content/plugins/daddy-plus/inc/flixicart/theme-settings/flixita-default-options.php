<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/**
 * Get default option by passing option id
 */
if ( !function_exists( 'daddy_plus_flixicart_get_default_option' ) ):
	function daddy_plus_flixicart_get_default_option( $option ) {

		if ( empty( $option ) ) {
			return false;
		}

		$flixita_default_options = array(
			'enable_slider_right' => '1',
			'slider_right' => daddy_plus_flixita_get_slider__right_default(),
			'enable_product' => '1',
			'product_ttl' => __('Product', 'daddy-plus'),
			'product_subttl' => __('Our <span class="color-primary">Products</span>', 'daddy-plus'),
			'product_desc' => __('There are many variations words pulvinar dapibus passages dont available.', 'daddy-plus'),
			'product_count' => '8'			
		);



		$flixita_default_options = apply_filters( 'flixita_modify_default_options', $flixita_default_options );

		if ( isset( $flixita_default_options[$option] ) ) {
			return $flixita_default_options[$option];
		}

		return false;
	}
endif;

?>
