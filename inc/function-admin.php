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
    register_setting( 'ses-settings-group', 'logo_unidade_rodape' );
    register_setting( 'ses-settings-group', 'nome_unidade' );
    register_setting( 'ses-settings-group', 'email_unidade' );
    register_setting( 'ses-settings-group', 'tel_unidade' );
    register_setting( 'ses-settings-group', 'ddd_unidade' );
    register_setting( 'ses-settings-group', 'endereco_unidade' );
    register_setting( 'ses-settings-group', 'cep_unidade' );
    register_setting( 'ses-settings-group', 'cnpj_unidade' );

    add_settings_section( 'ses-sidebar-options', 'Sidebar Option', 'ses_sidebar_options', 'souzaty_ses' );

    add_settings_field( 'sidebar-unidade-rodape', 'Logo Unidade', 'ses_sidebar_logo_unidade_rodape', 'souzaty_ses', 'ses-sidebar-options' );
    add_settings_field( 'sidebar-name', 'Nome da unidade', 'ses_sidebar_name', 'souzaty_ses', 'ses-sidebar-options' );
    add_settings_field( 'sidebar-email', 'E-mail de contato', 'ses_sidebar_email', 'souzaty_ses', 'ses-sidebar-options' );
    add_settings_field( 'sidebar-tel', 'Telefone de contato', 'ses_sidebar_tel', 'souzaty_ses', 'ses-sidebar-options' );
    add_settings_field( 'sidebar-endereco', 'Endereço da unidade', 'ses_sidebar_endereco', 'souzaty_ses', 'ses-sidebar-options' );
    add_settings_field( 'sidebar-cep', 'CEP da unidade', 'ses_sidebar_cep', 'souzaty_ses', 'ses-sidebar-options' );
    add_settings_field( 'sidebar-cnpj', 'CNPJ da unidade', 'ses_sidebar_cnpj', 'souzaty_ses', 'ses-sidebar-options' );
}

function ses_sidebar_options() {
    echo 'customizar';
}

function ses_sidebar_logo_unidade_rodape() {
    $logoUnidadeRodape = esc_attr( get_option ( 'logo_unidade_rodape' ) );
    echo '<input type="button" class="button button-secundary" value="Upload Logo Unidade Rodape" id="upload-button" /> <input class="ses-logo-unidade-rodape" type="hidden" name="logo_unidade_rodape" value="'.$logoUnidadeRodape.'" />';
}

function ses_sidebar_name() {
    $nomeUnidade = esc_attr( get_option ( 'nome_unidade' ) );
    echo '<input class="ses-nome-unidade" type="text" name="nome_unidade" value="'.$nomeUnidade.'" placeholder="Nome Unidade" />';
}
function ses_sidebar_email(){
    $email = esc_attr( get_option ( 'email_unidade' ) );
    echo '<input class="ses-email" type="email" name="email_unidade" value="'.$email.'" placeholder="E-mail" />';
}
function ses_sidebar_tel(){
    $ddd = esc_attr( get_option ( 'ddd_unidade' ) );
    $tel = esc_attr( get_option ( 'tel_unidade' ) );
    echo '<input class="ses-ddd" type="tel" name="ddd_unidade" class="ddd" maxlength="2" value="'.$ddd.'" placeholder="DDD" /> <input class="ses-tel" type="tel" name="tel_unidade" value="'.$tel.'" placeholder="Telefone Contato" /> <p class="description">Somente números</p>      ';
}
function ses_sidebar_endereco(){
    $endereco = esc_attr( get_option ( 'endereco_unidade' ) );
    echo '<input class="ses-endereco" type="text" name="endereco_unidade" value="'.$endereco.'" placeholder="Endereço Unidade" />';
}
function ses_sidebar_cep(){
    $cep = esc_attr( get_option ( 'cep_unidade' ) );
    echo '<input type="text" class="ses-cep" name="cep_unidade" value="'.$cep.'" placeholder="CEP" />';
}
function ses_sidebar_cnpj(){
    $cnpj = esc_attr( get_option ( 'cnpj_unidade' ) );
    echo '<input class="ses-cnpj" type="text" name="cnpj_unidade" value="'.$cnpj.'" placeholder="CNPJ" />';
}
function ses_theme_create_page() {
    require_once( get_template_directory() . '/inc/templates/ses-admin.php' );
}
function ses_theme_settings_page() {
    // Generation of admin page
}
