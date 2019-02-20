<h1>Sunset Contact Form</h1>
<?php settings_errors(); ?>

<form id="submitForm" method="post" action="options.php" class="ses-general-form">
	<?php settings_fields( 'ses-integration-group' ); ?>
	<?php do_settings_sections( 'souzaty_ses_integration' ); ?>
	<?php submit_button(); ?>
</form>
