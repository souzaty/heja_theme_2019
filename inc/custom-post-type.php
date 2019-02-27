<?php

/*
@package SES 2019
    =========================
    Custom Post Type Functions
    =========================
*/
/*--------------------------------------------------------------
>>> TABLE OF CONTENTS:
----------------------------------------------------------------
# O Hospital
# Especialidades
# Exames
# Menu
--------------------------------------------------------------*/

// Start CPT O Hospital
add_action('init', 'hospital_register');
function hospital_register()
{
				$product_permalink = 'hospital/%Formato%/';
				$labels            = array(
								'name' => __('Hospital', 'Tipo de post para incluir texto apresentação hospital.'),
								'singular_name' => __('O Hospital', 'post type singular name'),
								'all_items' => __(''),
								'add_new' => _x('Adicionar descrição', 'Adicionar descrição'),
								'add_new_item' => __('Adicionar novo'),
								'edit_item' => __('Editar texto'),
								'new_item' => __('Nova descrição'),
								'view_item' => __('Ver item da'),
								'search_items' => __('Procurar descrição'),
								'not_found' => __('Nenhuma descrição encontrado'),
								'not_found_in_trash' => __('Nenhuma descrição encontrada na lixeira'),
								'parent_item_colon' => ''
				);
				$args              = array(
								'labels' => $labels,
								'public' => true,
								'publicly_queryable' => true,
								'show_ui' => true,
								'query_var' => true,
								'menu_icon' => 'dashicons-id',
								'rewrite' => array(
												'slug' => 'hospital/%Formato%',
												'with_front' => false
								),
								'capability_type' => 'post',
								'hierarchical' => false,
								'menu_position' => 25,
								'supports' => array(
												'title',
                                                'editor'
								)
				);
				register_post_type('hospital', $args);
				flush_rewrite_rules();
}
// Filter to change the permalink
add_filter('post_link', 'hospital_permalink', 1, 3);
add_filter('post_type_link', 'hospital_permalink', 1, 3);
function hospital_permalink($permalink, $post_id, $leavename)
{
				//con %brand% catturo il rewrite del Custom Post Type
				if (strpos($permalink, '%hospital%') === FALSE)
								return $permalink;
				// Get post
				$post = get_post($post_id);
				if (!$post)
								return $permalink;
				// Get taxonomy terms
				$terms = wp_get_object_terms($post->ID, 'Formato');
				if (!is_wp_error($terms) && !empty($terms) && is_object($terms[0]))
								$taxonomy_slug = $terms[0]->slug;
				else
								$taxonomy_slug = 'no-brand';
				return str_replace('%hospital%', $taxonomy_slug, $permalink);
}

?>

	<?php
add_action('save_post_hospital', 'save_details_post_hospital');
function save_details_post_hospital()
{
				global $post;
				update_post_meta($post->ID, "link_hospital", $_POST["link_hospital"]);
}
// Start CPT Especialidades
add_action('init', 'especialidades_register');
function especialidades_register()
{
				$product_permalink = 'especialidades/%Formato%/';
				$labels            = array(
								'name' => __('Especialidades', 'Tipo de post para incluir as especialidades.'),
								'singular_name' => __('Lista de especialidades', 'post type singular name'),
								'all_items' => __('Todas as Especialidades'),
								'add_new' => _x('ADICIONAR NOVA', 'Adicionar Especialidade'),
								'add_new_item' => __('Adicionar nova especialidade'),
								'edit_item' => __('Editar especialidade'),
								'new_item' => __('Nova especialidade Item'),
								'view_item' => __('Ver item da especialidade'),
								'search_items' => __('Procurar especialidade'),
								'not_found' => __('Nenhuma especialidade encontrado'),
								'not_found_in_trash' => __('Nenhuma especialidade encontrado na lixeira'),
								'parent_item_colon' => ''
				);
				$args              = array(
								'labels' => $labels,
								'public' => true,
								'publicly_queryable' => true,
								'show_ui' => true,
								'query_var' => true,
								'menu_icon' => 'dashicons-id',
								'rewrite' => array(
												'slug' => 'especialidades/%Formato%',
												'with_front' => false
								),
								'capability_type' => 'post',
								'hierarchical' => false,
								'menu_position' => 25,
								'supports' => array(
												'title',
                                                'editor'
								)
				);
				register_post_type('especialidades', $args);
				flush_rewrite_rules();
}
// Filter to change the permalink
add_filter('post_link', 'especialidades_permalink', 1, 3);
add_filter('post_type_link', 'especialidades_permalink', 1, 3);
function especialidades_permalink($permalink, $post_id, $leavename)
{
				//con %brand% catturo il rewrite del Custom Post Type
				if (strpos($permalink, '%especialidades%') === FALSE)
								return $permalink;
				// Get post
				$post = get_post($post_id);
				if (!$post)
								return $permalink;
				// Get taxonomy terms
				$terms = wp_get_object_terms($post->ID, 'Formato');
				if (!is_wp_error($terms) && !empty($terms) && is_object($terms[0]))
								$taxonomy_slug = $terms[0]->slug;
				else
								$taxonomy_slug = 'no-brand';
				return str_replace('%especialidades%', $taxonomy_slug, $permalink);
}

