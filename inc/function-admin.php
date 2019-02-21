<?php

/*
@package SES 2019
=========================
Admin Page
=========================
*/

function ses_add_admin_page() {

    // Ganerate SES Admin Page
    add_menu_page('SES Theme Options', 'SES', 'manage_options', 'souzaty_ses', 'ses_theme_create_page', get_template_directory_uri() . '/img/admin-icon.png', 110);

    // Ganerate SES Admin Sub Page
    add_submenu_page('souzaty_ses', 'SES Informações Unidade', 'Informações Unidades', 'manage_options', 'souzaty_ses', 'ses_theme_create_page');
    add_submenu_page('souzaty_ses', 'SES Intergation Options', 'Integração', 'manage_options', 'souzaty_integracao', 'ses_theme_instegration_page');
    add_submenu_page('souzaty_ses', 'SES Social Options', 'Redes Sociais', 'manage_options', 'souzaty_social', 'ses_theme_settings_page');
    add_submenu_page('souzaty_ses', 'SES Theme Options', 'Theme Options', 'manage_options', 'souzaty_ses_theme', 'ses_theme_support_page');

    // Activate custom settings
    add_action('admin_init', 'ses_custom_settings');
}
add_action('admin_menu', 'ses_add_admin_page');

function ses_custom_settings() {
    // Informações de contato options
    register_setting('ses-info-group', 'nome_unidade');
    register_setting('ses-info-group', 'ddd_unidade');
    register_setting('ses-info-group', 'tel_unidade');
    register_setting('ses-info-group', 'email_unidade');
    register_setting('ses-info-group', 'endereco_unidade');
    register_setting('ses-info-group', 'cep_unidade');
    register_setting('ses-info-group', 'map_unidade');
    register_setting('ses-info-group', 'cnpj_unidade');

    add_settings_section('ses-unidade-options', 'Informações de contato da Unidade Hospitalar', 'ses_unidade_options', 'souzaty_ses');

    add_settings_field('unidade-name', 'Nome da unidade', 'ses_unidade_name', 'souzaty_ses', 'ses-unidade-options');
    add_settings_field('unidade-email', 'E-mail de contato', 'ses_unidade_email', 'souzaty_ses', 'ses-unidade-options');
    add_settings_field('unidade-tel', 'Telefone de contato', 'ses_unidade_tel', 'souzaty_ses', 'ses-unidade-options');
    add_settings_field('unidade-endereco', 'Endereço da unidade', 'ses_unidade_endereco', 'souzaty_ses', 'ses-unidade-options');
    add_settings_field('unidade-cep', 'CEP da unidade', 'ses_unidade_cep', 'souzaty_ses', 'ses-unidade-options');
    add_settings_field('unidade-map', 'Google Maps URL', 'ses_unidade_map', 'souzaty_ses', 'ses-unidade-options');
    add_settings_field('unidade-cnpj', 'CNPJ da unidade', 'ses_unidade_cnpj', 'souzaty_ses', 'ses-unidade-options');

    // Integration code settings
    register_setting('ses-integration-group', 'code_header', 'ses_sanitize_code_header');
    register_setting('ses-integration-group', 'code_footer', 'ses_sanitize_code_footer');
    register_setting('ses-integration-group', 'custom_css', 'ses_sanitize_custom_css');
    register_setting('ses-integration-group', 'code_maps');

    add_settings_section('ses-unidade-integration', 'Códigos de integração para inserir no template da Unidade Hospitalar', 'ses_unidade_integration', 'souzaty_ses_integration');

    add_settings_field('code-header', 'Header code', 'ses_code_header', 'souzaty_ses_integration', 'ses-unidade-integration');
    add_settings_field('code-footer', 'Footer code', 'ses_code_footer', 'souzaty_ses_integration', 'ses-unidade-integration');
    add_settings_field('code-css', 'Customize CSS', 'ses_code_css', 'souzaty_ses_integration', 'ses-unidade-integration');

    // Sanitize header code
    function ses_sanitize_code_header($input) {
        $new_input = array();

        $allowed = array(
            'script' => array(
                'src' => array()
            )
        );

        if (isset($input['code']))
            $new_input['code'] = wp_kses($input['code'], $allowed);

        return $new_input;
    }
    // Sanitize footer code
    function ses_sanitize_code_footer($input) {
        $new_input = array();

        $allowed = array(
            'script' => array(
                'src' => array()
            )
        );

        if (isset($input['code']))
            $new_input['code'] = wp_kses($input['code'], $allowed);

        return $new_input;
    }
    // Sanitize footer code
    function ses_sanitize_custom_css($input) {
        $output = esc_textarea($input);
        return $output;
    }

    // Theme Support settings
    register_setting('ses-theme-support', 'post_formats', 'ses_post_formats_callback');

    add_settings_section('ses-theme-options', 'Theme Options', 'ses_theme_options', 'souzaty_ses_theme');

    add_settings_field('post-formats', 'Post formats', 'ses_post_formats', 'souzaty_ses_theme', 'ses-theme-options');
}

