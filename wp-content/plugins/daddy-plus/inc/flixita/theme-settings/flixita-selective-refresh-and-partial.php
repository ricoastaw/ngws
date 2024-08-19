<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
function daddy_plus_flixita_selective_refresh( $wp_customize ) {
	// info_data
	$wp_customize->selective_refresh->add_partial( 'info_data', array(
		'selector'            => '.info-section .info-wrapper'
	) );
	
	// service_ttl
	$wp_customize->selective_refresh->add_partial( 'service_ttl', array(
		'selector'            => '.service-section:not(.flixita-service-page)  .theme-main-heading .title',
		'settings'            => 'service_ttl',
		'render_callback'  => 'daddy_plus_flixita_service_ttl_render_callback',
	) );
	
	// service_subttl
	$wp_customize->selective_refresh->add_partial( 'service_subttl', array(
		'selector'            => '.service-section:not(.flixita-service-page)  .theme-main-heading h2',
		'settings'            => 'service_subttl',
		'render_callback'  => 'daddy_plus_flixita_service_subttl_render_callback',
	) );
	
	// service_desc
	$wp_customize->selective_refresh->add_partial( 'service_desc', array(
		'selector'            => '.service-section:not(.flixita-service-page)  .theme-main-heading p',
		'settings'            => 'service_desc',
		'render_callback'  => 'daddy_plus_flixita_service_desc_render_callback',
	) );
	
	// service_data
	$wp_customize->selective_refresh->add_partial( 'service_data', array(
		'selector'            => '.service-section:not(.flixita-service-page)  .service-wrapper'
	) );
	
	// call_action_ttl
	$wp_customize->selective_refresh->add_partial( 'call_action_ttl', array(
		'selector'            => '.flixita-main-cta  .call-content .title',
		'settings'            => 'call_action_ttl',
		'render_callback'  => 'daddy_plus_flixita_call_action_ttl_render_callback',
	) );
	
	// call_action_subttl
	$wp_customize->selective_refresh->add_partial( 'call_action_subttl', array(
		'selector'            => '.flixita-main-cta  .call-content .description',
		'settings'            => 'call_action_subttl',
		'render_callback'  => 'daddy_plus_flixita_call_action_subttl_render_callback',
	) );
	
	// call_action_ttl1
	$wp_customize->selective_refresh->add_partial( 'call_action_ttl1', array(
		'selector'            => '.flixita-main-cta  .call-details1 .call-title a',
		'settings'            => 'call_action_ttl1',
		'render_callback'  => 'daddy_plus_flixita_call_action_ttl1_render_callback',
	) );
	
	// call_action_ttl2
	$wp_customize->selective_refresh->add_partial( 'call_action_ttl2', array(
		'selector'            => '.flixita-main-cta  .call-details2 .call-title a',
		'settings'            => 'call_action_ttl2',
		'render_callback'  => 'daddy_plus_flixita_call_action_ttl2_render_callback',
	) );
	
	// blog_ttl
	$wp_customize->selective_refresh->add_partial( 'blog_ttl', array(
		'selector'            => '.flixita-main-blog  .theme-main-heading .title',
		'settings'            => 'blog_ttl',
		'render_callback'  => 'daddy_plus_flixita_blog_ttl_render_callback',
	) );
	
	// blog_subttl
	$wp_customize->selective_refresh->add_partial( 'blog_subttl', array(
		'selector'            => '.flixita-main-blog  .theme-main-heading h2',
		'settings'            => 'blog_subttl',
		'render_callback'  => 'daddy_plus_flixita_blog_subttl_render_callback',
	) );
	
	// blog_desc
	$wp_customize->selective_refresh->add_partial( 'blog_desc', array(
		'selector'            => '.flixita-main-blog  .theme-main-heading p',
		'settings'            => 'blog_desc',
		'render_callback'  => 'daddy_plus_flixita_blog_desc_render_callback',
	) );
	
	// product_ttl
	$wp_customize->selective_refresh->add_partial( 'product_ttl', array(
		'selector'            => '.flixita-main-product   .theme-main-heading .title',
		'settings'            => 'product_ttl',
		'render_callback'  => 'flixita_product_ttl_render_callback',
	) );
	
	// product_subttl
	$wp_customize->selective_refresh->add_partial( 'product_subttl', array(
		'selector'            => '.flixita-main-product   .theme-main-heading h2',
		'settings'            => 'product_subttl',
		'render_callback'  => 'flixita_product_subttl_render_callback',
	) );
	
	// product_desc
	$wp_customize->selective_refresh->add_partial( 'product_desc', array(
		'selector'            => '.flixita-main-product   .theme-main-heading p',
		'settings'            => 'product_desc',
		'render_callback'  => 'flixita_product_desc_render_callback',
	) );
}
add_action( 'customize_register', 'daddy_plus_flixita_selective_refresh' );



// service_ttl
function daddy_plus_flixita_service_ttl_render_callback() {
	return get_theme_mod( 'service_ttl' );
}

// service_subttl
function daddy_plus_flixita_service_subttl_render_callback() {
	return get_theme_mod( 'service_subttl' );
}

// service_desc
function daddy_plus_flixita_service_desc_render_callback() {
	return get_theme_mod( 'service_desc' );
}

// call_action_ttl
function daddy_plus_flixita_call_action_ttl_render_callback() {
	return get_theme_mod( 'call_action_ttl' );
}

// call_action_subttl
function daddy_plus_flixita_call_action_subttl_render_callback() {
	return get_theme_mod( 'call_action_subttl' );
}

// call_action_ttl1
function daddy_plus_flixita_call_action_ttl1_render_callback() {
	return get_theme_mod( 'call_action_ttl1' );
}

// call_action_ttl2
function daddy_plus_flixita_call_action_ttl2_render_callback() {
	return get_theme_mod( 'call_action_ttl2' );
}

// blog_ttl
function daddy_plus_flixita_blog_ttl_render_callback() {
	return get_theme_mod( 'blog_ttl' );
}

// blog_subttl
function daddy_plus_flixita_blog_subttl_render_callback() {
	return get_theme_mod( 'blog_subttl' );
}

// blog_desc
function daddy_plus_flixita_blog_desc_render_callback() {
	return get_theme_mod( 'blog_desc' );
}

// product_ttl
function flixita_product_ttl_render_callback() {
	return get_theme_mod( 'product_ttl' );
}

// product_subttl
function flixita_product_subttl_render_callback() {
	return get_theme_mod( 'product_subttl' );
}

// product_desc
function flixita_product_desc_render_callback() {
	return get_theme_mod( 'product_desc' );
}