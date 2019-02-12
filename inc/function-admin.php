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
}
add_action( 'admin_menu', 'heja_add_admin_page' );

function heja_theme_create_page() {
    // Generation of admin page
}
function heja_theme_settings_page() {
    // Generation of admin page
}
