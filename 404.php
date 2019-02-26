<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8" style="margin:0 auto">
        <div id="content" class="site-content">
            <div class="container">
                <div class="row">
                    <header class="page-header" style="width:100%;">
    					<h1 class="page-title" ><?php esc_html_e( 'Conteúdo não encontrado.', 'wp-bootstrap-starter' ); ?></h1>
    				</header><!-- .page-header -->
                    <div class="page-content">
    					<p><?php esc_html_e( 'Parece que nada foi encontrado neste local. Talvez tente um dos links abaixo ou uma pesquisa?', 'wp-bootstrap-starter' ); ?></p>

    					<?php
    						get_search_form();
    					?>
    				</div><!-- .page-content -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!--  end content -->
	</section><!-- #primary -->

<?php get_footer();
