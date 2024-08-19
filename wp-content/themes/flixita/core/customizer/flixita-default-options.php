<?php
/**
 * Get default option by passing option id
 */
if ( !function_exists( 'flixita_get_default_option' ) ):
	function flixita_get_default_option( $option ) {


		if ( empty( $option ) ) {
			return false;
		}

		$flixita_default_options = array(
			'logo_size' => '150',
			'enable_cart' => '1',
			'enable_nav_search' => '1',
			'enable_hdr_btn' => '1',
			'hdr_btn_label' => __('Get in Touch', 'flixita'),
			'hdr_btn_link' => '',
			'enable_hdr_sticky' => '1',
			'enable_page_header' => '1',
			'page_header_img_opacity' => '0.75',
			'page_header_bg_color' => '#000000',
			'blog_archive_ordering' => array(
											'meta',
											'title',
											'content',
										),		
			'footer_copyright' => wp_kses_post(sprintf( __( 'Copyright &copy; {current_year}. Created by %s. Powered by %s.', 'flixita' ), '<a href="#" target="_blank" rel="noopener">Themes Daddy</a>', '<a href="https://www.wordpress.org" target="_blank" rel="noopener">WordPress</a>' )),
		);



		$flixita_default_options = apply_filters( 'flixita_modify_default_options', $flixita_default_options );

		if ( isset( $flixita_default_options[$option] ) ) {
			return $flixita_default_options[$option];
		}

		return false;
	}
endif;
?>
