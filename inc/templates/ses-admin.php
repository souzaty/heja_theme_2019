<div style="margin:20px 0 0 20px; padding: 30px 20px; background:#fff; border:1px solid #cdcdcd;">
    <h1>Informações de contato</h1>
    <?php settings_errors(); ?>
    <?php
    $logoUnidadeRodape = esc_attr( get_option ( 'logo_unidade_rodape' ) );
    $nomeUnidade = esc_attr( get_option ( 'nome_unidade' ) );
    $email = esc_attr( get_option ( 'email_unidade' ) );
    $ddd = esc_attr( get_option ( 'ddd_unidade' ) );
    $tel = esc_attr( get_option ( 'tel_unidade' ) );
    $endereco = esc_attr( get_option ( 'endereco_unidade' ) );
    $cep = esc_attr( get_option ( 'cep_unidade' ) );
    $cnpj = esc_attr( get_option ( 'cnpj_unidade' ) );
?>
<div class="admin-input-data">
    <div class="ses-admin-form">
        <form id="submitForm" method="post" action="options.php" class="ses-general-form">
            <?php settings_fields ( 'ses-settings-group' ); ?>
            <?php do_settings_sections('souzaty_ses'); ?>
            <?php submit_button( 'Save Changes', 'primary', 'btnSubmit' ); ?>
       </form>
    </div>
</div>
<h2>Pré-visualização</h2>
<h3>inserir pré-visualização do template aqui</h3>
<p style="padding:15px 35px; background: #cdadfd; font-weight:bold; font-size:1.2em; color: #643a65; display:inline-block; border-radius: 5px;">exemplo - email: <?php print $email ?></p>

</div>
