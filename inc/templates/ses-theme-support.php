<h1>SES Theme Support</h1>
<?php settings_errors(); ?>

<form id="submitForm" method="post" action="options.php" class="ses-general-form">
    <?php settings_fields ( 'ses-theme-support' ); ?>
    <?php do_settings_sections('souzaty_ses_theme'); ?>
    <?php submit_button( 'Save Changes', 'primary', 'btnSubmit' ); ?>
</form>
