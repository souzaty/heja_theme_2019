<?php
/**
* @package WordPress
* @subpackage SES - GO Unidades
* @since SES - GO Unidades 1.0
*/
?>
<?php
$nomeUnidade = esc_attr( get_option ( 'nome_unidade' ) );
$email = esc_attr( get_option ( 'email_unidade' ) );
$ddd = esc_attr( get_option ( 'ddd_unidade' ) );
$tel = esc_attr( get_option ( 'tel_unidade' ) );
$endereco = esc_attr( get_option ( 'endereco_unidade' ) );
$cep = esc_attr( get_option ( 'cep_unidade' ) );
$cnpj = esc_attr( get_option ( 'cnpj_unidade' ) );
?>

<footer class="footer text-center">
    <div class="container">
        <div class="row">
          <div class="col-md-6">
              <img class= "hide-mobile" style="float:right" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-unidade-footer-desktop.png" alt="">
              <img class= "logo-mobile" style="display:none;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-unidade-footer-mobile.png" alt="">
          </div>
          <div class="col-md-6">
               <img style="float:left;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-ses-gov.png" alt="">
          </div>
        </div>
        <hr>
    </div>
    <div class="address">
        <div class="container">
            <p><?php print $endereco ?>, Goiás CEP: <?php print $cep ?></p>
            <p>(<?php print $ddd ?>) <?php print $tel ?>, <?php print $email ?>, CNPJ <?php print $cnpj ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
