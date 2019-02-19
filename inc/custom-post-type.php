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

// Start CPT Transparência
add_action('init', 'transparencia_register');
function transparencia_register()
{
				$eventos_permalink = 'transparencia';
				$labels            = array(
								'name' => __('Transparência', 'Tipo de post para incluir Prestação de contass.'),
								'singular_name' => __('Transparência', 'post type singular name'),
								'all_items' => __('Todos os documentos'),
								'add_new' => _x('Novo Documento', 'Nova Prestação de conta'),
								'add_new_item' => __('Adicionar nova Prestação de conta'),
								'edit_item' => __('Editar Prestação de conta'),
								'new_item' => __('Nova Prestação de conta Item'),
								'view_item' => __('Ver item da Prestação de conta'),
								'search_items' => __('Procurar Prestação de conta'),
								'not_found' => __('Nenhuma Prestação de conta encontrada'),
								'not_found_in_trash' => __('Nenhuma Prestação de conta encontrada na lixeira'),
								'parent_item_colon' => ''
				);
				$args              = array(
								'labels' => $labels,
								'public' => true,
								'publicly_queryable' => true,
								'show_ui' => true,
								'query_var' => true,
								'menu_icon' => 'dashicons-visibility',
								'rewrite' => array(
												'slug' => 'transparencia',
												'with_front' => false
								),
								'capability_type' => 'post',
								'hierarchical' => false,
								'menu_position' => 5,
								'supports' => array(
												'title',
                                                'editor'
								)
				);
				register_post_type('transparencia', $args);
				flush_rewrite_rules();
}
register_taxonomy("Ano", array(
				"transparencia"
), array(
				"hierarchical" => true,
				"label" => "Ano",
				"singular_label" => "Ano",
				"rewrite" => array(
								'slug' => 'ano'
				),
				"public" => true,
				"show_ui" => true,
				"_builtin" => true
));
register_taxonomy("Tipo documento", array(
				"transparencia"
), array(
				"hierarchical" => true,
				"label" => "Tipo Documento",
				"singular_label" => "tipo-documento",
				"rewrite" => array(
								'slug' => 'tipo-documento'
				),
				"public" => true,
				"show_ui" => true,
				"_builtin" => true
));
// Filter to change the permalink
add_filter('post_link', 'transparencia_permalink', 1, 3);
add_filter('post_type_link', 'transparencia_permalink', 1, 3);
function transparencia_permalink($permalink, $post_id, $leavename)
{
	// con %brand% catturo il rewrite del Custom Post Type
	if (strpos($permalink, '%ano%') === FALSE)
					return $permalink;
	// Get post
	$post = get_post($post_id);
	if (!$post)
					return $permalink;
	// Get taxonomy terms
	$terms = wp_get_object_terms($post->ID, 'Ano');
	if (!is_wp_error($terms) && !empty($terms) && is_object($terms[0]))
					$taxonomy_slug = $terms[0]->slug;
	else
					$taxonomy_slug = 'no-brand';
	return str_replace('%Ano%', $taxonomy_slug, $permalink);
}
add_action("admin_init", "campos_personalizados_transparencia");
function campos_personalizados_transparencia()
{
				add_meta_box("upload_documento_transparencia", "Fa&ccedil;a o upload do documento", "upload_documento_transparencia", "transparencia", "normal", "low");
}
function upload_documento_transparencia()
{
				global $post;
				// Procura o valor da chave 'upload_file'
				$upload_documento_transparencia = get_post_meta($post->ID, 'upload_documento_transparencia', true);
?>

		<p>Clique no botão para fazer o upload de um documento. Após
			o término do upload, clique em <em>Inserir no post</em>.</p>
		<p>
			<input id="upload_image" type="text" size="80"
				name="upload_documento_transparencia" style="width: 85%;"
				value="<?php
				if (!empty($upload_documento_transparencia))
								echo $upload_documento_transparencia;
?>" />

			<input id="upload_image_button" type="button" class="button"
				value="Fazer upload" />
		</p>
		<?php
}
add_action('save_post_transparencia', 'save_details_post_transparencia');
function save_details_post_transparencia()
{
				global $post;
				update_post_meta($post->ID, "upload_documento_transparencia", $_POST["upload_documento_transparencia"]);
}

// Adiciona a funcao extra votos aos hooks ajax do WordPress.
add_action('wp_ajax_buscaTransparencia', 'buscaTransparencia');
add_action('wp_ajax_nopriv_buscaTransparencia', 'buscaTransparencia');

// Start Script add meta box button upload
add_action('admin_head', 'my_meta_uploader_script');
/*
 * O novo media uploader, baseado no post e nas discussões do site abaixo
 * http://www.webmaster-source.com/2010/01/08/using-the-wordpress-uploader-in-your-plugin-or-theme/
 */
function my_meta_uploader_script()
{
?>
			<script type="text/javascript">
				jQuery(document).ready(function() {

					var formfield;
					var header_clicked = false;

					jQuery( '#upload_image_button' ).click( function() {
						formfield = jQuery( '#upload_image' ).attr( 'name' );
						tb_show( '', 'media-upload.php?TB_iframe=true' );
						header_clicked = true;

						return false;
					});

					// Guarda o uploader original
					window.original_send_to_editor = window.send_to_editor;

					// Sobrescreve a função nativa e preenche o campo com a URL
					window.send_to_editor = function( html ) {
						if ( header_clicked ) {
							fileurl = jQuery( html ).attr( 'href' );
							jQuery( '#upload_image' ).val( fileurl );
							header_clicked = false;
							tb_remove();
						}
						else
						{
					  		window.original_send_to_editor( html );
					  	}
					}

				});
		  </script>
		<?php
}
function my_admin_scripts()
{
				wp_enqueue_script('media-upload');
				wp_enqueue_script('thickbox');
				//wp_register_script('my-upload', get_bloginfo('template_url') . '/functions/my-script.js', array('jquery','media-upload','thickbox'));
				wp_enqueue_script('my_meta_uploader_script');
}
function my_admin_styles()
{
				wp_enqueue_style('thickbox');
}
add_action('admin_print_scripts', 'my_admin_scripts');
add_action('admin_print_styles', 'my_admin_styles');
