<?php
/**
 * Flixita functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package flixita
 */
if ( ! function_exists( 'flixita_setup' ) ) :
function flixita_setup() {
	
	load_theme_textdomain( 'flixita' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary Menu', 'flixita' ),
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'custom-background', apply_filters( 'flixita_custom_background_args',    array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support('custom-logo');
	add_theme_support( 'woocommerce' );

	// Root path/URI.
	define( 'FLIXITA_THEME_DIR', get_template_directory() );
	define( 'FLIXITA_THEME_URI', get_template_directory_uri() );

	// Root path/URI.
	define( 'FLIXITA_THEME_CORE_DIR', FLIXITA_THEME_DIR . '/core');
	define( 'FLIXITA_THEME_CORE_URI', FLIXITA_THEME_URI . '/core');

	// Control path/URI.
	define( 'FLIXITA_THEME_CONTROL_DIR', FLIXITA_THEME_CORE_DIR . '/customizer/custom-controls');
	define( 'FLIXITA_THEME_CONTROL_URI', FLIXITA_THEME_CORE_DIR . '/customizer/custom-controls');
}
endif;
add_action( 'after_setup_theme', 'flixita_setup' );

// Content Width
function flixita_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'flixita_content_width', 1200 );
}
add_action( 'after_setup_theme', 'flixita_content_width', 0 );


// Main file
require_once get_template_directory() . '/core/core.php';