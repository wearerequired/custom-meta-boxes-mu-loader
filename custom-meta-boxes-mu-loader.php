<?php
/**
 * Plugin Name: Custom Meta Boxes MU-Loader
 * Description: Loads Custom Meta Boxes as a must-use plugin.
 * Version:     1.1.0
 * Author:      required
 * Author URI:  https://required.com/
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * Copyright (c) 2017 required (email: info@required.ch)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @package Required\CustomMetaBoxesMuLoader
 */

$plugin_file = WP_PLUGIN_DIR . '/custom-meta-boxes/custom-meta-boxes.php';
if ( file_exists( $plugin_file ) ) {
	require_once $plugin_file;
}
unset( $plugin_file );

add_filter( 'all_plugins', function ( $plugins ) {
	unset( $plugins['custom-meta-boxes/custom-meta-boxes.php'] );
	return $plugins;
} );
