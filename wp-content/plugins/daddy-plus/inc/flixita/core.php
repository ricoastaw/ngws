<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if (!function_exists('daddy_plus_flixita_dynamic_style')):
    function daddy_plus_flixita_dynamic_style()
    {
        $output_style = '';

        // Slider Style
        $slider_opacity = get_theme_mod('slider_opacity', daddy_plus_flixita_get_default_option( 'slider_opacity' ));
        $slider_overlay_clr = get_theme_mod('slider_overlay_clr', daddy_plus_flixita_get_default_option( 'slider_overlay_clr' ));
        list($br, $bg, $bb) = sscanf($slider_overlay_clr, "#%02x%02x%02x");
        $output_style .= ".main-slider {
					    background: rgba($br, $bg, $bb, " . esc_attr($slider_opacity) . ");
				}\n";
       
        // Call Action
        $call_action_bg_img = get_theme_mod('call_action_bg_img', daddy_plus_flixita_get_default_option( 'call_action_bg_img' ));
        $output_style .= ".flixita-call-action-section {
								background-image: url(" . esc_url($call_action_bg_img) . ");
							}\n";

        wp_add_inline_style('flixita-style', $output_style);
    }
endif;
add_action('wp_enqueue_scripts', 'daddy_plus_flixita_dynamic_style');

/*
 *
 * Social Icon
*/
function daddy_plus_flixita_get_social_icon_default()
{
	return apply_filters('daddy_plus_flixita_get_social_icon_default', json_encode(array(
		array(
			'icon_value' => esc_html__('fa-facebook', 'daddy-plus') ,
			'link' => esc_html__('#', 'daddy-plus') ,
			'id' => 'customizer_repeater_header_social_001',
		) ,
		array(
			'icon_value' => esc_html__('fa-twitter', 'daddy-plus') ,
			'link' => esc_html__('#', 'daddy-plus') ,
			'id' => 'customizer_repeater_header_social_003',
		) ,
		array(
			'icon_value' => esc_html__('fa-instagram', 'daddy-plus') ,
			'link' => esc_html__('#', 'daddy-plus') ,
			'id' => 'customizer_repeater_header_social_004',
		) ,
		array(
			'icon_value' => esc_html__('fa-pinterest', 'daddy-plus') ,
			'link' => esc_html__('#', 'daddy-plus') ,
			'id' => 'customizer_repeater_header_social_005',
		)
	)));
}

/*
 *
 * Slider Default
*/
function daddy_plus_flixita_get_slider_default()
{
	return apply_filters('daddy_plus_flixita_get_slider_default', json_encode(array(
		array(
			'image_url' => esc_url(daddy_plus_plugin_url . '/inc/flixita/images/slider/slider01.jpg'),
			'title' => esc_html__('Welcome To Our Flixita', 'daddy-plus') ,
			'subtitle' => esc_html__('The Right Candidate For Your', 'daddy-plus') ,
			'subtitle2' => esc_html__('Business', 'daddy-plus') ,
			'text' => esc_html__('We are experienced professionals who care about your success.', 'daddy-plus') ,
			'text2' => esc_html__('Learn More', 'daddy-plus') ,
			'link' => esc_html__('#', 'daddy-plus') ,
			'align' => 'left',
			'id' => 'customizer_repeater_slider_001',
		) ,
		array(
			'image_url' => esc_url(daddy_plus_plugin_url . '/inc/flixita/images/slider/slider02.jpg'),
			'title' => esc_html__('Best Service Provide', 'daddy-plus') ,
			'subtitle' => esc_html__('Fastest Way To Gain Business', 'daddy-plus') ,
			'subtitle2' => esc_html__('Success', 'daddy-plus') ,
			'text' => esc_html__('We are experienced professionals who care about your success.', 'daddy-plus') ,
			'text2' => esc_html__('Learn More', 'daddy-plus') ,
			'link' => esc_html__('#', 'daddy-plus') ,
			'align' => 'center',
			'id' => 'customizer_repeater_slider_002',
		) ,
		array(
			'image_url' => esc_url(daddy_plus_plugin_url . '/inc/flixita/images/slider/slider03.jpg'),
			'title' => esc_html__('Business Make Easy', 'daddy-plus') ,
			'subtitle' => esc_html__('We Serve the Best', 'daddy-plus') ,
			'subtitle2' => esc_html__('Work', 'daddy-plus') ,
			'text' => esc_html__('We are experienced professionals who care about your success.', 'daddy-plus') ,
			'text2' => esc_html__('Learn More', 'daddy-plus') ,
			'link' => esc_html__('#', 'daddy-plus') ,
			'button_second' => esc_html__('Contact Us', 'daddy-plus') ,
			'link2' => esc_html__('#', 'daddy-plus') ,
			'align' => 'right',
			'id' => 'customizer_repeater_slider_003',
		) ,
	)));
}


