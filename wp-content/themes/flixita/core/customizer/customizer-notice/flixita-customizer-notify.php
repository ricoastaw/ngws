<?php

class flixita_Customizer_Notify {

	private $recommended_actions;


	private $recommended_plugins;


	private static $instance;


	private $recommended_actions_title;


	private $recommended_plugins_title;


	private $dismiss_button;


	private $install_button_label;


	private $activate_button_label;


	private $flixita_deactivate_button_label;

	private $config;

	public static function init( $config ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof flixita_Customizer_Notify ) ) {
			self::$instance = new flixita_Customizer_Notify();
			if ( ! empty( $config ) && is_array( $config ) ) {
				self::$instance->config = $config;
				self::$instance->setup_config();
				self::$instance->setup_actions();
			}
		}

	}


	public function setup_config() {

		global $flixita_customizer_notify_recommended_plugins;
		global $flixita_customizer_notify_recommended_actions;

		global $install_button_label;
		global $activate_button_label;
		global $flixita_deactivate_button_label;

		$this->recommended_actions = isset( $this->config['recommended_actions'] ) ? $this->config['recommended_actions'] : array();
		$this->recommended_plugins = isset( $this->config['recommended_plugins'] ) ? $this->config['recommended_plugins'] : array();

		$this->recommended_actions_title = isset( $this->config['recommended_actions_title'] ) ? $this->config['recommended_actions_title'] : '';
		$this->recommended_plugins_title = isset( $this->config['recommended_plugins_title'] ) ? $this->config['recommended_plugins_title'] : '';
		$this->dismiss_button            = isset( $this->config['dismiss_button'] ) ? $this->config['dismiss_button'] : '';

		$flixita_customizer_notify_recommended_plugins = array();
		$flixita_customizer_notify_recommended_actions = array();

		if ( isset( $this->recommended_plugins ) ) {
			$flixita_customizer_notify_recommended_plugins = $this->recommended_plugins;
		}

		if ( isset( $this->recommended_actions ) ) {
			$flixita_customizer_notify_recommended_actions = $this->recommended_actions;
		}

		$install_button_label            = isset( $this->config['install_button_label'] ) ? $this->config['install_button_label'] : '';
		$activate_button_label           = isset( $this->config['activate_button_label'] ) ? $this->config['activate_button_label'] : '';
		$flixita_deactivate_button_label = isset( $this->config['flixita_deactivate_button_label'] ) ? $this->config['flixita_deactivate_button_label'] : '';

	}


	public function setup_actions() {

		// Register the section.
		add_action( 'customize_register', array( $this, 'flixita_plugin_notification_customize_register' ) );

		// Enqueue scripts and styles.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'flixita_customizer_notify_scripts_for_customizer' ), 0 );

		/* ajax callback for dismissable recommended actions */
		add_action( 'wp_ajax_quality_customizer_notify_dismiss_action', array( $this, 'flixita_customizer_notify_dismiss_recommended_action_callback' ) );

		add_action( 'wp_ajax_ti_customizer_notify_dismiss_recommended_plugins', array( $this, 'flixita_customizer_notify_dismiss_recommended_plugins_callback' ) );

	}


	public function flixita_customizer_notify_scripts_for_customizer() {

		wp_enqueue_style( 'flixita-customizer-notify-css', get_template_directory_uri() . '/core/customizer/customizer-notice/css/flixita-customizer-notify.css', array() );

		wp_enqueue_style( 'plugin-install' );
		wp_enqueue_script( 'plugin-install' );
		wp_add_inline_script( 'plugin-install', 'var pagenow = "customizer";' );

		wp_enqueue_script( 'updates' );

		wp_enqueue_script( 'flixita-customizer-notify-js', get_template_directory_uri() . '/core/customizer/customizer-notice/js/flixita-customizer-notify.js', array( 'customize-controls' ) );
		wp_localize_script(
			'flixita-customizer-notify-js',
			'flixitaCustomizercompanionObject',
			array(
				'ajaxurl'            => admin_url( 'admin-ajax.php' ),
				'template_directory' => get_template_directory_uri(),
				'base_path'          => admin_url(),
				'activating_string'  => __( 'Activating', 'flixita' ),
			)
		);

	}


	public function flixita_plugin_notification_customize_register( $wp_customize ) {

		require_once get_template_directory() . '/core/customizer/customizer-notice/flixita-customizer-notify-section.php';

		$wp_customize->register_section_type( 'flixita_Customizer_Notify_Section' );

		$wp_customize->add_section(
			new flixita_Customizer_Notify_Section(
				$wp_customize,
				'flixita-customizer-notify-section',
				array(
					'title'          => $this->recommended_actions_title,
					'plugin_text'    => $this->recommended_plugins_title,
					'dismiss_button' => $this->dismiss_button,
					'priority'       => 0,
				)
			)
		);

	}


	public function flixita_customizer_notify_dismiss_recommended_action_callback() {

		global $flixita_customizer_notify_recommended_actions;

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo $action_id;

		if ( ! empty( $action_id ) ) {

			if ( get_option( 'flixita_customizer_notify_show' ) ) {

				$flixita_customizer_notify_show_recommended_actions = get_option( 'flixita_customizer_notify_show' );
				switch ( $_GET['todo'] ) {
					case 'add':
						$flixita_customizer_notify_show_recommended_actions[ $action_id ] = true;
						break;
					case 'dismiss':
						$flixita_customizer_notify_show_recommended_actions[ $action_id ] = false;
						break;
				}
				update_option( 'flixita_customizer_notify_show', $flixita_customizer_notify_show_recommended_actions );

			} else {
				$flixita_customizer_notify_show_recommended_actions = array();
				if ( ! empty( $flixita_customizer_notify_recommended_actions ) ) {
					foreach ( $flixita_customizer_notify_recommended_actions as $flixita_lite_customizer_notify_recommended_action ) {
						if ( $flixita_lite_customizer_notify_recommended_action['id'] == $action_id ) {
							$flixita_customizer_notify_show_recommended_actions[ $flixita_lite_customizer_notify_recommended_action['id'] ] = false;
						} else {
							$flixita_customizer_notify_show_recommended_actions[ $flixita_lite_customizer_notify_recommended_action['id'] ] = true;
						}
					}
					update_option( 'flixita_customizer_notify_show', $flixita_customizer_notify_show_recommended_actions );
				}
			}
		}
		die();
	}


	public function flixita_customizer_notify_dismiss_recommended_plugins_callback() {

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo $action_id;

		if ( ! empty( $action_id ) ) {

			$flixita_lite_customizer_notify_show_recommended_plugins = get_option( 'flixita_customizer_notify_show_recommended_plugins' );

			switch ( $_GET['todo'] ) {
				case 'add':
					$flixita_lite_customizer_notify_show_recommended_plugins[ $action_id ] = false;
					break;
				case 'dismiss':
					$flixita_lite_customizer_notify_show_recommended_plugins[ $action_id ] = true;
					break;
			}
			update_option( 'flixita_customizer_notify_show_recommended_plugins', $flixita_lite_customizer_notify_show_recommended_plugins );
		}
		die();
	}

}
