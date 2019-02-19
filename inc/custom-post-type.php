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
# Especialidades
# Exames
# Menu
# Transparencia
--------------------------------------------------------------*/

// Start CPT Especialidades
add_action('init', 'especialidades_register');
function especialidades_register()
{
				$product_permalink = 'esppecialidades/%Formato%/';
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
								'menu_position' => 7,
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
