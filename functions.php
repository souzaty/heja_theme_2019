<?php


 // ========== Start Theme Admin
 require get_template_directory() . '/inc/function-admin.php';
 require get_template_directory() . '/inc/enqueue.php';


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

 // Adicona suporte a vários tipos de posts
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
