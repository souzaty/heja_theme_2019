<?php
/**
* @package WordPress
* @subpackage SES - GO Unidades
* @since SES - GO Unidades 1.0
*/
/*--------------------------------------------------------------
>>> TABLE OF CONTENTS:
----------------------------------------------------------------
#Load scripts
# Theme Admin
# Menu
# Theme Suport
  ## Feed Links
  ## Pagination
  ## Thumbnails Sizes
  ## HTML 5 Support
  ## Post Formats
  ## Remove Meta Generator
# Widgets
# CPT Custom Post Types
# Shortcodes
# WP-login Customization
--------------------------------------------------------------*/

 // ========== Start Load scripts
function load_scripts() {
    // bootstrap scripts
    wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
    wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
    // Theme scripts
    wp_enqueue_style( 'custom', get_template_directory_uri(). '/css/custom.css', array(), '1.0', 'all' );
    wp_enqueue_script( 'template', get_template_directory_uri(). '/js/template.js', array(), null, true);
    // Font awesome
    wp_enqueue_style( 'FontAwesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array(), '', 'all' );
    // Google Fonts
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i', false );
    }

    add_action( 'wp_enqueue_scripts', 'load_scripts' );

 // ========== Start Theme Admin
 require get_template_directory() . '/inc/function-admin.php';
 require get_template_directory() . '/inc/enqueue.php';
 require get_template_directory() . '/inc/theme-support.php';

 // ========== Start Menu
 register_nav_menus(array( 'menu_header' => __('Menu topo Unidade', ''),
 ));

 // ========== Start Theme Suport

 // Generate Feed Links
 add_theme_support('automatic-feed-links');

 // Paginação
 require_once('wp_bootstrap_pagination.php');

 // Configura os tamanhos
 add_theme_support('post-thumbnails');
 add_filter('jpeg_quality', create_function('', 'return 100;'));
 set_post_thumbnail_size(825, 510, true);
 add_image_size('sllide-home', 283, 250, true);

 // Adiciona suporte a html 5
 add_theme_support('html5', array(
 				'search-form',
 				'comment-form',
 				'comment-list',
 				'gallery',
 				'caption'
 ));

 // Adiciona suporte a vários tipos de posts
 add_theme_support('post-formats', array(
 				'aside',
 				'image',
 				'video',
 				'quote',
 				'link',
 				'gallery',
 				'status',
 				'audio',
 				'chat'
 ));
 // Remove Meta Generator
 remove_action('wp_head', 'wp_generator');
