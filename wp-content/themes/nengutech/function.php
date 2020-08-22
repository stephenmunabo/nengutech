<?php 
/**
 * Nengu tech functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nengutech.com
 * @subpackage Nengutech
 * @since Nengutech 1.0
 */

add_theme_support( 'menus' );
 
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