/*
 *
 * Slider Right Default
*/
function daddy_plus_flixita_get_slider__right_default()
{
	return apply_filters('daddy_plus_flixita_get_slider__right_default', json_encode(array(
		array(
			'image_url' => esc_url(daddy_plus_plugin_url . '/inc/flixicart/images/slide-right01.jpg'),
			'title' => esc_html__('Save up to', 'daddy-plus') ,
			'subtitle' => esc_html__('40% off', 'daddy-plus') ,
			'text' => esc_html__('Mobile<br>Collection', 'daddy-plus') ,
			'text2' => esc_html__('Shop Now', 'daddy-plus') ,
			'link' => esc_html__('#', 'daddy-plus') ,
			'id' => 'customizer_repeater_slider_right_001'
		) ,
		array(
			'image_url' => esc_url(daddy_plus_plugin_url . '/inc/flixicart/images/slide-right02.jpg'),
			'title' => esc_html__('Save up to', 'daddy-plus') ,
			'subtitle' => esc_html__('60% off', 'daddy-plus') ,
			'text' => esc_html__('Apple<br>Watch', 'daddy-plus') ,
			'text2' => esc_html__('Shop Now', 'daddy-plus') ,
			'link' => esc_html__('#', 'daddy-plus') ,
			'id' => 'customizer_repeater_slider_right_002'
		)
	)));
}

/*
 *
 * Info Section
*/
function daddy_plus_flixita_info_default()
{
	return apply_filters('daddy_plus_flixita_info_default', json_encode(array(
		array(
			'image_url' => esc_url(daddy_plus_plugin_url . '/inc/flixita/images/service/service01.jpg'),
			'icon_value' => 'fa-user',
			'title' => esc_html__('Expert Work', 'daddy-plus') ,
			'text' => esc_html__('There are many variations words pulvinar dapibus passages.', 'daddy-plus') ,
			'text2' => esc_html__('Read More', 'daddy-plus') ,
			'link' => '#',
			'id' => 'customizer_repeater_info_001'
		) ,
		array(
			'image_url' => esc_url(daddy_plus_plugin_url . '/inc/flixita/images/service/service02.jpg'),
			'icon_value' => 'fa-signal',
			'title' => esc_html__('Networking', 'daddy-plus') ,
			'text' => esc_html__('There are many variations words pulvinar dapibus passages.', 'daddy-plus') ,
			'text2' => esc_html__('Read More', 'daddy-plus') ,
			'link' => '#',
			'id' => 'customizer_repeater_info_002'
		) ,
		array(
			'image_url' => esc_url(daddy_plus_plugin_url . '/inc/flixita/images/service/service03.jpg'),
			'icon_value' => 'fa-pencil-square',
			'title' => esc_html__('Creative Design', 'daddy-plus') ,
			'text' => esc_html__('There are many variations words pulvinar dapibus passages.', 'daddy-plus') ,
			'text2' => esc_html__('Read More', 'daddy-plus') ,
			'link' => '#',
			'id' => 'customizer_repeater_info_003'
		) ,
		array(
			'image_url' => esc_url(daddy_plus_plugin_url . '/inc/flixita/images/service/service04.jpg'),
			'icon_value' => 'fa-mobile-phone',
			'title' => esc_html__('Mobility', 'daddy-plus') ,
			'text' => esc_html__('There are many variations words pulvinar dapibus passages.', 'daddy-plus') ,
			'text2' => esc_html__('Read More', 'daddy-plus') ,
			'link' => '#',
			'id' => 'customizer_repeater_info_004'
		) ,
	)));
}

