<?php
/*
Plugin Name: Hello DevOps
Description: Simple test plugin deployed via GitHub Actions. Adds a shortcode [karim_devops_hello] that displays a hello message.
Version: 1.0.0
Author: Abdelkarim Mselmi
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Return the hello message.
 *
 * @return string
 */
function karim_devops_message() {
    return '<p style="font-weight:bold;">Hello WordPress world, this is Karim DevOps</p>';
}

/**
 * Register shortcode [karim_devops_hello].
 */
function register_karim_devops_shortcode() {
    add_shortcode( 'karim_devops_hello', 'karim_devops_message' );
}
add_action( 'init', 'register_karim_devops_shortcode' );

/**
 * Optional: also show the message in the admin dashboard as a notice.
 */
function karim_devops_admin_notice() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
    echo '<div class="notice notice-success is-dismissible"><p>Hello WordPress world, this is Karim DevOps</p></div>';
}
add_action( 'admin_notices', 'karim_devops_admin_notice' );
