<?php

/*
@package SES 2019
    =========================
    Admin Page
    =========================
*/

function ses_add_admin_page() {

    // Ganerate SES Admin Page
    add_menu_page( 'SES Theme Options', 'SES', 'manage_options', 'souzaty_ses', 'ses_theme_create_page', get_template_directory_uri() . '/img/admin-icon.png', 110  );

    // Ganerate SES Admin Sub Page
    add_submenu_page( 'souzaty_ses', 'SES Theme Options', 'Contato', 'manage_options', 'souzaty_ses', 'ses_theme_create_page' );
    add_submenu_page( 'souzaty_ses', 'SES Social Options', 'Redes Sociais', 'manage_options', 'souzaty_social', 'ses_theme_settings_page' );

    // Activate custom settings
    add_action( 'admin_init', 'ses_custom_settings' );
}
add_action( 'admin_menu', 'ses_add_admin_page' );

function ses_custom_settings() {
    register_setting( 'ses-settings-group', 'first_name' );
    add_settings_section( 'ses-sidebar-options', 'Sidebar Option', 'ses_sidebar_options', 'souzaty_ses' );
    add_settings_field( 'sidebar-name', 'First Name', 'ses_sidebar_name', 'souzaty_ses', 'ses-sidebar-options' );

}

function ses_sidebar_options() {
    echo 'customizar';
}
function ses_sidebar_name() {
    $firstName = esc_attr( get_option ( 'first_name' ) );
    echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First name" />';
}
function ses_theme_create_page() {
    require_once( get_template_directory() . '/inc/templates/ses-admin.php' );
}
function ses_theme_settings_page() {
    // Generation of admin page
}
