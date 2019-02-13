<?php

/*
@package SES 2019
    =========================
    Admin Enqueue Functions
    =========================
*/

function ses_load_admin_scripts() {
    wp_register_style( 'ses_admin', get_template_directory_uri() . , '/css/ses.admin.css' );
}
