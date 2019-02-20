<div style="margin:20px 0 0 20px; padding: 30px 20px; background:#fff; border:1px solid #cdcdcd;">
    <h1>Sunset Contact Form</h1>
    <?php settings_errors(); ?>
    <?php $codeHeader = esc_attr( get_option ( 'code_header' ) ); ?>
    <form id="submitForm" method="post" action="options.php" class="ses-general-form">
    	<?php settings_fields( 'ses-integration-group' ); ?>
    	<?php do_settings_sections( 'souzaty_ses_integration' ); ?>
    	<?php submit_button( 'Save Changes', 'primary', 'btnSubmit' ); ?>
    </form>
    <h2>Pré-visualização</h2>
        <h3>inserir pré-visualização do template aqui</h3>
        <div class="" style="padding:15px 35px; background: #cdadfd; font-weight:bold; font-size:1.2em; color: #643a65; display:inline-block; border-radius: 5px;">
            exemplo:
            <hr style="opacity:0; height:10px">
            < head >
            <hr style="opacity:0; height:10px">
                <span style="font-weight:normal"> <?php print $codeHeader ?> </span>
            <hr style="opacity:0; height:10px">
            < /head >
        </div>
</div>
