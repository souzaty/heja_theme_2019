<?php
/**
* @package WordPress
* @subpackage SES - GO Unidades
* @since SES - GO Unidades 1.0
*/
 ?>
 <!DOCTYPE html>
 <html style="margin:0 !important; padding:0 !important;" <?php language_attributes(); ?>>
 <head>
     <title><?php bloginfo( 'name' ); wp_title(); ?></title>
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
     <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" rel="stylesheet">
<?php wp_head(); ?>
<?php
        $custom_css = esc_attr( get_option( 'sunset_css' ) );
        if( !empty( $custom_css ) ):
            echo '<style>' . $custom_css . '</style>';
        endif;
    ?>
</head>
<body <?php body_class(); ?> >
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
<!-- Navigation -->
<nav class="ses-nav-top">
	<div class="container">
		<a class="ses-mail-top" href="mailto:<?php print $email ?>"><?php print $email ?></a>
	</div>
</nav>
<nav class="navbar navbar-expand-lg ses-nav-default">
	<div class="container">
		<!-- Branding -->
		<div class="image-container">
			<div id="profile-picture-preview" class="profile-picture" style="background-image: url(<?php print $logoUnidadeRodape; ?>);"></div>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<!-- Menu -->
		<?php wp_nav_menu( array(
			'menu' => 'menu_header',
			'theme_location' => 'menu_header',
			'container' => 'div',
			'container_class' => 'collapse navbar-collapse ses-nav-menu navbar-right',
			'container_id' => 'navbarSupportedContent',
			'menu_class' => 'nav justify-content-end',
			'echo' => true,
			'menu_id' => 'id_do_menu',
			'before' => "",
			'after' => "",
			'link_before' => "",
			'link_after' => "",
			'depth' => 0,
			'walker' => "",

			) );
			?>
	</div><!-- end container -->
</nav><!-- end nav -->
<!-- Header -->
<header class="masthead bg-primary text-white text-center">
<div class="container">
  <h1 class=" mb-0">slider home</h1>
  <h2 class="font-weight-light mb-0">texto descritivo inserir aqui</h2>
  <a class="btn btn-xl btn-outline-light" href="#"> call to action</a>
</div>
</header>
