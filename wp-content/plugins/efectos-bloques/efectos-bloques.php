<?php
/**
 * Plugin Name: Efectos bloques
 * Plugin URI:  
 * Description: Añadir css y js para lograr efectos y diseño en la web.
 * Version:     1.0.0
 * Author:      Manuel Muñoz
 * Author URI:  https://profiles.wordpress.org/manolomunoz/
 * Text Domain: efectos-bloques
 * Domain Path: /languages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package     WordPress
 * @author      Manuel Muñoz <mmr010496@gmail.com>
 * @copyright   2023
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 *
 * Prefix:      efbl
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

define( 'PLUGIN_EFBL_PATH', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_EFBL_VERSION', '1.0.0' );
define( 'PLUGIN_EFBL_URL', plugin_dir_url( __FILE__ ) );

add_action( 'wp_enqueue_scripts', 'efbl_load_files' );
/**
 * Load css and js files
 *
 * @return void
 */
function efbl_load_files() {
	wp_enqueue_style(
		'efbl-style',
		PLUGIN_EFBL_URL . '/css/style.css',
		array(),
		time()
	);
	wp_enqueue_script(
		'efbl-script',
		PLUGIN_EFBL_URL . '/js/script.js',
		array('jquery'),
		time(),
		true
	);
}