/*
 *
 * Info Section
*/
function daddy_plus_flixita_info2_default()
{
	return apply_filters('daddy_plus_flixita_info2_default', json_encode(array(
		array(
			'image_url' => esc_url(daddy_plus_plugin_url . '/inc/flixita/images/service/service01.jpg'),
			'icon_value' => 'fa-user',
			'title' => esc_html__('Expert Work', 'daddy-plus') ,
			'text' => esc_html__('There are many variations words pulvinar dapibus passages.', 'daddy-plus') ,
			'text2' => esc_html__('Read More', 'daddy-plus') ,
			'link' => '#',
			'id' => 'customizer_repeater_info_001'
		) ,
		array(
			'image_url' => esc_url(daddy_plus_plugin_url . '/inc/flixita/images/service/service02.jpg'),
			'icon_value' => 'fa-signal',
			'title' => esc_html__('Networking', 'daddy-plus') ,
			'text' => esc_html__('There are many variations words pulvinar dapibus passages.', 'daddy-plus') ,
			'text2' => esc_html__('Read More', 'daddy-plus') ,
			'link' => '#',
			'id' => 'customizer_repeater_info_002'
		) ,
		array(
			'image_url' => esc_url(daddy_plus_plugin_url . '/inc/flixita/images/service/service03.jpg'),
			'icon_value' => 'fa-pencil-square',
			'title' => esc_html__('Creative Design', 'daddy-plus') ,
			'text' => esc_html__('There are many variations words pulvinar dapibus passages.', 'daddy-plus') ,
			'text2' => esc_html__('Read More', 'daddy-plus') ,
			'link' => '#',
			'id' => 'customizer_repeater_info_003'
		)
	)));
}


/*
 *
 * Marquee Section
*/
function daddy_plus_flixita_marquee_default()
{
	return apply_filters('daddy_plus_flixita_marquee_default', json_encode(array(
		array(
			'icon_value' => 'fa-smile-o',
			'title' => esc_html__('Customer Services', 'daddy-plus') ,
			'id' => 'customizer_repeater_marquee_001'
		),
		array(
			'icon_value' => 'fa-lock',
			'title' => esc_html__('Cyber Security', 'daddy-plus') ,
			'id' => 'customizer_repeater_marquee_002'
		),
		array(
			'icon_value' => 'fa-cloud',
			'title' => esc_html__('Cloud Computing', 'daddy-plus') ,
			'id' => 'customizer_repeater_marquee_003'
		),
		array(
			'icon_value' => 'fa-life-bouy',
			'title' => esc_html__('IT Management', 'daddy-plus'),
			'id' => 'customizer_repeater_marquee_004'
		),
		array(
			'icon_value' => 'fa-pencil-square',
			'title' => esc_html__('Creative Design', 'daddy-plus'),
			'id' => 'customizer_repeater_marquee_005'
		)
	)));
}

