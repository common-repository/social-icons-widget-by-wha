<?php
/**
 * Plugin Name: Social Icons Widget by WHA
 * Description: Social Icons Widget to displays links to social sharing websites.
 * Author: WHA
 * Author URI: https://webhelpagency.com/
 * Version: 1.0.0
 * License: GPLv2 or later
 * Text Domain: wha-social-icons-widget
 * Domain Path: /languages
 */

require_once plugin_dir_path( __FILE__ ) . 'class.wha-social-icons-widget.php';


/**
* Load textdomain
 */
function Wha_Social_Icons_Widget_load_textdomain() {
    load_plugin_textdomain( 'wha-social-icons-widget', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'init', 'Wha_Social_Icons_Widget_load_textdomain' );

/**
* Register the widget
 */
add_action( 'widgets_init', 'Wha_Social_Icons_Widget_register' );
function Wha_Social_Icons_Widget_register() {
	register_widget( 'Wha_Social_Icons_Widget' );
}