// Unidade integration functions
function ses_unidade_integration($input) {
    return $input;
}
function ses_code_header() {
    $codeHeader = esc_attr(get_option('code_header'));
    echo '<textarea rows="10" cols="30" class="ses-code-input" name="code_header" placeholder="" >';
    echo $codeHeader;
    echo '</textarea> <p class="legend">Adiciona códigos personalizados na tag < head > do seu site (<i>Google Analytics, Hotjar, Navegg</i>)</p>';
}
function ses_code_footer() {
    $codeFooter = esc_attr(get_option('code_footer'));
    echo '<textarea rows="10" cols="30" class="ses-code-input" name="code_footer" placeholder="" >';
    echo $codeFooter;
    echo '</textarea> <p class="legend">Adicionar código para o < body ></p>';
}
function ses_code_css() {
    $codeCSS = esc_attr(get_option('custom_css'));
    echo '<textarea rows="10" cols="30" class="ses-code-input" name="custom_css" placeholder="" >';
    echo $codeCSS;
    echo '</textarea> <p class="legend">Adiciona estilos personalizados a sua folha de estilos CSS</p>';
}
// Post Formats Callback functions
function ses_post_formats_callback($input) {
    return $input;
}
function ses_theme_options() {
    echo 'Activate your especific theme support options';
}
function ses_post_formats() {
    $options = get_option('post_formats');
    $formats = array(
        'aside',
        'gallery',
        'link',
        'image',
        'quote',
        'video',
        'audio',
        'chat'
    );
    $output  = '';
    foreach ($formats as $format) {
        $checked = (@$options[$format] == 1 ? 'checked' : '');
        $output .= '<label><input type="checkbox" id="' . $format . '" name="post_formats[' . $format . ']" value="1" ' . $checked . ' /> ' . $format . '</label><br>';
    }
    echo $output;
}

// Unidade contact functions
function ses_unidade_options() {
    echo 'Preencha os campos abaixo com os dados da unidade';
}

function ses_unidade_name() {
    $nomeUnidade = esc_attr(get_option('nome_unidade'));
    echo '<input class="ses-nome-unidade" type="text" name="nome_unidade" value="' . $nomeUnidade . '" placeholder="Nome Unidade" />';
}
function ses_unidade_email() {
    $email = esc_attr(get_option('email_unidade'));
    echo '<input class="ses-email" type="email" name="email_unidade" value="' . $email . '" placeholder="E-mail" />';
}
function ses_unidade_tel() {
    $ddd = esc_attr(get_option('ddd_unidade'));
    $tel = esc_attr(get_option('tel_unidade'));
    echo '<input class="ses-ddd" type="tel" name="ddd_unidade" class="ddd" maxlength="2" value="' . $ddd . '" placeholder="DDD" /> <input class="ses-tel" type="tel" name="tel_unidade" value="' . $tel . '" placeholder="Telefone Contato" /> <p class="description">Somente números</p>      ';
}
function ses_unidade_endereco() {
    $endereco = esc_attr(get_option('endereco_unidade'));
    echo '<input class="ses-endereco" type="text" name="endereco_unidade" value="' . $endereco . '" placeholder="Endereço Unidade" />';
}
function ses_unidade_cep() {
    $cep = esc_attr(get_option('cep_unidade'));
    echo '<input type="text" class="ses-cep" name="cep_unidade" value="' . $cep . '" placeholder="CEP" />';
}
function ses_unidade_map() {
    $map = esc_attr(get_option('map_unidade'));
    echo '<input type="text" class="ses-map" name="map_unidade" value="' . $map . '" placeholder="URL google maps" />';
}
function ses_unidade_cnpj() {
    $cnpj = esc_attr(get_option('cnpj_unidade'));
    echo '<input class="ses-cnpj" type="text" name="cnpj_unidade" value="' . $cnpj . '" placeholder="CNPJ" />';
}

// Template submenu functions
function ses_theme_create_page() {
    require_once(get_template_directory() . '/inc/templates/ses-admin.php');
}
function ses_theme_support_page() {
    require_once(get_template_directory() . '/inc/templates/ses-theme-support.php');
}
function ses_theme_instegration_page() {
    require_once(get_template_directory() . '/inc/templates/ses-integration.php');
}
function ses_theme_settings_page() {
    // Generation of admin page
    echo '<h1>Configurações 2</h1>';
}
