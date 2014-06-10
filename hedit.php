<?php
/**
 * Plugin Name: Hedit
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: Remove style.css from wp_head.
 * Version: 1.0
 * Author: alvaro_su
 * Author URI: https://github.com/alvarosu/Hedit
 * License: GPL2
 */

function remove_stylesheet_theme_styles() {
    wp_deregister_style( 'twentythirteen-style' );
    wp_dequeue_style( 'twentythirteen-style' );
}
add_action('wp_print_styles', 'remove_stylesheet_theme_styles', 100);
?>
