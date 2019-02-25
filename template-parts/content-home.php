<?php
/**
* @package WordPress
* @subpackage SES - GO Unidades
* @since SES - GO Unidades 1.0
*/

?>
<div class="col-md-4">
    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('noticias-home'); ?></a>
    <h2 class="home-title-news"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="home-resume-news"> <?php the_excerpt(); ?> aqui </div>
        <a href="<?php echo get_permalink();?>">
            <button type="button" class="btn btn-default btn-blue" aria-label="Left Align">Leia mais</button>
        </a>
</div>
