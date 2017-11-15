<?php

if ( ! defined('ABSPATH') ) {
    exit;
}

// add top-level admin menu
function mpwp_myplugin_add_toplevel_menu() {


    add_menu_page(
        'MyPlugin Settings',
        'MyPlugin',
        'manage_options',
        'myplugin',
        'mpwp_myplugin_display_settings_page',
        'dashicons-admin-generic',
        null
    );

}
add_action( 'admin_menu', 'mpwp_myplugin_add_toplevel_menu' );