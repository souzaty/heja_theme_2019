<div style="padding: 30px 10px;">
    <h1>Informações de contato</h1>
    <?php settings_errors(); ?>
    <form id="submitForm" method="post" action="options.php" class="ses-general-form">
        <?php settings_fields ( 'ses-settings-group' ); ?>
        <?php do_settings_sections('souzaty_ses'); ?>
        <?php submit_button(); ?>
   </form>
</div>
