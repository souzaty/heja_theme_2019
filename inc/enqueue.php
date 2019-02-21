<?php

/*
@package SES 2019
    =========================
    Admin Enqueue Functions
    =========================
*/

function ses_load_admin_scripts( $hook ) {

    if ( 'toplevel_page_souzaty_ses' != $hook ){ return; }

    wp_register_style( 'ses_admin', get_template_directory_uri() . '/css/ses.admin.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'ses_admin' );

    wp_enqueue_media();

    wp_register_script( 'ses-admin-script', get_template_directory_uri() . '/js/ses.admin.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'ses-admin-script' );
}
add_action( 'admin_enqueue_scripts', 'ses_load_admin_scripts' );

// Load scripts in integration code admin page in integration page
function ses_load_admin_scripts_code( $hook ) {

    if ( 'ses_page_souzaty_integracao' != $hook ){ return; }

    wp_register_style( 'ses_admin', get_template_directory_uri() . '/css/ses.admin.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'ses_admin' );

    wp_enqueue_media();

    wp_register_script( 'ses-admin-script', get_template_directory_uri() . '/js/ses.admin.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'ses-admin-script' );
}
add_action( 'admin_enqueue_scripts', 'ses_load_admin_scripts_code' );

// ========== Start Load scripts
function load_scripts() {

   // Theme scripts
   wp_enqueue_style( 'custom', get_template_directory_uri(). '/css/custom.css', array(), '1.0', 'all' );
   wp_enqueue_script( 'template', get_template_directory_uri(). '/js/template.js', array(), null, true);
   // bootstrap scripts
   wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
   wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array('jquery'));
   wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'));
   wp_enqueue_script( 'boot2','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'));
   // Font awesome
   wp_enqueue_style( 'FontAwesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array(), '', 'all' );
   // Google Fonts
   wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i', false );
   }

   add_action( 'wp_enqueue_scripts', 'load_scripts', 999 );
