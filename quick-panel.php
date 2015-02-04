<?php
/**
 * Plugin Name: Quick Panel
 * Plugin URI: http://raison.co/woocommerce-category-collapse/
 * Description: Easily goto backend pages via shortcut key
 * Version: 1.0.0
 * Author: Raison
 * Author URI: http://raison.co
 * Requires at least: 4.0.0
 * Tested up to: 4.0.0
 *
 * Text Domain: quick-panel
 * Domain Path: /languages/
 *
 * @package Quick_Panel
 * @category Core
 * @author Raison
   @GitHub Plugin URI: https://github.com/raisonon/wordpress-quick-panel
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


// load collapser JS

function register_quick_panel_script() {

	wp_register_script('quick-panel', plugins_url( 'assets/js/quick_panel.js' , __FILE__ ), array('jquery'), true);
	wp_print_scripts('quick-panel');
}

add_action('admin_init', 'register_quick_panel_script');



// custom css 

/*
function quick_panel_css() {

	    wp_register_style('quickPanelcss', plugins_url( 'assets/css/quick_panel.css' , __FILE__ ));
		wp_enqueue_style( 'quickPanelcss');
}

add_action( 'wp_admin_enqueue_scripts', 'quick_panel_css', 30 );
*/


   add_action( 'admin_init', 'quick_panel_admin_init' );
   add_action( 'admin_print_styles', 'quick_panel_admin_styles' );


   function quick_panel_admin_init() {
       /* Register our stylesheet. */
       wp_register_style( 'quickPanelStylesheet', plugins_url('assets/css/quick_panel.css', __FILE__) );
   }
      
   
   function quick_panel_admin_styles() {
       /*
        * It will be called only on your plugin admin page, enqueue our stylesheet here
        */
       wp_enqueue_style( 'quickPanelStylesheet' );
   }
   

include_once('includes/init.php');

	
	


// add chosen

	function admin_enqueue_scripts() {
		$screen = get_current_screen();
		


		wp_enqueue_script(  'chosen', plugins_url('assets//chosen/chosen.jquery.min.js', __FILE__), array( 'jquery' ), '1.0' );
		wp_enqueue_style( 'chosen', plugins_url('assets//chosen/chosen.css', __FILE__) );
	}
	
	add_action( 'admin_enqueue_scripts', 'admin_enqueue_scripts' );

	
	
?>
