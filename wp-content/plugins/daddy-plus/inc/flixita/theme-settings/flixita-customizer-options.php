<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
function daddy_plus_flixita_customize_options($wp_customize)
{
    $selective_refresh = isset($wp_customize->selective_refresh) ? 'postMessage' : 'refresh';
	/*=========================================
    Top Header Section
    =========================================*/
    /*=========================================
    Setting
    =========================================*/
    $wp_customize->add_setting('top_hdr_set', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text',
    ));

    $wp_customize->add_control('top_hdr_set', array(
        'type' => 'hidden',
        'label' => __('Setting', 'daddy-plus') ,
        'section' => 'top_header',
        'priority' => 1,
    ));

    // Enable / Disable
    $wp_customize->add_setting('enable_top_hdr', array(
        'default' => daddy_plus_flixita_get_default_option( 'enable_top_hdr' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Flixita_Customize_Toggle_Control($wp_customize, 'enable_top_hdr', array(
        'label' => __('Enable / Disable ?', 'daddy-plus') ,
        'section' => 'top_header',
        'priority' => 2,

    )));

    /*=========================================
    Info 1
    =========================================*/
    $wp_customize->add_setting('hdr_info1_head', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text',
    ));

    $wp_customize->add_control('hdr_info1_head', array(
        'type' => 'hidden',
        'label' => __('Info 1', 'daddy-plus') ,
        'section' => 'top_header',
        'priority' => 2,
    ));

    // hide/show
    $wp_customize->add_setting('enable_hdr_info1', array(
        'default' => daddy_plus_flixita_get_default_option( 'enable_hdr_info1' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Flixita_Customize_Toggle_Control($wp_customize, 'enable_hdr_info1', array(
        'label' => __('Enable / Disable ?', 'daddy-plus') ,
        'section' => 'top_header',
        'priority' => 2,

    )));

    // icon //
    $wp_customize->add_setting('hdr_info1_icon', array(
        'default' => daddy_plus_flixita_get_default_option( 'hdr_info1_icon' ),
        'sanitize_callback' => 'flixita_sanitize_html',
        'capability' => 'edit_theme_options',
    ));

	$wp_customize->add_control('hdr_info1_icon', array(
        'label' => __('Icon', 'daddy-plus') ,
        'section' => 'top_header',
        'type' => 'text',
        'priority' => 3,
    ));

    //  title //
    $wp_customize->add_setting('hdr_info1_title', array(
        'default' => daddy_plus_flixita_get_default_option( 'hdr_info1_title' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_html',
        'transport' => $selective_refresh,
    ));

    $wp_customize->add_control('hdr_info1_title', array(
        'label' => __('Title', 'daddy-plus') ,
        'section' => 'top_header',
        'type' => 'text',
        'priority' => 3,
    ));

    //  Link //
    $wp_customize->add_setting('hdr_info1_link', array(
        'default' => daddy_plus_flixita_get_default_option( 'hdr_info1_link' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_url',
    ));

    $wp_customize->add_control('hdr_info1_link', array(
        'label' => __('Link', 'daddy-plus') ,
        'section' => 'top_header',
        'type' => 'text',
        'priority' => 3,
    ));

    /*=========================================
    Info 2
    =========================================*/
    $wp_customize->add_setting('hdr_info2_head', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text',
    ));

    $wp_customize->add_control('hdr_info2_head', array(
        'type' => 'hidden',
        'label' => __('Info 2', 'daddy-plus') ,
        'section' => 'top_header',
        'priority' => 4,
    ));

    // hide/show
    $wp_customize->add_setting('enable_hdr_info2', array(
         'default' => daddy_plus_flixita_get_default_option( 'enable_hdr_info2' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Flixita_Customize_Toggle_Control($wp_customize, 'enable_hdr_info2', array(
        'label' => __('Enable / Disable ?', 'daddy-plus') ,
        'section' => 'top_header',
        'priority' => 5,

    )));

    // icon //
    $wp_customize->add_setting('hdr_info2_icon', array(
         'default' => daddy_plus_flixita_get_default_option( 'hdr_info2_icon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control('hdr_info2_icon', array(
        'label' => __('Icon', 'daddy-plus') ,
        'section' => 'top_header',
        'type' => 'text',
        'priority' => 6,
    ));

    //  title //
    $wp_customize->add_setting('hdr_info2_title', array(
         'default' => daddy_plus_flixita_get_default_option( 'hdr_info2_title' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_html',
        'transport' => $selective_refresh,
    ));

    $wp_customize->add_control('hdr_info2_title', array(
        'label' => __('Title', 'daddy-plus') ,
        'section' => 'top_header',
        'type' => 'text',
        'priority' => 7,
    ));

    //  Link //
    $wp_customize->add_setting('hdr_info2_link', array(
         'default' => daddy_plus_flixita_get_default_option( 'hdr_info2_link' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_url',
    ));

    $wp_customize->add_control('hdr_info2_link', array(
        'label' => __('Link', 'daddy-plus') ,
        'section' => 'top_header',
        'type' => 'text',
        'priority' => 8,
    ));

    /*=========================================
    Info 3
    =========================================*/
    $wp_customize->add_setting('hdr_info3_head', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text',
    ));

    $wp_customize->add_control('hdr_info3_head', array(
        'type' => 'hidden',
        'label' => __('Info 3', 'daddy-plus') ,
        'section' => 'top_header',
        'priority' => 9,
    ));

    // hide/show
    $wp_customize->add_setting('enable_hdr_info3', array(
         'default' => daddy_plus_flixita_get_default_option( 'enable_hdr_info3' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Flixita_Customize_Toggle_Control($wp_customize, 'enable_hdr_info3', array(
        'label' => __('Enable / Disable ?', 'daddy-plus') ,
        'section' => 'top_header',
        'priority' => 10,

    )));

    // icon //
    $wp_customize->add_setting('hdr_info3_icon', array(
         'default' => daddy_plus_flixita_get_default_option( 'hdr_info3_icon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control('hdr_info3_icon', array(
        'label' => __('Icon', 'daddy-plus') ,
        'section' => 'top_header',
        'type' => 'text',
        'priority' => 11,
    ));

    //  title //
    $wp_customize->add_setting('hdr_info3_title', array(
         'default' => daddy_plus_flixita_get_default_option( 'hdr_info3_title' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_html',
        'transport' => $selective_refresh,
    ));

    $wp_customize->add_control('hdr_info3_title', array(
        'label' => __('Title', 'daddy-plus') ,
        'section' => 'top_header',
        'type' => 'text',
        'priority' => 12,
    ));

    //  Link //
    $wp_customize->add_setting('hdr_info3_link', array(
         'default' => daddy_plus_flixita_get_default_option( 'hdr_info3_link' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_url',
    ));

    $wp_customize->add_control('hdr_info3_link', array(
        'label' => __('Link', 'daddy-plus') ,
        'section' => 'top_header',
        'type' => 'text',
        'priority' => 13,
    ));

    /*=========================================
    Social
    =========================================*/
    $wp_customize->add_setting('hdr_social_head', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text',
    ));

    $wp_customize->add_control('hdr_social_head', array(
        'type' => 'hidden',
        'label' => __('Social Icon', 'daddy-plus') ,
        'section' => 'top_header',
        'priority' => 15,
    ));

    $wp_customize->add_setting('enable_social_icon', array(
        'default' => daddy_plus_flixita_get_default_option( 'enable_social_icon' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Flixita_Customize_Toggle_Control($wp_customize, 'enable_social_icon', array(
        'label' => __('Enable / Disable ?', 'daddy-plus') ,
        'section' => 'top_header',
        'priority' => 16,

    )));

    /**
     * Customizer Repeater
     */
    $wp_customize->add_setting('hdr_social_icons', array(
		'default' => daddy_plus_flixita_get_default_option( 'hdr_social_icons' ),
        'sanitize_callback' => 'flixita_repeater_sanitize',
    ));

    $wp_customize->add_control(new FLIXITA_Repeater($wp_customize, 'hdr_social_icons', array(
        'label' => esc_html__('Social Icons', 'daddy-plus') ,
        'priority' => 17,
        'section' => 'top_header',
        'customizer_repeater_icon_control' => true,
        'customizer_repeater_link_control' => true,
    )));

	// Upgrade
	$wp_customize->add_setting('flixita_social_icon_upgrade',array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    ));
	
	$wp_customize->add_control(new Daddy_Plus_Customize_Upgrade_Control($wp_customize, 
			'flixita_social_icon_upgrade', 
			array(
				'label'      => __( 'Social Icons', 'daddy-plus' ),
				'section'    => 'top_header',
				'priority' => 17,
			) 
		) 
	);	

	/*=========================================
    Footer Top
    =========================================*/
    // Head //
    $wp_customize->add_setting('footer_top_heading', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text',
    ));

    $wp_customize->add_control('footer_top_heading', array(
        'type' => 'hidden',
        'label' => __('Footer Top', 'daddy-plus') ,
        'section' => 'footer_section',
		'priority' => 1,
    ));

    // Enable / Disable
    $wp_customize->add_setting('enable_top_footer', array(
        'default' => daddy_plus_flixita_get_default_option( 'enable_top_footer' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Flixita_Customize_Toggle_Control($wp_customize, 'enable_top_footer', array(
        'label' => __('Enable / Disable ?', 'daddy-plus') ,
        'section' => 'footer_section',
		'priority' => 2,

    )));

    // Footer Top Info
    $wp_customize->add_setting('footer_top_info', array(
        'sanitize_callback' => 'flixita_repeater_sanitize',
        'transport' => $selective_refresh,
        'default' => daddy_plus_flixita_get_default_option( 'footer_top_info' ),
    ));

    $wp_customize->add_control(new Flixita_Repeater($wp_customize, 'footer_top_info', array(
        'label' => esc_html__('Contact', 'daddy-plus') ,
        'section' => 'footer_section',
		'priority' => 2,
        'add_field_label' => esc_html__('Add New Contact', 'daddy-plus') ,
        'item_name' => esc_html__('Contact', 'daddy-plus') ,
        'customizer_repeater_icon_control' => true,
        'customizer_repeater_image_control' => true,
        'customizer_repeater_title_control' => true,
        'customizer_repeater_subtitle_control' => true,
        'customizer_repeater_link_control' => true,
    )));

	// Upgrade
	$wp_customize->add_setting('flixita_footer_top_info_upgrade',array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    ));
	
	$wp_customize->add_control(new Daddy_Plus_Customize_Upgrade_Control($wp_customize, 
			'flixita_footer_top_info_upgrade', 
			array(
				'label'      => __( 'Info', 'daddy-plus' ),
				'section'    => 'footer_section',
				'priority' => 2,
			) 
		) 
	);	

    /*=========================================
    Slider Content
    =========================================*/
    $wp_customize->add_setting('slider_chead', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text',
        'priority' => 4,
    ));

    $wp_customize->add_control('slider_chead', array(
        'type' => 'hidden',
        'label' => __('Slider Settings', 'daddy-plus') ,
        'section' => 'slider_section_set',
    ));
	
	// hide/show
    $wp_customize->add_setting('enable_slider', array(
        'default' => daddy_plus_flixita_get_default_option( 'enable_slider' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_checkbox',
		 'priority' => 5,
    ));

    $wp_customize->add_control(new Flixita_Customize_Toggle_Control($wp_customize, 'enable_slider', array(
        'label' => __('Enable / Disable ?', 'daddy-plus') ,
        'section' => 'slider_section_set',
    )));
	
    //slides
    $wp_customize->add_setting('slider', array(
        'sanitize_callback' => 'flixita_repeater_sanitize',
        'priority' => 5,
        'default' => daddy_plus_flixita_get_default_option( 'slider' ),
    ));

    $wp_customize->add_control(new Flixita_Repeater($wp_customize, 'slider', array(
        'label' => esc_html__('Slide', 'daddy-plus') ,
        'section' => 'slider_section_set',
        'add_field_label' => esc_html__('Add New Slider', 'daddy-plus') ,
        'item_name' => esc_html__('Slider', 'daddy-plus') ,

        'customizer_repeater_title_control' => true,
        'customizer_repeater_subtitle_control' => true,
        'customizer_repeater_subtitle2_control' => true,
        'customizer_repeater_text_control' => true,
        'customizer_repeater_text2_control' => true,
        'customizer_repeater_link_control' => true,
        'customizer_repeater_align_control' => true,
        'customizer_repeater_image_control' => true,
    )));
	
	// Upgrade
	$wp_customize->add_setting('flixita_slider_upgrade',array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'priority' => 5,
    ));
	
	$wp_customize->add_control(new Daddy_Plus_Customize_Upgrade_Control($wp_customize, 
			'flixita_slider_upgrade', 
			array(
				'label'      => __( 'Slider', 'daddy-plus' ),
				'section'    => 'slider_section_set'
			) 
		) 
	);	
	

    // slider opacity
	$wp_customize->add_setting('slider_opacity', array(
		'default' => daddy_plus_flixita_get_default_option( 'slider_opacity' ),
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'flixita_sanitize_html',
		'priority' => 6,
	));
	$wp_customize->add_control('slider_opacity', array(
		'label' => __('Opacity', 'daddy-plus') ,
		'section' => 'slider_section_set',
		'type' => 'number',
	));

    // Opacity Color
    $wp_customize->add_setting('slider_overlay_clr', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => daddy_plus_flixita_get_default_option( 'slider_overlay_clr' ),
        'priority' => 6,
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'slider_overlay_clr', array(
        'label' => __('Opacity Color', 'daddy-plus') ,
        'section' => 'slider_section_set',
    )));
	
	// Info content Section //
    $wp_customize->add_setting('info_content_head', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text',
        'priority' => 1,
    ));

    $wp_customize->add_control('info_content_head', array(
        'type' => 'hidden',
        'label' => __('Info Settings', 'daddy-plus') ,
        'section' => 'info_section_set',
    ));
	
	// hide/show
    $wp_customize->add_setting('enable_info', array(
        'default' => daddy_plus_flixita_get_default_option( 'enable_info' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_checkbox',
		 'priority' => 2,
    ));

    $wp_customize->add_control(new Flixita_Customize_Toggle_Control($wp_customize, 'enable_info', array(
        'label' => __('Enable / Disable ?', 'daddy-plus') ,
        'section' => 'info_section_set',
    )));
	
	$activate_theme_data = wp_get_theme(); // getting current theme data.
	$activate_theme      = $activate_theme_data->name;
	
	if ( 'Arvila' == $activate_theme || 'Alvert' == $activate_theme) {
		// Info
		$wp_customize->add_setting('info_data2', array(
			'sanitize_callback' => 'flixita_repeater_sanitize',
			'priority' => 2,
			'default' => daddy_plus_flixita_get_default_option( 'info_data2' )
		));

		$wp_customize->add_control(new Flixita_Repeater($wp_customize, 'info_data2', array(
			'label' => esc_html__('Information', 'daddy-plus') ,
			'section' => 'info_section_set',
			'add_field_label' => esc_html__('Add New Information', 'daddy-plus') ,
			'item_name' => esc_html__('Information', 'daddy-plus') ,
			'customizer_repeater_icon_control' => true,
			'customizer_repeater_image_control' => true,
			'customizer_repeater_title_control' => true,
			'customizer_repeater_text_control' => true,
			'customizer_repeater_text2_control' => true,
			'customizer_repeater_link_control' => true,
		)));
	}elseif ( 'Alexia' == $activate_theme || 'Avine' == $activate_theme || 'Flecto' == $activate_theme) {
		// Info
		$wp_customize->add_setting('info_data', array(
			'sanitize_callback' => 'flixita_repeater_sanitize',
			'transport' => $selective_refresh,
			'priority' => 2,
			'default' => daddy_plus_flixita_get_default_option( 'info_data' )
		));

		$wp_customize->add_control(new Flixita_Repeater($wp_customize, 'info_data', array(
			'label' => esc_html__('Information', 'daddy-plus') ,
			'section' => 'info_section_set',
			'add_field_label' => esc_html__('Add New Information', 'daddy-plus') ,
			'item_name' => esc_html__('Information', 'daddy-plus') ,
			'customizer_repeater_icon_control' => true,
			'customizer_repeater_image_control' => true,
			'customizer_repeater_title_control' => true,
			'customizer_repeater_text_control' => true,
			'customizer_repeater_link_control' => true,
		)));	
	}elseif ( 'MultiBiz' == $activate_theme || 'Avire' == $activate_theme) {
		// Info
		$wp_customize->add_setting('info_data', array(
			'sanitize_callback' => 'flixita_repeater_sanitize',
			'transport' => $selective_refresh,
			'priority' => 2,
			'default' => daddy_plus_flixita_get_default_option( 'info_data' )
		));

		$wp_customize->add_control(new Flixita_Repeater($wp_customize, 'info_data', array(
			'label' => esc_html__('Information', 'daddy-plus') ,
			'section' => 'info_section_set',
			'add_field_label' => esc_html__('Add New Information', 'daddy-plus') ,
			'item_name' => esc_html__('Information', 'daddy-plus') ,
			'customizer_repeater_icon_control' => true,
			'customizer_repeater_title_control' => true,
			'customizer_repeater_text_control' => true,
			'customizer_repeater_link_control' => true,
		)));
	}elseif ( 'QuickBiz' == $activate_theme) {
		// Info
		$wp_customize->add_setting('info_data', array(
			'sanitize_callback' => 'flixita_repeater_sanitize',
			'transport' => $selective_refresh,
			'priority' => 2,
			'default' => daddy_plus_flixita_get_default_option( 'info_data' )
		));

		$wp_customize->add_control(new Flixita_Repeater($wp_customize, 'info_data', array(
			'label' => esc_html__('Information', 'daddy-plus') ,
			'section' => 'info_section_set',
			'add_field_label' => esc_html__('Add New Information', 'daddy-plus') ,
			'item_name' => esc_html__('Information', 'daddy-plus') ,
			'customizer_repeater_icon_control' => true,
			'customizer_repeater_title_control' => true,
			'customizer_repeater_text_control' => true,
			'customizer_repeater_text2_control' => true,
			'customizer_repeater_link_control' => true,
		)));		
	}else{
		// Info
		$wp_customize->add_setting('info_data', array(
			'sanitize_callback' => 'flixita_repeater_sanitize',
			'transport' => $selective_refresh,
			'priority' => 2,
			'default' => daddy_plus_flixita_get_default_option( 'info_data' )
		));

		$wp_customize->add_control(new Flixita_Repeater($wp_customize, 'info_data', array(
			'label' => esc_html__('Information', 'daddy-plus') ,
			'section' => 'info_section_set',
			'add_field_label' => esc_html__('Add New Information', 'daddy-plus') ,
			'item_name' => esc_html__('Information', 'daddy-plus') ,
			'customizer_repeater_icon_control' => true,
			'customizer_repeater_image_control' => true,
			'customizer_repeater_title_control' => true,
			'customizer_repeater_text_control' => true,
			'customizer_repeater_text2_control' => true,
			'customizer_repeater_link_control' => true,
		)));
	}
	
	// Upgrade
	$wp_customize->add_setting('flixita_info_upgrade',array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'priority' => 2,
    ));
	
	$wp_customize->add_control(new Daddy_Plus_Customize_Upgrade_Control($wp_customize, 
			'flixita_info_upgrade', 
			array(
				'label'      => __( 'Info', 'daddy-plus' ),
				'section'    => 'info_section_set',
			) 
		) 
	);	
	
	
	if ( 'Avire' == $activate_theme || 'Flecto' == $activate_theme  || 'Alvert' == $activate_theme) {
		// Marque content Section //
		$wp_customize->add_setting('marque_content_head', array(
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'flixita_sanitize_text',
			'priority' => 1,
		));

		$wp_customize->add_control('marque_content_head', array(
			'type' => 'hidden',
			'label' => __('Marque Settings', 'daddy-plus') ,
			'section' => 'marque_section_set',
		));
		
		// hide/show
		$wp_customize->add_setting('enable_marque', array(
			'default' => daddy_plus_flixita_get_default_option( 'enable_marque' ),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'flixita_sanitize_checkbox',
			 'priority' => 2,
		));

		$wp_customize->add_control(new Flixita_Customize_Toggle_Control($wp_customize, 'enable_marque', array(
			'label' => __('Enable / Disable ?', 'daddy-plus') ,
			'section' => 'marque_section_set',
		)));
		
		// Marque Data
		$wp_customize->add_setting('marque_data', array(
			'sanitize_callback' => 'flixita_repeater_sanitize',
			'priority' => 8,
			'default' => daddy_plus_flixita_get_default_option( 'marque_data' ),
		));

		$wp_customize->add_control(new Flixita_Repeater($wp_customize, 'marque_data', array(
			'label' => esc_html__('Marque', 'daddy-plus') ,
			'section' => 'marque_section_set',
			'add_field_label' => esc_html__('Add New Marque', 'daddy-plus') ,
			'item_name' => esc_html__('', 'daddy-plus') ,
			'customizer_repeater_icon_control' => true,
			'customizer_repeater_title_control' => true
		)));
	}
	
	//  Head //
    $wp_customize->add_setting('service_head', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text',
        'priority' => 1,
    ));

    $wp_customize->add_control('service_head', array(
        'type' => 'hidden',
        'label' => __('Service Settings', 'daddy-plus') ,
        'section' => 'service_section_set',
    ));
	
	// hide/show
    $wp_customize->add_setting('enable_service', array(
        'default' => daddy_plus_flixita_get_default_option( 'enable_service' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_checkbox',
		 'priority' => 2,
    ));

    $wp_customize->add_control(new Flixita_Customize_Toggle_Control($wp_customize, 'enable_service', array(
        'label' => __('Enable / Disable ?', 'daddy-plus') ,
        'section' => 'service_section_set',
    )));
	
    //  Title //
    $wp_customize->add_setting('service_ttl', array(
        'default' => daddy_plus_flixita_get_default_option( 'service_ttl' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_html',
        'transport' => $selective_refresh,
        'priority' => 4,
    ));

    $wp_customize->add_control('service_ttl', array(
        'label' => __('Title', 'daddy-plus') ,
        'section' => 'service_section_set',
        'type' => 'text',
    ));

    // Subtitle //
    $wp_customize->add_setting('service_subttl', array(
        'default' => daddy_plus_flixita_get_default_option( 'service_subttl' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_html',
        'transport' => $selective_refresh,
        'priority' => 5,
    ));

    $wp_customize->add_control('service_subttl', array(
        'label' => __('Subtitle', 'daddy-plus') ,
        'section' => 'service_section_set',
        'type' => 'textarea',
    ));

    // Description //
    $wp_customize->add_setting('service_desc', array(
        'default' => daddy_plus_flixita_get_default_option( 'service_desc' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_html',
        'transport' => $selective_refresh,
        'priority' => 6,
    ));

    $wp_customize->add_control('service_desc', array(
        'label' => __('Description', 'daddy-plus') ,
        'section' => 'service_section_set',
        'type' => 'textarea',
    ));

    // Service Data
    $wp_customize->add_setting('service_data', array(
        'sanitize_callback' => 'flixita_repeater_sanitize',
        'transport' => $selective_refresh,
        'priority' => 8,
        'default' => daddy_plus_flixita_get_default_option( 'service_data' ),
    ));

    $wp_customize->add_control(new Flixita_Repeater($wp_customize, 'service_data', array(
        'label' => esc_html__('Service', 'daddy-plus') ,
        'section' => 'service_section_set',
        'add_field_label' => esc_html__('Add New Service', 'daddy-plus') ,
        'item_name' => esc_html__('Service', 'daddy-plus') ,
        'customizer_repeater_icon_control' => true,
        'customizer_repeater_image_control' => true,
        'customizer_repeater_title_control' => true,
        'customizer_repeater_text_control' => true,
        'customizer_repeater_text2_control' => true,
        'customizer_repeater_link_control' => true,
    )));
	
	
	// Upgrade
	$wp_customize->add_setting('flixita_service_upgrade',array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'priority' => 8,
    ));
	
	$wp_customize->add_control(new Daddy_Plus_Customize_Upgrade_Control($wp_customize, 
			'flixita_service_upgrade', 
			array(
				'label'      => __( 'Service', 'daddy-plus' ),
				'section'    => 'service_section_set',
			) 
		) 
	);	
	
	
	//  Head //
    $wp_customize->add_setting('call_action_head', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text',
        'priority' => 1,
    ));

    $wp_customize->add_control('call_action_head', array(
        'type' => 'hidden',
        'label' => __('Header', 'daddy-plus') ,
        'section' => 'call_action_section_set',
    ));

	// hide/show
    $wp_customize->add_setting('enable_call_action', array(
        'default' => daddy_plus_flixita_get_default_option( 'enable_service' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_checkbox',
		 'priority' => 2,
    ));

    $wp_customize->add_control(new Flixita_Customize_Toggle_Control($wp_customize, 'enable_call_action', array(
        'label' => __('Enable / Disable ?', 'daddy-plus') ,
        'section' => 'call_action_section_set',
    )));
	
    //  Title //
    $wp_customize->add_setting('call_action_ttl', array(
        'default' => daddy_plus_flixita_get_default_option( 'call_action_ttl' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_html',
        'transport' => $selective_refresh,
        'priority' => 4,
    ));

    $wp_customize->add_control('call_action_ttl', array(
        'label' => __('Title', 'daddy-plus') ,
        'section' => 'call_action_section_set',
        'type' => 'text',
    ));

    // Subtitle //
    $wp_customize->add_setting('call_action_subttl', array(
        'default' => daddy_plus_flixita_get_default_option( 'call_action_subttl' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_html',
        'transport' => $selective_refresh,
        'priority' => 5,
    ));

    $wp_customize->add_control('call_action_subttl', array(
        'label' => __('Subtitle', 'daddy-plus') ,
        'section' => 'call_action_section_set',
        'type' => 'textarea',
    ));

    // Contact 1 //
    $wp_customize->add_setting('call_action_contact1', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text',
        'priority' => 7,
    ));

    $wp_customize->add_control('call_action_contact1', array(
        'type' => 'hidden',
        'label' => __('Contact 1', 'daddy-plus') ,
        'section' => 'call_action_section_set',
    ));

    // icon //
    $wp_customize->add_setting('call_action_icon1', array(
        'default' => daddy_plus_flixita_get_default_option( 'call_action_icon1' ),
        'sanitize_callback' => 'sanitize_text_field',
        'capability' => 'edit_theme_options',
        'priority' => 8,
    ));
	
	$wp_customize->add_control('call_action_icon1', array(
        'label' => __('Icon', 'daddy-plus') ,
        'section' => 'call_action_section_set',
        'type' => 'text'
    ));

    //  title //
    $wp_customize->add_setting('call_action_ttl1', array(
        'default' => daddy_plus_flixita_get_default_option( 'call_action_ttl1' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_html',
        'transport' => $selective_refresh,
        'priority' => 9,
    ));

    $wp_customize->add_control('call_action_ttl1', array(
        'label' => __('Title', 'daddy-plus') ,
        'section' => 'call_action_section_set',
        'type' => 'text'
    ));

    //  Link //
    $wp_customize->add_setting('call_action_link1', array(
        'default' => daddy_plus_flixita_get_default_option( 'call_action_link1' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_url',
        'priority' => 10,
    ));

    $wp_customize->add_control('call_action_link1', array(
        'label' => __('Link', 'daddy-plus') ,
        'section' => 'call_action_section_set',
        'type' => 'text'
    ));

    // Contact 2 //
    $wp_customize->add_setting('call_action_contact2', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text',
        'priority' => 11,
    ));

    $wp_customize->add_control('call_action_contact2', array(
        'type' => 'hidden',
        'label' => __('Contact 2', 'daddy-plus') ,
        'section' => 'call_action_section_set',
    ));

    // icon //
    $wp_customize->add_setting('call_action_icon2', array(
        'default' => daddy_plus_flixita_get_default_option( 'call_action_icon2' ),
        'sanitize_callback' => 'sanitize_text_field',
        'capability' => 'edit_theme_options',
        'priority' => 12
    ));
	
	$wp_customize->add_control('call_action_icon2', array(
        'label' => __('Icon', 'daddy-plus') ,
        'section' => 'call_action_section_set',
        'type' => 'text'
    ));

    //  title //
    $wp_customize->add_setting('call_action_ttl2', array(
        'default' => daddy_plus_flixita_get_default_option( 'call_action_ttl2' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_html',
        'transport' => $selective_refresh,
        'priority' => 13,
    ));

    $wp_customize->add_control('call_action_ttl2', array(
        'label' => __('Title', 'daddy-plus') ,
        'section' => 'call_action_section_set',
        'type' => 'text'
    ));

    //  Link //
    $wp_customize->add_setting('call_action_link2', array(
        'default' => daddy_plus_flixita_get_default_option( 'call_action_link2' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_url',
        'priority' => 14,
    ));

    $wp_customize->add_control('call_action_link2', array(
        'label' => __('Link', 'daddy-plus') ,
        'section' => 'call_action_section_set',
        'type' => 'text'
    ));

    // Image //
    $wp_customize->add_setting('call_action_img', array(
        'default' => daddy_plus_flixita_get_default_option( 'call_action_img' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_url',
        'priority' => 14,
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'call_action_img', array(
        'label' => esc_html__('Image', 'daddy-plus') ,
        'section' => 'call_action_section_set',
    )));

    /*=========================================
    Background
    =========================================*/
    $wp_customize->add_setting('call_action_bg', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text',
        'priority' => 15,
    ));

    $wp_customize->add_control('call_action_bg', array(
        'type' => 'hidden',
        'label' => __('Background', 'daddy-plus') ,
        'section' => 'call_action_section_set',
    ));

    // Image //
    $wp_customize->add_setting('call_action_bg_img', array(
        'default' => daddy_plus_flixita_get_default_option( 'call_action_bg_img' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_url',
        'priority' => 14,
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'call_action_bg_img', array(
        'label' => esc_html__('Image', 'daddy-plus') ,
        'section' => 'call_action_section_set',
    )));
	
	// Blog Header Section //
    $wp_customize->add_setting('blog_headings', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text',
        'priority' => 3,
    ));

    $wp_customize->add_control('blog_headings', array(
        'type' => 'hidden',
        'label' => __('Blog Settings', 'daddy-plus') ,
        'section' => 'blog_section_set',
    ));

	// hide/show
    $wp_customize->add_setting('enable_blog', array(
        'default' => daddy_plus_flixita_get_default_option( 'enable_blog' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_checkbox',
		 'priority' => 3,
    ));

    $wp_customize->add_control(new Flixita_Customize_Toggle_Control($wp_customize, 'enable_blog', array(
        'label' => __('Enable / Disable ?', 'daddy-plus') ,
        'section' => 'blog_section_set',
    )));
	
    // Blog Title //
    $wp_customize->add_setting('blog_ttl', array(
        'default' => daddy_plus_flixita_get_default_option( 'blog_ttl' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_html',
        'transport' => $selective_refresh,
        'priority' => 4,
    ));

    $wp_customize->add_control('blog_ttl', array(
        'label' => __('Title', 'daddy-plus') ,
        'section' => 'blog_section_set',
        'type' => 'text',
    ));

    // Blog Subtitle //
    $wp_customize->add_setting('blog_subttl', array(
        'default' => daddy_plus_flixita_get_default_option( 'blog_subttl' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_html',
        'transport' => $selective_refresh,
        'priority' => 5,
    ));

    $wp_customize->add_control('blog_subttl', array(
        'label' => __('Subtitle', 'daddy-plus') ,
        'section' => 'blog_section_set',
        'type' => 'textarea',
    ));

    // Blog Description //
    $wp_customize->add_setting('blog_desc', array(
        'default' => daddy_plus_flixita_get_default_option( 'blog_desc' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_html',
        'transport' => $selective_refresh,
        'priority' => 6,
    ));

    $wp_customize->add_control('blog_desc', array(
        'label' => __('Description', 'daddy-plus') ,
        'section' => 'blog_section_set',
        'type' => 'textarea',
    ));
	
    // Blog Category
    $wp_customize->add_setting('blog_cat', array(
        'capability' => 'edit_theme_options',
        'priority' => 8,
    ));
    $wp_customize->add_control(new Flixita_Category_Dropdown_Custom_Control($wp_customize, 'blog_cat', array(
        'label' => __('Select category for Post', 'daddy-plus') ,
        'section' => 'blog_section_set',
    )));


    // blog_num
	$wp_customize->add_setting('blog_num', array(
		'default' => daddy_plus_flixita_get_default_option( 'blog_num' ),
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'flixita_sanitize_html',
		'priority' => 8,
	));
	$wp_customize->add_control('blog_num', array(
		'label' => __('No. of Post Show ?', 'daddy-plus') ,
		'section' => 'blog_section_set',
		'type' => 'number',
	));
}
add_action('customize_register', 'daddy_plus_flixita_customize_options');