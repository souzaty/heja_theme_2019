<?php

/*
@package Heja 2019
    =========================
    Admin Page
    =========================
*/

function heja_add_admin_page() {

    // Ganerate HEJA Admin Page
    add_menu_page( 'HEJA Theme Options', 'HEJA', 'manage_options', 'souzaty_heja', 'heja_theme_create_page', get_template_directory_uri() . '/img/admin-icon.png', 110  );

    // Ganerate HEJA Admin Sub Page
    add_submenu_page( 'souzaty_heja', 'HEJA Theme Options', 'Contato', 'manage_options', 'souzaty_heja', 'heja_theme_create_page' );
    add_submenu_page( 'souzaty_heja', 'HEJA Social Options', 'Redes Sociais', 'manage_options', 'souzaty_social', 'heja_theme_settings_page' );

    // Activate custom settings
    add_action( 'admin_init', 'heja_custom_settings' );
}
add_action( 'admin_menu', 'heja_add_admin_page' );

function heja_custom_settings() {
    register_setting( 'heja-settings-group', 'first_name' );
    add_settings_section( 'heja-sidebar-options', 'Sidebar Option', 'heja_sidebar_options', 'souzaty_heja' );
    add_settings_field( 'sidebar-name', 'First Name', 'heja_sidebar_name', 'souzaty_heja', 'heja-sidebar-options' );

}

function heja_sidebar_options() {
    echo 'customizar';
}
function heja_sidebar_name() {
    $firstName = esc_attr( get_option ( 'first_name' ) );
    echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First name" />';
}
function heja_theme_create_page() {
    require_once( get_template_directory() . '/inc/templates/heja-admin.php' );
}
function heja_theme_settings_page() {
    // Generation of admin page
}
