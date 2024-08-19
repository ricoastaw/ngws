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