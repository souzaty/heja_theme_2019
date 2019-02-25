<?php
/**
* @package WordPress
* @subpackage SES - GO Unidades
* @since SES - GO Unidades 1.0
*/

?>
<div class="col-md-4">
<<<<<<< HEAD
<<<<<<< HEAD
    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('noticias-home'); ?></a>
    <h2 class="title-news"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="resume-news"><?php the_excerpt(); ?></p>
        <a href="<?php echo get_permalink();?>">
            <button type="button" class="btn btn-default btn-blue" aria-label="Left Align">Leia mais</button>
        </a>
=======
=======
>>>>>>> parent of b3f86e9... content home
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<div class="post-thumbnail">
    		<?php the_post_thumbnail(); ?>
    	</div>
    	<header class="entry-header">
    		<?php
    		if ( is_single() ) :
    			the_title( '<h1 class="entry-title">', '</h1>' );
    		else :
    			the_title( '<h2 class="entry-title">abul<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    		endif;

    		if ( 'post' === get_post_type() ) : ?>
    		<div class="entry-meta">
    			<?php wp_bootstrap_starter_posted_on(); ?>
    		</div><!-- .entry-meta -->
    		<?php
    		endif; ?>
    	</header><!-- .entry-header -->
    	<div class="entry-content">
    		<?php
            if ( is_single() ) :
    			the_content();
            else :
                the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter' ) );
            endif;

    			wp_link_pages( array(
    				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
    				'after'  => '</div>',
    			) );
    		?>
    	</div><!-- .entry-content -->

    	<footer class="entry-footer">
    		<?php wp_bootstrap_starter_entry_footer(); ?>
    	</footer><!-- .entry-footer -->
    </article>
<<<<<<< HEAD
>>>>>>> parent of b3f86e9... content home
=======
>>>>>>> parent of b3f86e9... content home
</div>
