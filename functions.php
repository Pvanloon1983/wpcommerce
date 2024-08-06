<?php
/**
 * WP Commerce functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP Commerce
 */
function version($live){
  if ($live) {
    return '1.0';   
  } else {
    return time();
  }
}
function wp_commerce_scripts(){

  $live_version = false;

  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.6.2', true );

  wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.6.2', 'all' );

  wp_enqueue_style( 'wp-commerce-style', get_stylesheet_uri(), array(), version($live_version), 'all' );

}
add_action( 'wp_enqueue_scripts', 'wp_commerce_scripts' );

function wp_commerce_config(){

  register_nav_menus(
    array(
      'wp_commerce_main_menu' => 'Main Menu',
      'wp_commerce_footer_menu' => 'Footer Menu'
    )
  );

}
add_action( 'after_setup_theme', 'wp_commerce_config', 0 );