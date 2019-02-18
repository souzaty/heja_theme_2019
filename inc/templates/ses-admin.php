<div style="padding: 30px 10px;">
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
<div class="admin-preview-data">

<div class="ses-admin-preview">
    <div class="ses-sidebar-preview">
        <h3>Sidebar</h3>
        <div class="image-container">
			<div id="profile-picture-preview" class="profile-picture" style="background-image: url(<?php print $logoUnidadeRodape; ?>);"></div>
		</div>
        <div class="ses-sidebar">
    		<div class="ses-sidebar-tel">
				<span class="tel-icon-destaque"></span>
				<p class="text-box"><b>(<?php print $ddd ?>) <?php print $tel ?></b><br> Fale Conosco</p>
            </div>
			<div class="ses-sidebar-endereco">
				<span class="map-icon-destaque"></span>
				<p class="text-box"><b>Como Chegar</b><br> Acessar Mapa</p>
			</div>
			<div class="ses-sidebar-email">
				<div class="box">
				<span class="msg-icon-destaque"></span>
				<p class="text-box"><?php print $email ?></p>
				</div>
			</div>
        </div>
    </div>
</div>
<!-- Footer -->
<img src="<?php print $logoUnidadeRodape ?>" alt="">
<div class="ses-admin-preview">
    <div class="ses-sidebar-preview">
        <h3>Rodapé</h3>
        <div class="ses-sidebar">
    		<div class="ses-sidebar-tel">
				<span class="tel-icon-destaque"></span>
				<p class="text-box"><b>(<?php print $ddd ?>) <?php print $tel ?></b><br> Fale Conosco</p>
            </div>
    			<div class="ses-sidebar-endereco">
					<span class="map-icon-destaque"></span>
					<p class="text-box"><b>Como Chegar</b><br> Acessar Mapa</p>
    			</div>
    			<div class="ses-sidebar-email">
    				<div class="box">
					<span class="msg-icon-destaque"></span>
					<p class="text-box"><?php print $email ?></p>
    				</div>
    			</div>
    			<p></p>
    			<p>
    			</p>
    		</div>
        </div>
    </div>
</div>
</div>
