<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://showrav.com
 * @since             1.0.0
 * @package           Nitropack_Footer_Remover
 *
 * @wordpress-plugin
 * Plugin Name:       NitroPack Footer Remover
 * Plugin URI:        https://github.com/khmahfuzhasan/nitropack-footer-remover
 * Description:       This simple WordPress plugin allows you to effortlessly hide the NitroPack footer and remove the NitroPack footer badge from your website. Enhance your site's appearance without any hassle!
 * Version:           1.0.0
 * Author:            Kh. Mahfuz
 * Author URI:        https://showrav.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       nitropack-footer-remover
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'NITROPACK_FOOTER_REMOVER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-nitropack-footer-remover-activator.php
 */
function activate_nitropack_footer_remover() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-nitropack-footer-remover-activator.php';
	Nitropack_Footer_Remover_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-nitropack-footer-remover-deactivator.php
 */
function deactivate_nitropack_footer_remover() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-nitropack-footer-remover-deactivator.php';
	Nitropack_Footer_Remover_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_nitropack_footer_remover' );
register_deactivation_hook( __FILE__, 'deactivate_nitropack_footer_remover' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-nitropack-footer-remover.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_nitropack_footer_remover() {

	$plugin = new Nitropack_Footer_Remover();
	$plugin->run();

}
run_nitropack_footer_remover();
