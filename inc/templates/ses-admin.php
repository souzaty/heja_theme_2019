<div style="padding: 30px 10px;">
    <h1>Informações de contato</h1>
    <?php settings_errors(); ?>
    <?php
    $nomeUnidade = esc_attr( get_option ( 'nome_unidade' ) );
    $email = esc_attr( get_option ( 'email_unidade' ) );
    $ddd = esc_attr( get_option ( 'ddd_unidade' ) );
    $tel = esc_attr( get_option ( 'tel_unidade' ) );
    $endereco = esc_attr( get_option ( 'endereco_unidade' ) );
    $cep = esc_attr( get_option ( 'cep_unidade' ) );
    $cnpj = esc_attr( get_option ( 'cnpj_unidade' ) );
?>
    <hr>
    <h2>Preview</h2>
    <div class="col-md-3">
        <aside id="text-3" class="widget widget_text footer-menu"><h4 class="widget-title">CONTATO</h4>
            <div class="textwidget"><p style="margin-top: 30px;"><?php print $tel ?> </p>
                <p><?php print $email ?></p>
                <p><?php print $endereco ?> <br><?php print $cep ?></p>
                <p>
                    <a href="http://heja.org.br/fale-conosco"><button class="btn btn-default btn-white" type="button" aria-label="Left Align">fale conosco</button></a>
                </p>
            </div>
        </aside>
    </div>
    <hr>

    <form id="submitForm" method="post" action="options.php" class="ses-general-form">
        <?php settings_fields ( 'ses-settings-group' ); ?>
        <?php do_settings_sections('souzaty_ses'); ?>
        <?php submit_button(); ?>
   </form>
</div>