?>

	<?php
add_action('save_post_especialidades', 'save_details_post_especialidades');
function save_details_post_especialidades()
{
				global $post;
				update_post_meta($post->ID, "link_especialidade", $_POST["link_especialidade"]);
}

// Start CPT Exames
add_action('init', 'exames_register');
function exames_register()
{
				$product_permalink = 'exames/%Formato%/';
				$labels            = array(
								'name' => __('Exames', 'Tipo de post para incluir as exames.'),
								'singular_name' => __('Lista de exames', 'post type singular name'),
								'all_items' => __('EXAMES LISTA'),
								'add_new' => _x('ADICIONAR NOVO EXAME', 'Adicionar exame'),
								'add_new_item' => __('Adicionar novo exame'),
								'edit_item' => __('Editar exame'),
								'new_item' => __('Novo exame'),
								'view_item' => __('Ver exame'),
								'search_items' => __('Procurar exame'),
								'not_found' => __('Nenhum exame encontrado'),
								'not_found_in_trash' => __('Nenhum exame encontrado na lixeira'),
								'parent_item_colon' => ''
				);
				$args              = array(
								'labels' => $labels,
								'public' => true,
								'publicly_queryable' => true,
								'show_ui' => true,
								'query_var' => true,
								'menu_icon' => 'dashicons-clipboard',
								'rewrite' => array(
												'slug' => 'exames/%Formato%',
												'with_front' => false
								),
								'capability_type' => 'post',
								'hierarchical' => false,
								'menu_position' => 25,
								'supports' => array(
												'title',
                                                'editor'
								)
				);
				register_post_type('exames', $args);
				flush_rewrite_rules();
}
// Filter to change the permalink
add_filter('post_link', 'exames_permalink', 1, 3);
add_filter('post_type_link', 'exames_permalink', 1, 3);
function exames_permalink($permalink, $post_id, $leavename)
{
				//con %brand% catturo il rewrite del Custom Post Type
				if (strpos($permalink, '%exames%') === FALSE)
								return $permalink;
				// Get post
				$post = get_post($post_id);
				if (!$post)
								return $permalink;
				// Get taxonomy terms
				$terms = wp_get_object_terms($post->ID, 'Formato');
				if (!is_wp_error($terms) && !empty($terms) && is_object($terms[0]))
								$taxonomy_slug = $terms[0]->slug;
				else
								$taxonomy_slug = 'no-brand';
				return str_replace('%exames%', $taxonomy_slug, $permalink);
}

?>

	<?php
add_action('save_post_exames', 'save_details_post_exames');
function save_details_post_exames()
{
				global $post;
				update_post_meta($post->ID, "link_exame", $_POST["link_exame"]);
}
