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
<<<<<<< HEAD
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
<div class="container">
    <h3>Teste loop aqui</h3>
            <?php
            $new_query = new WP_Query( array(
        'posts_per_page' => -1,
        'post_type'      => especialidades,
        'orderby'        => 'menu_order',
        'paged'          => $paged
        ) );
=======

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
        			<div id="profile-picture" class="profile-picture" style="background-image: url(<?php print $logoUnidadeRodape; ?>);"></div>
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
<<<<<<< HEAD
=======
        <div class="container">
            <h3>Teste loop aqui</h3>
                    <?php
                    $new_query = new WP_Query( array(
                'posts_per_page' => -1,
                'post_type'      => especialidades,
                'orderby'        => 'menu_order',
                'paged'          => $paged
                ) );
>>>>>>> 61faa83e5fb42946b1a36a6fbd4a1e2d61dab6f0

                while ( $new_query->have_posts() ) : $new_query->the_post(); ?>

                <li><?php the_title(''); ?></li>

                <?php

                endwhile;
                wp_reset_postdata();
                    ?>
        </div>
>>>>>>> origin/master
