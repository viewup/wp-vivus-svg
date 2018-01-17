<?php
/**
 * @since             1.0.0
 * @package           Vsvg
 *
 * @wordpress-plugin
 * Plugin Name:       Vivus SVG Animation
 * Plugin URI:        https://github.com/viewup/wp-vivus-svg
 * Description:       Vivus SVG Animation for WordPress
 * Version:           1.0.0
 * Author:            Viewup
 * Author URI:        http://viewup.com.br/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       vsvg
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
define( 'VSVG_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-vsvg-activator.php
 */
function activate_vsvg() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vsvg-activator.php';
	Vsvg_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-vsvg-deactivator.php
 */
function deactivate_vsvg() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vsvg-deactivator.php';
	Vsvg_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_vsvg' );
register_deactivation_hook( __FILE__, 'deactivate_vsvg' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-vsvg.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_vsvg() {

	$plugin = new Vsvg();
	$plugin->run();

}

run_vsvg();
