<?php
/**
 * Plugin Name: TK Reminders
 * Plugin URI: https://github.com/mauromorales/tk-reminders
 * Description: Leave reminders to yourself to comeback later to before publishing.
 * Version: 1.0.0
 * Author: Mauro Morales
 * Author URI: https://www.mauromorales.com
 * License: GPLv2 or later
 */

function tk_reminders_admin_styles() {
    wp_register_style( 'tk_reminders_admin_stylesheet', plugins_url( '/css/tk-reminders.css', __FILE__ ) );
    wp_enqueue_style( 'tk_reminders_admin_stylesheet' );
}

add_action( 'admin_enqueue_scripts', 'tk_reminders_admin_styles' );

function tk_reminders_enqueue( $hook ) {
    if ('post.php' != $hook) {
        return;
    }
    wp_enqueue_script( 'tk_reminders_script', plugin_dir_url( __FILE__ ) . '/js/tk-reminders.js', array(), false, true );
}

add_action('admin_enqueue_scripts', 'tk_reminders_enqueue');

