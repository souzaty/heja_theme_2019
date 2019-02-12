<?php

/*
@package Heja 2019
    =========================
    Admin Page
    =========================
*/

function heja_add_admin_page() {

    add_menu_page( 'HEJA Theme Options', 'HEJA', 'manage_options', 'souzaty-heja', 'heja_theme_create_page', get_template_directory_uri() . '/img/admin-icon.png', 110  );
}
add_action( 'admin_menu', 'heja_add_admin_page' );

function heja_theme_create_page() {
    // Generation of admin page

}
