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
        <a class="navbar-brand" href="#"><?php esc_html_e( bloginfo( 'name' ), 'themeslug' ); ?></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerNav" aria-controls="headerNav" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'best-reloaded' ); ?>">
            <span class="navbar-toggler-icon"></span><span class="sr-only"><?php esc_html_e( 'Toggle Navigation', 'themeslug' ); ?></span>
        </button>
        <nav class="collapse navbar-collapse" id="headerNav" role="navigation" aria-label="Main Menu">
            <span class="sr-only"><?php esc_html_e( 'Main Menu', 'themeslug' ); ?></span>
    		<!-- Menu -->
            <?php wp_nav_menu( array(
                'theme_location' => 'menu_header',
                'depth'          => 2,
                'container'      => false,
                'menu_class'     => 'navbar-nav mr-auto',
                'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                // Process nav menu using our custom nav walker.
                'walker'         => new WP_Bootstrap_Navwalker(),
            ) );
			?>
        </nav><!-- end nav -->
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
