<?php
/**
* Template Name: Notícias
 */


get_header(); ?>
<div id="content" class="site-content">
    <div class="container">
        <div class="row">


            <!-- Main Blog Content -->
            <?php
               global $post;
               $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
               $wp_query = new WP_Query();
               $wp_query->query('post_type=post&cat=post&orderby=date&order=DESC&posts_per_page=4&paged=' . $paged);
                ?>
            <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();?>

                  <div class="col-md-5">
                     <?php the_post_thumbnail('noticias-blog'); ?>
                  </div>
                  <div class="col-md-7">
                     <div class="postMeta">
                        <abbr class="published updated" title="<?php the_time('j/m/Y'); ?>"><span class="clock"></span><?php the_time('j/m/Y'); ?></abbr> <span class="tag"></span>
                        <?php the_category( ', ' ); ?>
                     </div>
                     <h3 class="postTitle entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                     <div class="postSummary entry-content">
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php echo get_permalink(); ?>"><button style="margin-right:20px" type="button" class="btn btn-default btn-blue" aria-label="Left Align">Leia mais</button></a>
                     </div>
                 </div>
                     <div class="col-md-12">
                         <hr style="height:20px; background:transparent; border:none">
                     </div>
            <?php endwhile; ?>
            <div class="col-md-12 asas">
            <!-- Pagintation -->
            <?php if ( function_exists('wp_bootstrap_pagination') )
                 wp_bootstrap_pagination();
               ?>
            <?php endif; wp_reset_query(); ?>
        </div>


        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- #content -->
<?php get_footer();
