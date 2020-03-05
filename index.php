<?php 
/*
Plugin Name: ALT Lab Fit Videos to Fullwidth
Plugin URI:  https://github.com/
Description: Javascript to wrap videos fullwidth
Version:     1.0
Author:      ALT Lab
Author URI:  http://altlab.vcu.edu
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: my-toolset

*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


add_action('wp_enqueue_scripts', 'video_fullwidth_load_scripts');

function video_fullwidth_load_scripts() {                           
    $deps = array('jquery');
    $version= '1.1'; 
    $in_footer = true;    
    wp_enqueue_script('video-fullwidth-main-js', plugin_dir_url( __FILE__) . 'js/video-fullwidth-main.js', $deps, $version, $in_footer); 
   //  wp_enqueue_style( 'prefix-main-css', plugin_dir_url( __FILE__) . 'css/prefix-main.css');
}


//LOGGER -- like frogger but more useful

if ( ! function_exists('write_log')) {
   function write_log ( $log )  {
      if ( is_array( $log ) || is_object( $log ) ) {
         error_log( print_r( $log, true ) );
      } else {
         error_log( $log );
      }
   }
}

  //print("<pre>".print_r($a,true)."</pre>");
