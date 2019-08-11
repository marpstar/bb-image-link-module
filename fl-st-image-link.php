<?php
/**
 * Plugin Name: Beaver Builder Image Link
 * Plugin URI: http://www.sandtoken.com/wordpress/beaver-builder-image-link-module
 * Description: An example plugin for creating custom builder modules.
 * Version: 2.0
 * Author: Sandtoken
 * Author URI: http://www.sandtoken.com
 */
define( 'BB_ST_IMAGE_LINK_MODULE_DIR', plugin_dir_path( __FILE__ ) );
define( 'BB_ST_IMAGE_LINK_MODULE_URL', plugins_url( '/', __FILE__ ) );

require_once BB_ST_IMAGE_LINK_MODULE_DIR . 'classes/class-bb-st-image-link.php';