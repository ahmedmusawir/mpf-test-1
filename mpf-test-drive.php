<?php 

/**
 *
 * Plugin Name: MPF Test Drive 1
 * Plugin URI:	https://htmlfivedev.com 
 * Description: Display a short notice above the post content.
 * Version: 	1.0
 * Author URI: 	https://www.linkedin.com/in/ahmedmusawir
 * License: 	GPL-2.0+ 
 *
 */

//If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die("Cannot Access Directly");
}

// echo plugin_dir_path( __FILE__ );
// echo plugins_url( '/assets/js/admin.js', __FILE__ );
// die;

require_once( plugin_dir_path( __FILE__ ) . 'class-mpf-test-drive.php' );
require_once( plugin_dir_path( __FILE__ ) . 'class-mpf-filter-test.php' );
require_once( plugin_dir_path( __FILE__ ) . 'class-mpf-content-widget.php' );
require_once( plugin_dir_path( __FILE__ ) . 'class-enqueue.php' );

function moose_post_notice_start() {

	remove_filter( 'excerpt_more', 'twentysixteen_excerpt_more', 10 );


	$set_scripts = new Enqueue();
	$set_scripts->initialize();

	$mpf_hook_test = new MPFTest();

	$mpf_filter_test = new MPFFilterTest();

	$mpf_content_widget = new MPFContentWidget();
	$mpf_content_widget->setup_widget();

}

moose_post_notice_start();

// Activation
require_once plugin_dir_path( __FILE__ ) . 'inc/Base/class-activate.php';
register_activation_hook( __FILE__, array( 'MooseActivate', 'activate' ) );

// Activation
require_once plugin_dir_path( __FILE__ ) . 'inc/Base/class-deactivate.php';
register_activation_hook( __FILE__, array( 'MooseDeactivate', 'deactivate' ) );