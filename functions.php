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

 // ========== Start Theme Admin
 require get_template_directory() . '/inc/function-admin.php';
 require get_template_directory() . '/inc/enqueue.php';
 require get_template_directory() . '/inc/theme-support.php';
 require get_template_directory() . '/inc/custom-post-type.php';

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

 // Disable support for comments and trackbacks in post types
function df_disable_comments_post_types_support() {
	$post_types = get_post_types();
	foreach ($post_types as $post_type) {
		if(post_type_supports($post_type, 'comments')) {
			remove_post_type_support($post_type, 'comments');
			remove_post_type_support($post_type, 'trackbacks');
		}
	}
}
add_action('admin_init', 'df_disable_comments_post_types_support');
// Close comments on the front-end
function df_disable_comments_status() {
	return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);
// Hide existing comments
function df_disable_comments_hide_existing_comments($comments) {
	$comments = array();
	return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);
// Remove comments page in menu
function df_disable_comments_admin_menu() {
	remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'df_disable_comments_admin_menu');
// Redirect any user trying to access comments page
function df_disable_comments_admin_menu_redirect() {
	global $pagenow;
	if ($pagenow === 'edit-comments.php') {
		wp_redirect(admin_url()); exit;
	}
}
add_action('admin_init', 'df_disable_comments_admin_menu_redirect');
// Remove comments metabox from dashboard
function df_disable_comments_dashboard() {
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'df_disable_comments_dashboard');
// Remove comments links from admin bar
function df_disable_comments_admin_bar() {
	if (is_admin_bar_showing()) {
		remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
	}
}
add_action('init', 'df_disable_comments_admin_bar');
