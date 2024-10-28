<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://showrav.com
 * @since      1.0.0
 *
 * @package    Nitropack_Footer_Remover
 * @subpackage Nitropack_Footer_Remover/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Nitropack_Footer_Remover
 * @subpackage Nitropack_Footer_Remover/includes
 * @author     Kh. Mahfuz <khmfuz@gmail.com>
 */
class Nitropack_Footer_Remover_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'nitropack-footer-remover',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
