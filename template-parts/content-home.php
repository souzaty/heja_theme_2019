<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>
<div class="col-md-4">
    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('noticias-home-heelj'); ?></a>
    <h2 class="title-news"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="resume-news"><?php the_excerpt(); ?></p>
        <a href="<?php echo get_permalink();?>">
            <button type="button" class="btn btn-default btn-blue" aria-label="Left Align">Leia mais</button>
        </a>
</div>
