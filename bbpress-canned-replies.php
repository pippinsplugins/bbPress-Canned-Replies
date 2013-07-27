<?php
/*
 * Plugin Name: bbPress - Canned Replies
 * Description: Allows you to create and quickly insert pre-defined responses in bbPress forum topics
 * Plugin URI: http://pippinsplugins.com/bbpress-canned-replies
 * Author: Pippin Williamson
 * Author URI: http://pippinsplugins.com
 * Version: 0.1
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class BBP_Canned_Replies {

	/**
	 * Initializes the plugin by setting localization, filters, and administration functions.
	 */
	public function __construct() {

		// load the plugin translation files
		add_action( 'init', array( $this, 'textdomain' ) );

		// register css files
		add_action( 'wp_enqueue_scripts', array( $this, 'styles' ) );

		// register js files
		add_action( 'wp_enqueue_scripts', array( $this, 'scripts' ) );

		// Add our front end markup
		add_action( 'bbp_theme_before_reply_form_content', array( $this, 'reply_form' ) );

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
	public function styles() {
		$css_path = plugin_dir_path( __FILE__ ) . 'css/front-end.css';
	    wp_enqueue_style( 'bbp_canned_replies_style', plugin_dir_url( __FILE__ ) . 'css/front-end.css', filemtime( $css_path ) );
	}


	/**
	 * Load the plugin's js files
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	public function scripts() {
		$script_path = plugin_dir_path( __FILE__ ) . 'js/canned-replies.js';
	    wp_enqueue_script( 'bbp_canned_replies_script', plugin_dir_url( __FILE__ ) . 'js/canned-replies.js', filemtime( $script_path ) );
	}

	public function reply_form() {
		echo '<div class="bbp-canned-replies-wrapper">';

		echo '</div>';
	}

} // end class

// instantiate our plugin's class
$GLOBALS['bbp_canned_replies'] = new BBP_Canned_Replies();
