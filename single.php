<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<div id="content" class="site-content">
    <div class="container">
        <div class="row">
		<main id="main" class="site-main col-md-9" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			    the_post_navigation();

			

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
        </div><!-- End row -->
    </div><!-- end container -->
</div><!-- End content -->
<?php get_footer();
