<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://helloeveryone.me/
 * @since             1.0.0
 * @package           Hide_Rest_Api
 *
 * @wordpress-plugin
 * Plugin Name:       Hide REST API
 * Plugin URI:        https://github.com/nach94/hide-rest-api
 * Description:       This plugin allows you hide all or partial WordPress REST API.
 * Version:           1.0.0
 * Author:            HelloEveryone
 * Author URI:        https://helloeveryone.me//
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hide-rest-api
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
define( 'HIDE_REST_API_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hide-rest-api-activator.php
 */
function activate_hide_rest_api() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hide-rest-api-activator.php';
	Hide_Rest_Api_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hide-rest-api-deactivator.php
 */
function deactivate_hide_rest_api() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hide-rest-api-deactivator.php';
	Hide_Rest_Api_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hide_rest_api' );
register_deactivation_hook( __FILE__, 'deactivate_hide_rest_api' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hide-rest-api.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-hide-rest-api-functions.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_hide_rest_api() {

	$plugin = new Hide_Rest_Api();
	$plugin->run();

}
run_hide_rest_api();
