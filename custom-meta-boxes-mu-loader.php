<?php
/**
 * Plugin Name: Custom Meta Boxes MU-Loader
 * Description: Loads Custom Meta Boxes as a must-use plugin.
 * Version:     1.0.0
 * Author:      required
 * Author URI:  https://required.com/
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

$plugin_file = WP_PLUGIN_DIR . '/custom-meta-boxes/custom-meta-boxes.php';
if ( file_exists( $plugin_file ) ) {
	require_once $plugin_file;
}
unset( $plugin_file );