<?php
/**
* @package WordPress
* @subpackage SES - GO Unidades
* @since SES - GO Unidades 1.0
*/

?>
<div class="col-md-3">
    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('noticias-blog'); ?></a>
</div>
<div class="col-md-9">
    <h2 class="home-title-news"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="home-resume-news"> <?php the_excerpt(); ?></div>
        <a href="<?php echo get_permalink();?>">
            <button type="button" class="btn btn-default" aria-label="Left Align">Continue lendo</button>
        </a>
</div>
