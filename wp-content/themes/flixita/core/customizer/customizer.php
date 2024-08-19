<?php
/**
 * Flixita Theme Customizer.
 *
 * @package Flixita
 */

function flixita_customizer_register($wp_customize)
    {

	$wp_customize->get_setting('blogname')->transport = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
	$wp_customize->get_setting('background_color')->transport = 'postMessage';
	$wp_customize->get_setting('custom_logo')->transport = 'refresh';

	/**
	 * Register controls
	 */
	$wp_customize->register_control_type('Flixita_Control_Sortable');
	$wp_customize->register_control_type('Flixita_Customize_Toggle_Control');

	// Control
	require FLIXITA_THEME_CONTROL_DIR . '/customize-plugin-control.php';
	require FLIXITA_THEME_CONTROL_DIR . '/customize-base-control.php';
	require FLIXITA_THEME_CONTROL_DIR . '/customize-control-sortable.php';
	require FLIXITA_THEME_CONTROL_DIR . '/customize-category-control.php';
	require FLIXITA_THEME_CONTROL_DIR . '/customize-toggle-control.php';
	if ( class_exists( 'WooCommerce' ) ) {
		require FLIXITA_THEME_CONTROL_DIR . '/customize-product-control.php';
	} 
	
	// Sainitization
	require FLIXITA_THEME_CORE_DIR . '/customizer/flixita-customize-sanitization.php';
}
add_action('customize_register','flixita_customizer_register');


function flixita_customizer_script()
{
	wp_enqueue_script('flixita-customizer-section', FLIXITA_THEME_CORE_URI . '/customizer/assets/js/customizer-section.js', array(
		"jquery"
	) , '', true);
}
add_action('customize_controls_enqueue_scripts','flixita_customizer_script');


// customizer settings.
function flixita_customizer_settings()
{

	$settings = array(
		'panels-and-sections',
		'selective-refresh-and-partial',
		'general',
	);

	foreach ($settings as $setting)
	{
		$feature_file = get_theme_file_path('/core/customizer/flixita-' . $setting . '.php');
		require $feature_file;
	}
	require FLIXITA_THEME_CONTROL_DIR . '/customize-upgrade-control.php';
}
add_action('after_setup_theme','flixita_customizer_settings');


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function flixita_customize_preview_js()
{
	wp_enqueue_script('flixita-customizer-preview', FLIXITA_THEME_CORE_URI . '/customizer/assets/js/customizer.js', array(
		'customize-preview'
	) , '20151215', true);
}
add_action('customize_preview_init','flixita_customize_preview_js');





add_action( 'customize_register', 'flixita_recommended_plugin_section' );

//recommended plugin section function.
function flixita_recommended_plugin_section( $manager ) {
	// Register custom section types.
	$manager->register_section_type( 'flixita_Customize_Recommended_Plugin_Section' );
}


/*
 *  Customizer Notifications
 */

require get_template_directory() . '/core/customizer/customizer-notice/flixita-customizer-notify.php';

$flixita_config_customizer = array(
	'recommended_plugins'                      => array(
		'daddy-plus' => array(
			'recommended' => true,
			'description' => sprintf(
				/* translators: %s: plugin name */
				esc_html__( 'Recommended Plugin: If you want to show all the features and business sections of the FrontPage. please install and activate %s plugin', 'flixita' ),
				'<strong>Daddy Plus</strong>'
			),
		),
	),
	'recommended_actions'                      => array(),
	'recommended_actions_title'                => esc_html__( 'Recommended Actions', 'flixita' ),
	'recommended_plugins_title'                => esc_html__( 'Add More Features', 'flixita' ),
	'install_button_label'                     => esc_html__( 'Install and Activate', 'flixita' ),
	'activate_button_label'                    => esc_html__( 'Activate', 'flixita' ),
	'flixita_deactivate_button_label' => esc_html__( 'Deactivate', 'flixita' ),
);
flixita_Customizer_Notify::init( apply_filters( 'flixita_customizer_notify_array', $flixita_config_customizer ) );
