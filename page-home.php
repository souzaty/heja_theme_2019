<?php
/**
* Template Name: home
 */

get_header(); ?>
<?php
$email = esc_attr( get_option ( 'email_unidade' ) );
$ddd = esc_attr( get_option ( 'ddd_unidade' ) );
$tel = esc_attr( get_option ( 'tel_unidade' ) );
$codeMaps = esc_attr( get_option ( 'code_maps' ) );
$slideHome = esc_attr( get_option ( 'slide_home' ) );
?>
<!-- Header -->
<header class="slide-home">
        <?php echo do_shortcode('[rev_slider alias="home-heelj"]'); ?>

</header>
<section class="home-about">
    <div class="container">
        <div class="row">
            <?php
            $new_query = new WP_Query( array(
        'posts_per_page' => 1,
        'post_type'      => hospital,
        'orderby'        => 'menu_order',
        'paged'          => $paged
        ) );

        while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
            <div class="col-md-12">
                <h2><?php the_title(''); ?></h2>
            </div>
            <div class="col-md-6">

                <p><?php the_content(); ?></p>
            <?php

            endwhile;
            wp_reset_postdata();
                ?>
            </div>
            <div class="col-md-3">
                <h3 style="color: #005da7; font-weight:bold; font-size:22px; margin-top:0;">Especialidades</h3>
                <div class="content-lista-exames">
                    <?php
                    $new_query = new WP_Query( array(
                'posts_per_page' => -1,
                'post_type'      => especialidades,
                'orderby'        => 'menu_order',
                'paged'          => $paged
                ) );

                while ( $new_query->have_posts() ) : $new_query->the_post(); ?>

                <li><?php the_title(''); ?></li>

                <?php

                endwhile;
                wp_reset_postdata();
                    ?>
                </div><!-- end content lista -->
            </div>
            <div class="col-md-3">
                <h3 style="color: #005da7; font-weight:bold; font-size:22px;margin-top:0;">Exames</h3>
                <div class="content-lista-exames">
                    <?php
                    $new_query = new WP_Query( array(
                'posts_per_page' => -1,
                'post_type'      => exames,
                'orderby'        => 'menu_order',
                'paged'          => $paged
                ) );

                while ( $new_query->have_posts() ) : $new_query->the_post(); ?>

                <li class="lista-exame"><?php the_title(''); ?></li>

                <?php

                endwhile;
                wp_reset_postdata();
                    ?>
                </div> <!-- end content lista -->

            </div>
        </div>
    </div>
</section>
<div class="service-content">
<section class="info-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="info-content">
                    <div class="info-icon">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/call" alt="">
                    </div>
                    <div class="info-description">
                        <h4 class="info-title">(<?php print $ddd ?>)<?php print $tel ?></h4>
                        <p class="info-subtitle">Fale conosco</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info-content">
                    <div class="info-icon">
                        <a href="<?php print $codeMaps ?>" target="_blank">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/place" alt="">
                        </a>
                    </div>
                    <div class="info-description">
                        <a href="<?php print $codeMaps ?>" target="_blank"><h4 class="info-title">Como Chegar</h4></a>
                        <a href="<?php print $codeMaps ?>" target="_blank"><p class="info-subtitle">Traçar rota</p></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info-content">
                    <div class="info-icon">
                        <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/transparencia.php" target="_blank">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/transparencia.png" alt="">
                        </a>
                    </div>
                    <div class="info-description">
                        <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/transparencia.php"><h4 class="info-title">Transparência</h4></a>
                        <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/transparencia.php" target="_blank"><p class="info-subtitle">Gestão transparente</p></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info-content">
                    <div class="info-icon">
                        <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/sau.php" target="_blank">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/chat.png" alt="">
                        </a>
                    </div>
                    <div class="info-description">
                        <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/sau.php"><h4 class="info-title">Avaliação</h4></a>
                        <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/sau.php" target="_blank"><p class="info-subtitle">Queremos ouvir você</p></a>
                    </div>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</section>
<section class="noticias-home">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title-section white">Notícias</h2>
            </div>
            <?php
               global $post;
               $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
               $wp_query = new WP_Query();
               $wp_query->query('post_type=post&cat=post&orderby=date&order=DESC&posts_per_page=3&paged=' . $paged);
                ?>
            <?php
    		if ( have_posts() ) :

    			if ( is_home() && ! is_front_page() ) : ?>
    				<header>
    					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
    				</header>

    			<?php
    			endif;

    			/* Start the Loop */
    			while ( have_posts() ) : the_post();

    				/*
    				 * Include the Post-Format-specific template for the content.
    				 * If you want to override this in a child theme, then include a file
    				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
    				 */
    				get_template_part( 'template-parts/content-home', get_post_format() );

    			endwhile;



    		endif; ?>
            <div class="col-md-12">
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/noticias/">
                <button type="button" class="btn btn-default btn-mais-noticias" aria-label="center Align">Mais notícias</button>
                </a>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<?php get_footer();
