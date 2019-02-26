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

            <article>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <h1 class="dark-blue"><?php the_title(); ?></h1>
              <div class="postMeta">
                <abbr class="published updated" title="<?php the_time('j/m/Y'); ?>"><span class="clock"></span><?php the_time('j/m/Y'); ?></abbr> <span class="tag"></span>
                <?php the_category( ', ' ); ?>
                <p></p>
              </div>
              <div class="postContent">
                <?php the_content(); ?>
              </div>
          <?php endwhile; endif; ?>
        </article>
        </div><!-- End row -->
    </div><!-- end container -->
</div><!-- End content -->
<?php get_footer();
