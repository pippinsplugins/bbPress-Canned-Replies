<?php
/*
 * Plugin Name: bbPress - Canned Replies
 * Description: Allows you to create and quickly insert pre-defined responses in bbPress forum topics
 * Plugin URI: http://pippinsplugins.com/bbpress-canned-replies
 * Author: Pippin Williamson
 * Author URI: http://pippinsplugins.com
 * Version: 0.1
 */

class BBP_Canned_Replies {
	/*--------------------------------------------*
	 * Constructor
	 *--------------------------------------------*/

	/**
	 * Initializes the plugin by setting localization, filters, and administration functions.
	 */
	function __construct() {

		// load the plugin translation files
		add_action( 'init', array( $this, 'textdomain' ) );

		// register css files
		add_action( 'wp_enqueue_scripts', array( $this, 'register_plugin_styles' ) );

	} // end constructor


	/**
	 * Load the plugin's text domain
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	public function textdomain() {
		load_plugin_textdomain( 'bbp-canned-replies', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}

	/**
	 * Load the plugin's CSS files
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	public function register_plugin_styles() {
		$css_path = plugin_dir_path( __FILE__ ) . 'css/frond-end.css';
	    wp_enqueue_style( 'bbp_canned_replies_style', plugin_dir_url( __FILE__ ) . 'css/frond-end.css', filemtime( $css_path ) );
	}

} // end class

// instantiate our plugin's class
$GLOBALS['bbp_canned_replies'] = new BBP_Canned_Replies();
