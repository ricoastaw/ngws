<?php
/**
 * Register customizer panels and sections.
 *
 * @package Flixita
 */
function flixita_panel_section_register( $wp_customize ) {
	// Section: Upgrade
	$wp_customize->add_section('flixita_upgrade_premium',array(
		'priority'      => 1,
		'title' 		=> __('Upgrade to Pro','flixita'),
	));
	
	// Section: Top Bar
	$wp_customize->add_section('top_header',array(
		'priority'      => 1,
		'title' 		=> __('Top Bar Setting','flixita'),
		'panel'  		=> 'flixita_general',
	));
	
	// Section:  Menu Bar
	$wp_customize->add_section('header_nav',array(
		'priority'      => 1,
		'title' 		=> __('Menu Bar Setting','flixita'),
		'panel'  		=> 'flixita_general',
	));
	
	// Panel: General
	$wp_customize->add_panel('flixita_general', array(
		'priority' => 31,
		'title' => esc_html__( 'General Options', 'flixita' ),
	));
	
	// Section:  Page Header
	$wp_customize->add_section('header_image', array(
		'title' => esc_html__( 'Page Header Setting', 'flixita' ),
		'priority' => 1,
		'panel' => 'flixita_general',
	));
	
	// Section:  Top Scroller
	$wp_customize->add_section('top_scroller', array(
		'title' => esc_html__( 'Top Scroller Setting', 'flixita' ),
		'priority' => 4,
		'panel' => 'flixita_general',
	));
	
	// Section:  Blog
	$wp_customize->add_section( 'blog_general',array(
		'priority'      => 34,
		'capability'    => 'edit_theme_options',
		'title'			=> __('Blog Setting', 'flixita'),
		'panel' => 'flixita_general',
	));
	
	// Section:  Footer
	$wp_customize->add_section('footer_section',array(
		'priority'      => 34,
		'capability'    => 'edit_theme_options',
		'title'			=> __('Footer Setting', 'flixita'),
		'panel' => 'flixita_general',
	));
}
add_action( 'customize_register', 'flixita_panel_section_register' );