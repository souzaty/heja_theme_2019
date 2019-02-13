<?php

/*
@package SES 2019
    =========================
    Admin Enqueue Functions
    =========================
*/

function ses_load_admin_scripts( $hook ) {

    if ( 'toplevel_page_souzaty_ses' != $hook ){
        return;
    }

    wp_register_style( 'ses_admin', get_template_directory_uri() . '/css/ses.admin.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'ses_admin' );
}
add_action( 'admin_enqueue_scripts', 'ses_load_admin_scripts' );