/*
 *
 * Service Section
*/
$activate_theme_data = wp_get_theme(); // getting current theme data.
$activate_theme      = $activate_theme_data->name;
if ( 'Flixify' == $activate_theme || 'Flecto' == $activate_theme  || 'QuickBiz' == $activate_theme) {
	function daddy_plus_flixita_service_default()
	{
		return apply_filters('daddy_plus_flixita_service_default', json_encode(array(
			array(
				'icon_value' => 'fa-smile-o',
				'image_url' => esc_url(daddy_plus_plugin_url . '/inc/flixita/images/service/service01.jpg'),
				'title' => esc_html__('Customer Services', 'daddy-plus') ,
				'text' => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting', 'daddy-plus') ,
				'text2' => esc_html__('Read More', 'daddy-plus') ,
				'link' => '#',
				'id' => 'customizer_repeater_service_001'
			) ,
			array(
				'icon_value' => 'fa-lock',
				'image_url' => esc_url(daddy_plus_plugin_url . '/inc/flixita/images/service/service02.jpg'),
				'title' => esc_html__('Cyber Security', 'daddy-plus') ,
				'text' => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting', 'daddy-plus') ,
				'text2' => esc_html__('Read More', 'daddy-plus') ,
				'link' => '#',
				'id' => 'customizer_repeater_service_002'
			) ,
			array(
				'icon_value' => 'fa-cloud',
				'image_url' => esc_url(daddy_plus_plugin_url . '/inc/flixita/images/service/service03.jpg'),
				'title' => esc_html__('Cloud Computing', 'daddy-plus') ,
				'text' => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting', 'daddy-plus') ,
				'text2' => esc_html__('Read More', 'daddy-plus') ,
				'link' => '#',
				'id' => 'customizer_repeater_service_003'
			)
		)));
	}
}else{
	function daddy_plus_flixita_service_default()
	{
		return apply_filters('daddy_plus_flixita_service_default', json_encode(array(
			array(
				'icon_value' => 'fa-smile-o',
				'image_url' => esc_url(daddy_plus_plugin_url . '/inc/flixita/images/service/service01.jpg'),
				'title' => esc_html__('Customer Services', 'daddy-plus') ,
				'text' => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting', 'daddy-plus') ,
				'text2' => esc_html__('Read More', 'daddy-plus') ,
				'link' => '#',
				'id' => 'customizer_repeater_service_001'
			) ,
			array(
				'icon_value' => 'fa-lock',
				'image_url' => esc_url(daddy_plus_plugin_url . '/inc/flixita/images/service/service02.jpg'),
				'title' => esc_html__('Cyber Security', 'daddy-plus') ,
				'text' => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting', 'daddy-plus') ,
				'text2' => esc_html__('Read More', 'daddy-plus') ,
				'link' => '#',
				'id' => 'customizer_repeater_service_002'
			) ,
			array(
				'icon_value' => 'fa-cloud',
				'image_url' => esc_url(daddy_plus_plugin_url . '/inc/flixita/images/service/service03.jpg'),
				'title' => esc_html__('Cloud Computing', 'daddy-plus') ,
				'text' => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting', 'daddy-plus') ,
				'text2' => esc_html__('Read More', 'daddy-plus') ,
				'link' => '#',
				'id' => 'customizer_repeater_service_003'
			) ,
			array(
				'icon_value' => 'fa-life-bouy',
				'image_url' => esc_url(daddy_plus_plugin_url . '/inc/flixita/images/service/service04.jpg'),
				'title' => esc_html__('IT Management', 'daddy-plus') ,
				'text' => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting', 'daddy-plus') ,
				'text2' => esc_html__('Read More', 'daddy-plus') ,
				'link' => '#',
				'id' => 'customizer_repeater_service_004'
			) ,
		)));
	}
}
/*
 *
 * Footer Top Default
*/
function daddy_plus_flixita_footer_top_default()
{
	return apply_filters('daddy_plus_flixita_footer_top_default', json_encode(array(
		array(
			'icon_value' => 'fa-envelope',
			'title' => esc_html__('Email Us', 'daddy-plus') ,
			'subtitle' => esc_html__('info@example.com', 'daddy-plus') ,
			'link' => 'mailto:info@example.com',
			'id' => 'customizer_repeater_footer_top_001'
		) ,
		array(
			'icon_value' => 'fa-question',
			'title' => esc_html__('Have Questions?', 'daddy-plus') ,
			'subtitle' => esc_html__('Contact Us', 'daddy-plus') ,
			'id' => 'customizer_repeater_footer_top_002',
		) ,
		array(
			'icon_value' => 'fa-phone',
			'title' => esc_html__('Call Us', 'daddy-plus') ,
			'subtitle' => esc_html__('+123 456 7890', 'daddy-plus') ,
			'link' => 'tell:+123 456 7890',
			'id' => 'customizer_repeater_footer_top_003',
		) ,
		array(
			'icon_value' => 'fa-clock-o',
			'title' => esc_html__('Opening Hours', 'daddy-plus') ,
			'subtitle' => esc_html__('Mon-Sat: 10- 6 Pm', 'daddy-plus') ,
			'id' => 'customizer_repeater_footer_top_004',
		) ,
	)));
}