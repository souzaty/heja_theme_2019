<?php
/**
* Template Name: Notícias
 */


get_header(); ?>
<div id="content" class="site-content">
    <div class="container">
        <div class="row">

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">

            <?php
    		if ( have_posts() ) :


    				<header>
    					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
    				</header>

    			
    			endif;

    			/* Start the Loop */
    			while ( have_posts() ) : the_post();

    				/*
    				 * Include the Post-Format-specific template for the content.
    				 * If you want to override this in a child theme, then include a file
    				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
    				 */
    				get_template_part( 'template-parts/content-blog', get_post_format() );

    			endwhile;

    			the_posts_navigation();

    		else :

    			get_template_part( 'template-parts/content-blog', 'none' );

    		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- #content -->
<?php get_footer(); ?>
