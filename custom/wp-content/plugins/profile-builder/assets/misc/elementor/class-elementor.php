<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

use Elementor\Controls_Manager;

class PB_Elementor {
    private static $_instance = null;
    public $locations = array(
        array(
            'element' => 'common',
            'action'  => '_section_style',
        ),
        array(
            'element' => 'section',
            'action'  => 'section_advanced',
        )
    );
    public $section_name = 'pb_section_visibility_settings';

	/**
	 * Register plugin action hooks and filters
	 */
	public function __construct() {
        // Add category
        add_action( 'elementor/elements/categories_registered', array( $this, 'add_category' ) );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', array( $this, 'register_widgets' ) );
	}

    /**
     *
     * Ensures only one instance of the class is loaded or can be loaded.
     *
     * @return PB_Elementor An instance of the class.
     */
    public static function instance() {
        if ( is_null( self::$_instance ) )
            self::$_instance = new self();

        return self::$_instance;
    }

	/**
	 * Include Widgets files
	 */
	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/class-widget-edit-profile.php' );
		require_once( __DIR__ . '/widgets/class-widget-login.php' );
		require_once( __DIR__ . '/widgets/class-widget-recover-password.php' );
		require_once( __DIR__ . '/widgets/class-widget-register.php' );
	}

	/**
	 * Register Widgets
	 */
	public function register_widgets() {
		$this->include_widgets_files();

		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new PB_Elementor_Edit_Profile_Widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new PB_Elementor_Login_Widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new PB_Elementor_Recover_Password_Widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new PB_Elementor_Register_Widget() );
	}

    public function add_category( $elements_manager ) {
        $elements_manager->add_category(
            'profile-builder',
            array(
                'title' => __( 'Profile Builder Forms', 'profile-builder' ),
                'icon'  => 'fa fa-plug',
            )
        );
    }
}

// Instantiate Plugin Class
PB_Elementor::instance();
