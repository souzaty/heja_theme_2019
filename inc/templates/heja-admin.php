<div style="padding: 30px 10px;">
    <h1>Informações de contato</h1>
    <?php settings_errors(); ?>
    <form id="submitForm" method="post" action="options.php" class="heja-general-form">
        <?php settings_fields ( 'heja-settings-group' ); ?>
        <?php do_settings_sections('souzaty_heja'); ?>
        <?php submit_button(); ?>
   </form>
</div>
