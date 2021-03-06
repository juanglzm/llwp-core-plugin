<?php
/**
 * Plugin Name: LLWP Core Plugin
 * Description: Plugin para escribir funcionalidades adicionales para mi sitio web.
 * Version:     1.0.0
 * Author:      LeccionesWP
 * Author URI:  https://leccioneswp.com
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * This plugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * This plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with This plugin. If not, see {URI to Plugin License}.
 *
 * @package LLWP Core Plugin
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Demo function
 *
 * Loads customs styles from assets folder.
 *
 * @return void
 */
function llwp_enqueues() {
	wp_enqueue_style(
		'mycp-styles',
		plugin_dir_url( __FILE__ ) . 'assets/css/custom-style.css',
		array(),
		'1.0.0',
		'all'
	);
}
add_action( 'wp_enqueue_scripts', 'llwp_enqueues' );
