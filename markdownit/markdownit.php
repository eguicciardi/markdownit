<?php

/**
 * Plugin bootstrap file
 * 
 * @link              https://guicciardi.net
 * @since             0.0.1
 * @package           MarkDownIt
 *
 * @wordpress-plugin
 * Plugin Name:       MarkDownIt
 * Plugin URI:        https://guicciardi.net/markdownit
 * Description:       Convert your posts in markdown format for fun and profit
 * Version:           0.0.1
 * Author:            Emanuele Guicciardi
 * Author URI:        https://guicciardi.net
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       markdownit
 * Domain Path:       /languages
 */

// If this script is called directly just shut it down
if(!defined('WPINC')) {
    
    die;

}

define('MARKDOWNIT_VERSION', '0.0.1');