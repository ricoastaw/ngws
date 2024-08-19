<?php
function flixita_general_customize($wp_customize)
{
    $selective_refresh = isset($wp_customize->selective_refresh) ? 'postMessage' : 'refresh';
	
	/*=========================================
    Site Identity
    =========================================*/
    // Logo Size //
	$wp_customize->add_setting('logo_size', array(
        'default' => flixita_get_default_option( 'logo_size' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_html',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('logo_size', array(
        'label' => __('Logo Size', 'flixita') ,
        'section' => 'title_tagline',
        'type' => 'number',
    ));
         
    /*=========================================
    Header Navigation
    =========================================*/
    // Cart
    $wp_customize->add_setting('hdr_nav_cart', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text',
    ));

    $wp_customize->add_control('hdr_nav_cart', array(
        'type' => 'hidden',
        'label' => __('Cart', 'flixita') ,
        'section' => 'header_nav',
        'priority' => 2,
    ));

    // hide/show
    $wp_customize->add_setting('enable_cart', array(
        'default' => flixita_get_default_option( 'enable_cart' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Flixita_Customize_Toggle_Control($wp_customize, 'enable_cart', array(
        'label' => __('Enable / Disable ?', 'flixita') ,
        'section' => 'header_nav',
        'priority' => 2,

    )));

    // Search
    $wp_customize->add_setting('hdr_nav_search_head', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text',
    ));

    $wp_customize->add_control('hdr_nav_search_head', array(
        'type' => 'hidden',
        'label' => __('Search', 'flixita') ,
        'section' => 'header_nav',
        'priority' => 3,
    ));

    // hide/show
    $wp_customize->add_setting('enable_nav_search', array(
        'default' => flixita_get_default_option( 'enable_nav_search' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Flixita_Customize_Toggle_Control($wp_customize, 'enable_nav_search', array(
        'label' => __('Enable / Disable ?', 'flixita') ,
        'section' => 'header_nav',
        'priority' => 3,

    )));

    // Header Button
    $wp_customize->add_setting('abv_hdr_btn_head', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text',
    ));

    $wp_customize->add_control('abv_hdr_btn_head', array(
        'type' => 'hidden',
        'label' => __('Button', 'flixita') ,
        'section' => 'header_nav',
        'priority' => 18,
    ));

    $wp_customize->add_setting('enable_hdr_btn', array(
        'default' => flixita_get_default_option( 'enable_hdr_btn' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Flixita_Customize_Toggle_Control($wp_customize, 'enable_hdr_btn', array(
        'label' => __('Enable / Disable ?', 'flixita') ,
        'section' => 'header_nav',
        'priority' => 19,

    )));

    // Button Label //
    $wp_customize->add_setting('hdr_btn_label', array(
        'default' => flixita_get_default_option( 'hdr_btn_label' ),
        'sanitize_callback' => 'flixita_sanitize_html',
        'transport' => $selective_refresh,
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('hdr_btn_label', array(
        'label' => __('Label', 'flixita') ,
        'section' => 'header_nav',
        'type' => 'text',
        'priority' => 21,
    ));

    // Button URL //
    $wp_customize->add_setting('hdr_btn_link', array(
        'default' => flixita_get_default_option( 'hdr_btn_link' ),
        'sanitize_callback' => 'flixita_sanitize_url',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('hdr_btn_link', array(
        'label' => __('Link', 'flixita') ,
        'section' => 'header_nav',
        'type' => 'text',
        'priority' => 22,
    ));

    $wp_customize->add_setting('hdr_btn_target', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Flixita_Customize_Toggle_Control($wp_customize, 'hdr_btn_target', array(
        'label' => __('Open in New Tab ?', 'flixita') ,
        'section' => 'header_nav',
        'priority' => 23,

    )));

    /*=========================================
    Sticky Header
    =========================================*/
    // Heading
    $wp_customize->add_setting('sticky_head', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text'
    ));

    $wp_customize->add_control('sticky_head', array(
        'type' => 'hidden',
        'label' => __('Sticky Header', 'flixita') ,
        'section' => 'header_nav',
		 'priority' => 23,
    ));
    $wp_customize->add_setting('enable_hdr_sticky', array(
        'default' => flixita_get_default_option( 'enable_hdr_sticky' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Flixita_Customize_Toggle_Control($wp_customize, 'enable_hdr_sticky', array(
        'label' => __('Enable / Disable ?', 'flixita') ,
        'section' => 'header_nav',
		 'priority' => 24,

    )));
	
    
    /*=========================================
    Page Header
    =========================================*/
    // Heading
    $wp_customize->add_setting('header_image_set', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text',
    ));

    $wp_customize->add_control('header_image_set', array(
        'type' => 'hidden',
        'label' => __('Page Header', 'flixita') ,
        'section' => 'header_image',
        'priority' => 1,
    ));

    // Enable / Disable
    $wp_customize->add_setting('enable_page_header', array(
        'default' => flixita_get_default_option( 'enable_page_header' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Flixita_Customize_Toggle_Control($wp_customize, 'enable_page_header', array(
        'label' => __('Enable / Disable ?', 'flixita') ,
        'section' => 'header_image',
        'priority' => 2,

    )));

    // Image Opacity //
	$wp_customize->add_setting('page_header_img_opacity', array(
		'default' => flixita_get_default_option( 'page_header_img_opacity' ),
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'flixita_sanitize_html',
		'priority' => 11,
	));
	$wp_customize->add_control('page_header_img_opacity', array(
		'label' => __('Opacity', 'flixita') ,
		'section' => 'header_image',
		'type' => 'number',
	));

    $wp_customize->add_setting('page_header_bg_color', array(
        'default' => flixita_get_default_option( 'page_header_bg_color' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
        'priority' => 12,
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'page_header_bg_color', array(
        'label' => __('Overlay Color', 'flixita') ,
        'section' => 'header_image',
    )));

    /*=========================================
    Blog
    =========================================*/
    // Head //
    $wp_customize->add_setting('blog_general_head', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text',
        'priority' => 1,
    ));

    $wp_customize->add_control('blog_general_head', array(
        'type' => 'hidden',
        'label' => __('Blog/Archive/Single', 'flixita') ,
        'section' => 'blog_general',
    ));

    $wp_customize->add_setting('blog_archive_ordering', array(
        'default' => flixita_get_default_option( 'blog_archive_ordering' ),
        'sanitize_callback' => 'flixita_sanitize_sortable',
        'priority' => 2,
    ));

    $wp_customize->add_control(new Flixita_Control_Sortable($wp_customize, 'blog_archive_ordering', array(
        'label' => __('Drag & Drop post items to re-arrange the order and also hide and show items as per the need by clicking on the eye icon.', 'flixita') ,
        'section' => 'blog_general',
        'choices' => array(
            'title' => __('Title', 'flixita') ,
            'meta' => __('Meta', 'flixita') ,
            'content' => __('Content', 'flixita') ,
        ) ,
    )));
	
    /*=========================================
    Footer Copyright
    =========================================*/
    //  Head
    $wp_customize->add_setting('footer_copy_settings', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'flixita_sanitize_text',
        'priority' => 12,
    ));

    $wp_customize->add_control('footer_copy_settings', array(
        'type' => 'hidden',
        'label' => __('Footer  Copyright', 'flixita') ,
        'section' => 'footer_section',
    ));

    // Footer Copyright
    $wp_customize->add_setting('footer_copyright', array(
        'default' => flixita_get_default_option( 'footer_copyright' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_kses_post',
        'priority' => 16,
    ));

    $wp_customize->add_control('footer_copyright', array(
        'label' => __('Copyright', 'flixita') ,
        'section' => 'footer_section',
        'type' => 'textarea',
        'transport' => $selective_refresh,
    ));
}
add_action('customize_register', 'flixita_general_customize');