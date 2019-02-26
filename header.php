<?php
/**
* @package WordPress
* @subpackage SES - GO Unidades
* @since SES - GO Unidades 1.0
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
    <link rel='stylesheet' id='wp-bootstrap-starter-style-css'  href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/custom.css" type='text/css' media='all' />
</head>

<body <?php body_class(); ?>>
        <?php
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
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        			<img class= "hide-mobile" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-unidade-desktop.png" alt="">
                    <img class= "logo-mobile" style="display:none;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-unidade-mobile.png" alt="">
                    </a>
        		</div>
        		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon menu-button">menu</span>
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
