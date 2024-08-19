<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
function daddy_plus_flixicart_customize_options($wp_customize)
{
    $selective_refresh = isset($wp_customize->selective_refresh) ? 'postMessage' : 'refresh';
    /*=========================================
    Slider Right Content
    =========================================*/
	// hide/show
    $wp_customize->add_setting('enable_slider_right', array(
        'default' => daddy_plus_flixicart_get_default_option( 'enable_slider_right' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_checkbox',
		 'priority' => 5,
    ));

    $wp_customize->add_control(new Flixita_Customize_Toggle_Control($wp_customize, 'enable_slider_right', array(
        'label' => __('Enable / Disable Slider Right?', 'daddy-plus') ,
        'section' => 'slider_section_set',
    )));
	
    //slides
    $wp_customize->add_setting('slider_right', array(
        'sanitize_callback' => 'flixita_repeater_sanitize',
        'priority' => 5,
        'default' => daddy_plus_flixicart_get_default_option( 'slider_right' ),
    ));

    $wp_customize->add_control(new Flixita_Repeater($wp_customize, 'slider_right', array(
        'label' => esc_html__('Slide Right', 'daddy-plus') ,
        'section' => 'slider_section_set',
        'add_field_label' => esc_html__('Add New Slider', 'daddy-plus') ,
        'item_name' => esc_html__('Slider Right', 'daddy-plus') ,

        'customizer_repeater_title_control' => true,
        'customizer_repeater_subtitle_control' => true,
        'customizer_repeater_text_control' => true,
        'customizer_repeater_text2_control' => true,
        'customizer_repeater_link_control' => true,
        'customizer_repeater_image_control' => true,
    )));
	
	// Upgrade
	$wp_customize->add_setting('flixita_slider_right_upgrade',array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'priority' => 5,
    ));
	
	$wp_customize->add_control(new Daddy_Plus_Customize_Upgrade_Control($wp_customize, 
			'flixita_slider_right_upgrade', 
			array(
				'label'      => __( 'Slider Info', 'daddy-plus' ),
				'section'    => 'slider_section_set'
			) 
		) 
	);	
	
	// Section:  Product
	$wp_customize->add_section('product_section_set', array(
		'title' => esc_html__( 'Product Settings', 'daddy-plus' ),
		'panel' => 'flixita_frontpage_sections',
		'priority' => 7,
	));
	
	//  Head //
    $wp_customize->add_setting('product_head', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text',
        'priority' => 1,
    ));

    $wp_customize->add_control('product_head', array(
        'type' => 'hidden',
        'label' => __('Product Settings', 'daddy-plus') ,
        'section' => 'product_section_set',
    ));
	
	// hide/show
    $wp_customize->add_setting('enable_product', array(
        'default' => daddy_plus_flixicart_get_default_option( 'enable_product' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_checkbox',
		 'priority' => 1,
    ));

    $wp_customize->add_control(new Flixita_Customize_Toggle_Control($wp_customize, 'enable_product', array(
        'label' => __('Enable / Disable ?', 'daddy-plus') ,
        'section' => 'product_section_set',
    )));
	
    //  Title //
    $wp_customize->add_setting('product_ttl', array(
        'default' => daddy_plus_flixicart_get_default_option( 'product_ttl' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_html',
        'transport' => $selective_refresh,
        'priority' => 4,
    ));

    $wp_customize->add_control('product_ttl', array(
        'label' => __('Title', 'daddy-plus') ,
        'section' => 'product_section_set',
        'type' => 'text',
    ));

    // Subtitle //
    $wp_customize->add_setting('product_subttl', array(
        'default' => daddy_plus_flixicart_get_default_option( 'product_subttl' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_html',
        'transport' => $selective_refresh,
        'priority' => 5,
    ));

    $wp_customize->add_control('product_subttl', array(
        'label' => __('Subtitle', 'daddy-plus') ,
        'section' => 'product_section_set',
        'type' => 'textarea',
    ));

    // Description //
    $wp_customize->add_setting('product_desc', array(
        'default' => daddy_plus_flixicart_get_default_option( 'product_desc' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_html',
        'transport' => $selective_refresh,
        'priority' => 6,
    ));

    $wp_customize->add_control('product_desc', array(
        'label' => __('Description', 'daddy-plus') ,
        'section' => 'product_section_set',
        'type' => 'textarea',
    ));

	if ( class_exists( 'WooCommerce' ) ) {
		//  Category
		$wp_customize->add_setting('product_cat', array(
			'capability' => 'edit_theme_options',
			'priority' => 8
		));
		$wp_customize->add_control(new Flixita_product_Control($wp_customize, 'product_cat', array(
			'label' => __('Select category', 'daddy-plus') ,
			'section' => 'product_section_set'
		)));
	}
    // Product Count
	$wp_customize->add_setting('product_count', array(
		'default' => daddy_plus_flixita_get_default_option( 'product_count' ),
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'flixita_sanitize_html',
		'priority' => 8,
	));
	$wp_customize->add_control('product_count', array(
		'label' => __('Count', 'daddy-plus') ,
		'section' => 'product_section_set',
		'type' => 'number',
	));
	
}
add_action('customize_register', 'daddy_plus_flixicart_customize_options');