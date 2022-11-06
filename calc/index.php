<?php
/**
 * Plugin Name: calculator Plugin
 */


 function foobar_func( $atts ){
ob_start();
 	include(plugin_dir_path(__FILE__).'main.php');
  return ob_get_clean();
 }
 add_shortcode( 'foobar', 'foobar_func' );



 function custom_map_func( $atts ){
ob_start();
 	include(plugin_dir_path(__FILE__).'map.php');
  return ob_get_clean();
 }
 add_shortcode( 'custom_map', 'custom_map_func' );


?>
