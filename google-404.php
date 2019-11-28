<?php
/**
 * Plugin Name: Custom 404 for Google
 * Plugin URI: https://www.binarytemplar.com/google-404
 * Description: Adds a Google 404 widget to your 'page not found' template which you can customize.
 * Version: 2.1
 * Author: Dave McHale
 * Author URI: https://www.binarytemplar.com/
 * License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

class Google404 {

	/**
	 * Google Output
	 *
	 * Returns the Google 404 widget styles and script.
	 *
	 * @since  1.0.2
	 *
	 * @return  string  Style and script output.
	 */
	static function google_output() {
		return Google404::get_widget_styles() . Google404::get_widget_script();
	}

	/**
	 * Get Widget Styles
	 *
	 * @since  1.1
	 *
	 * @return  string  Widget styles.
	 */
	static function get_widget_styles() {
		$styles = '#goog-wm .other-things { }
			#goog-wm ul, #goog-wm ul li { list-style:none; display:block; padding:0px; margin:0px; }
			#goog-wm ul { margin:1em 0; }';
		return '<style type="text/css">' . apply_filters( 'google_404_styles', $styles ) . '</style>';
	}

	/**
	 * Get Widget Script
	 *
	 * @since  1.1
	 *
	 * @return  string  Widget JavaScript.
	 */
	static function get_widget_script() {
		return '<script type="text/javascript">
			var GOOG_FIXURL_LANG = \'' . Google404::get_language() . '\';
			var GOOG_FIXURL_SITE = \'' . home_url( '/' ) . '\';
			</script>
			<script type="text/javascript" src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>';
	}

	/**
	 * Get Language (code)
	 *
	 * @since  1.0.2
	 *
	 * @return  string  Language code.
	 */
	static function get_language() {
		$lang = 'en';
		$wp_lang = get_bloginfo( 'language' );
		if ( array_key_exists( $wp_lang, Google404::get_languages() ) ) {
			$lang = $wp_lang;
		}
		return apply_filters( 'google_404_language', $lang );
	}

	/**
	 * Get Languages
	 *
	 * @since  1.1
	 *
	 * @return  array  Array of language codes and names.
	 */
	static function get_languages() {
		return array(
			'ar'    => __( 'Arabic', 'google-404' ),
			'bg'    => __( 'Bulgarian', 'google-404' ),
			'ca'    => __( 'Catalan', 'google-404' ),
			'zh-CN' => __( 'Chinese (China)', 'google-404' ),
			'zh-TW' => __( 'Chinese (Taiwan)', 'google-404' ),
			'hr'    => __( 'Croatian', 'google-404' ),
			'cz'    => __( 'Czech', 'google-404' ),
			'da'    => __( 'Danish', 'google-404' ),
			'nl'    => __( 'Dutch', 'google-404' ),
			'en'    => __( 'English', 'google-404' ),
			'en-GB' => __( 'English (United Kingdom)', 'google-404' ),
			'fi'    => __( 'Finnish', 'google-404' ),
			'fr'    => __( 'French', 'google-404' ),
			'de'    => __( 'German', 'google-404' ),
			'el'    => __( 'Greek', 'google-404' ),
			'iw'    => __( 'Hebrew', 'google-404' ),
			'hi'    => __( 'Hindi', 'google-404' ),
			'hu'    => __( 'Hungarian', 'google-404' ),
			'in'    => __( 'Indonesian', 'google-404' ),
			'it'    => __( 'Italian', 'google-404' ),
			'ja'    => __( 'Japanese', 'google-404' ),
			'ko'    => __( 'Korean', 'google-404' ),
			'lv'    => __( 'Latvian', 'google-404' ),
			'lt'    => __( 'Lithuanian', 'google-404' ),
			'no'    => __( 'Norwegian', 'google-404' ),
			'pl'    => __( 'Polish', 'google-404' ),
			'pt-BR' => __( 'Portuguese (Brazil)', 'google-404' ),
			'pt-PT' => __( 'Portuguese (Portugal)', 'google-404' ),
			'ro'    => __( 'Romanian', 'google-404' ),
			'ru'    => __( 'Russian', 'google-404' ),
			'sr'    => __( 'Serbian', 'google-404' ),
			'sk'    => __( 'Slovak', 'google-404' ),
			'sl'    => __( 'Slovenian', 'google-404' ),
			'es'    => __( 'Spanish', 'google-404' ),
			'sv'    => __( 'Swedish', 'google-404' ),
			'fil'   => __( 'Tagalog', 'google-404' ),
			'th'    => __( 'Thai', 'google-404' ),
			'tr'    => __( 'Turkish', 'google-404' ),
			'uk'    => __( 'Ukrainian', 'google-404' ),
			'vi'    => __( 'Vietnamese', 'google-404' )
		);
	}

}

/**
 * Google 404
 *
 * Outputs the Google 404 widget styles and script.
 *
 * @since  1.0
 */
function google404() {
	echo Google404::google_output();
}
