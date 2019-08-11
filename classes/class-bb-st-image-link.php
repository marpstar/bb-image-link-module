<?php

/**
 * A class that handles loading custom modules and custom
 * fields if the builder is installed and activated.
 */
class FL_ST_Load_Modules {

	/**
	 * Initializes the class once all plugins have loaded.
	 */
	static public function init() {
		add_action( 'plugins_loaded', __CLASS__ . '::setup_hooks' );
	}

	/**
	 * Setup hooks if the builder is installed and activated.
	 */
	static public function setup_hooks() {
		if ( ! class_exists( 'FLBuilder' ) ) {
			return;
		}

		// Load custom modules.
		add_action( 'init', __CLASS__ . '::load_modules' );
	}

	/**
	 * Loads our custom modules.
	 */
	static public function load_modules() {
		require_once BB_ST_IMAGE_LINK_MODULE_DIR . 'modules/st-image-link/st-image-link.php';
	}
}

FL_ST_Load_Modules::init();