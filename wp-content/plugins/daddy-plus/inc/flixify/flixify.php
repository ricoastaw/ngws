<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * @package daddy-plus
 */

// Customizer Options.
require daddy_plus_plugin_dir . 'inc/flixita/theme-settings/flixita-customizer-options.php';
require daddy_plus_plugin_dir . 'inc/flixita/theme-settings/flixita-panels-and-sections.php';
require daddy_plus_plugin_dir . 'inc/flixita/theme-settings/flixita-selective-refresh-and-partial.php';
require daddy_plus_plugin_dir . 'inc/flixita/theme-settings/flixita-default-options.php';
require daddy_plus_plugin_dir . 'inc/flixify/frontpage/daddy-plus-main-header.php';
require daddy_plus_plugin_dir . 'inc/flixita/frontpage/daddy-plus-footer.php';

require daddy_plus_plugin_dir . 'inc/flixita/core.php';

// Frontpage Sections.
if ( ! function_exists( 'daddy_plus_flixita_frontpage_sections' ) ) :
	function daddy_plus_flixita_frontpage_sections() {
		require daddy_plus_plugin_dir . 'inc/flixita/frontpage/daddy-plus-index-slider.php';
		require daddy_plus_plugin_dir . 'inc/enovia/frontpage/daddy-plus-index-information.php';
		require daddy_plus_plugin_dir . 'inc/flixify/frontpage/daddy-plus-index-service.php';
		require daddy_plus_plugin_dir . 'inc/flixita/frontpage/daddy-plus-index-call-action.php';
		require daddy_plus_plugin_dir . 'inc/flixita/frontpage/daddy-plus-index-blog.php';
	}
	add_action( 'daddy_plus_flixita_frontpage', 'daddy_plus_flixita_frontpage_sections' );
endif;
