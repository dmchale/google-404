<?php
/**
 * Plugin Name: 404 Widget for Google
 * Plugin URI: https://www.binarytemplar.com/google-404
 * Description: Adds a Google 404 widget to your 'page not found' template which you can customize.
 * Version: 2.1
 * Requires at least: 4.4
 * Requires PHP: 5.3
 * Author: Dave McHale
 * Author URI: https://www.binarytemplar.com/
 * License: GPL3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: google-404
 * Domain Path: /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// i18n
add_action( 'init', 'google_404_load_textdomain' );
if ( ! function_exists( 'google_404_load_textdomain' ) ) {
	function google_404_load_textdomain() {
		load_plugin_textdomain( 'google-404', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}
}

// Requirements check, to cleanly handle failure of WP/PHP version requirements
require_once( dirname( __FILE__ ) . '/classes/requirements-check.php' );

$google404_requirements_check = new Google_404_Requirements_Check( array(
	'title' => 'Custom 404 for Google',
	'wp'    => '4.4',
	'php'   => '5.3',
	'file'  => __FILE__,
) );

// Only load plugin if we pass minimum requirements
if ( $google404_requirements_check->passes() ) {

	require_once( plugin_dir_path( __FILE__ ) . 'classes/google-404.php' );

	/**
	 * Google 404
	 *
	 * Outputs the Google 404 widget styles and script.
	 *
	 * @since  1.0
	 */
	if ( ! function_exists( 'google404' ) ) {
		function google404() {
			echo Google404::google_output();
		}
	}

}

unset( $google404_requirements_check );