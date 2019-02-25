<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<section style="padding:90px 0; background-color: #f4f4f4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>O Hospital</h2>
            </div>
            <div class="col-md-6">

                <p>O Hospital de Urgência da Região Sudoeste Dr. Albanir Faleiros Machado (HURSO) é uma Unidade da Secretaria de Estado de Saúde de Goiás e pode ser categorizado como um Hospital Porta Aberta Regulada. <br><br>

Conta com 69 leitos de internações clínicas e cirúrgicas; 20 leitos de terapia intensiva, divididos entre pediátrica e adulta; além de 22 leitos de “retaguarda” – observação, recuperação anestésica, sala vermelha e amarela. A Unidade presta atendimento a pacientes dos 27 municípios da região Sudoeste de Goiás.
</p>
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
                <div class="content-lista-exames">
                <h3 style="color: #005da7; font-weight:bold; font-size:22px;margin-top:0;">Exames</h3>
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

	<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-8">
		<main id="main" class="site-main" role="main">

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
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
