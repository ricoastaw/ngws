<?php
function flixita_selective_refresh( $wp_customize ) {
	// hdr_info1_title
	$wp_customize->selective_refresh->add_partial( 'hdr_info1_title', array(
		'selector'            => '.above-header .info1 h6',
		'settings'            => 'hdr_info1_title',
		'render_callback'  => 'flixita_hdr_info1_title_render_callback',
	) );
	
	// hdr_info2_title
	$wp_customize->selective_refresh->add_partial( 'hdr_info2_title', array(
		'selector'            => '.main-header .info2 h6',
		'settings'            => 'hdr_info2_title',
		'render_callback'  => 'flixita_hdr_info2_title_render_callback',
	) );
	
	// hdr_info3_title
	$wp_customize->selective_refresh->add_partial( 'hdr_info3_title', array(
		'selector'            => '.main-header .info3 h6',
		'settings'            => 'hdr_info3_title',
		'render_callback'  => 'flixita_hdr_info3_title_render_callback',
	) );
	
	// hdr_btn_label
	$wp_customize->selective_refresh->add_partial( 'hdr_btn_label', array(
		'selector'            => '.main-navigation .button-area a',
		'settings'            => 'hdr_btn_label',
		'render_callback'  => 'flixita_hdr_btn_label_render_callback',
	) );
	
	// footer_top_info
	$wp_customize->selective_refresh->add_partial( 'footer_top_info', array(
		'selector'            => '.footer-top .row'
	) );
	
	// footer_copyright
	$wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
		'selector'            => '.footer-copyright  .copyright-text',
		'settings'            => 'footer_copyright',
		'render_callback'  => 'flixita_footer_copyright_render_callback',
	) );
}
add_action( 'customize_register', 'flixita_selective_refresh' );



// hdr_info1_title
function flixita_hdr_info1_title_render_callback() {
	return get_theme_mod( 'hdr_info1_title' );
}

// hdr_info2_title
function flixita_hdr_info2_title_render_callback() {
	return get_theme_mod( 'hdr_info2_title' );
}

// hdr_info3_title
function flixita_hdr_info3_title_render_callback() {
	return get_theme_mod( 'hdr_info3_title' );
}

// hdr_btn_label
function flixita_hdr_btn_label_render_callback() {
	return get_theme_mod( 'hdr_btn_label' );
}

// footer_copyright
function flixita_footer_copyright_render_callback() {
	return get_theme_mod( 'footer_copyright' );
}