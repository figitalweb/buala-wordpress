<?php

/*

Archivo principal para todas las funciones del tema


@package Minimal
@subpackage Minimal Buala
@Since 1.0

*/


define('RUTATEMA', get_stylesheet_directory_uri());

define('IMAGEN', RUTATEMA . '/images');


// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1910;

if ( ! function_exists('bu_custom_theme_features') ) {

// Register Theme Features
function bu_custom_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'video', 'audio' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails');

	// Add theme support for Custom Background
	$background_args = array(
		'default-color'          => 'ffffff',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-background', $background_args );
	
	
	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for Translation
	load_theme_textdomain( 'mil', get_template_directory() . '/languages' );
	
	
	//añadiendo tamaño de imagen personalizado
	add_image_size('blog_imagen', 600, 400, true);
	add_image_size('imagen_proyectos', 555, 400, true);
}
add_action( 'after_setup_theme', 'bu_custom_theme_features' );

}

require_once('includes/scripts-style.php');

require_once('includes/menus.php');

require_once('includes/sidebars.php');

require_once('includes/personalizador-tema.php');

// Cambiar cantidad de palabras de extracto
function bu_custom_the_excerpt($length){
	$length = 38;
	return $length;
}

if ( ! function_exists('bu_servicios') ) {

// Register Custom Post Type
function bu_servicios() {

	$labels = array(
		'name'                  => _x( 'Servicios', 'Post Type General Name', 'minimal' ),
		'singular_name'         => _x( 'Servicio', 'Post Type Singular Name', 'minimal' ),
		'menu_name'             => __( 'Servicios', 'minimal' ),
		'name_admin_bar'        => __( 'Servicios', 'minimal' ),
		'archives'              => __( 'Archivo de servicios', 'minimal' ),
		'attributes'            => __( 'Atributos de servicios', 'minimal' ),
		'parent_item_colon'     => __( 'Servicio Padre:', 'minimal' ),
		'all_items'             => __( 'Todos los servicios', 'minimal' ),
		'add_new_item'          => __( 'Añadir nuevo servicio', 'minimal' ),
		'add_new'               => __( 'Añadir nuevo', 'minimal' ),
		'new_item'              => __( 'Nuevo servicio', 'minimal' ),
		'edit_item'             => __( 'Editar servicio', 'minimal' ),
		'update_item'           => __( 'Actualizar servicio', 'minimal' ),
		'view_item'             => __( 'Ver servicio', 'minimal' ),
		'view_items'            => __( 'Ver servicios', 'minimal' ),
		'search_items'          => __( 'Bucar servicio', 'minimal' ),
		'not_found'             => __( 'ningún servicio', 'minimal' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'minimal' ),
		'featured_image'        => __( 'Imagen destacada', 'minimal' ),
		'set_featured_image'    => __( 'Establecer Imagen destacada', 'minimal' ),
		'remove_featured_image' => __( 'Quitar Imagen destacada', 'minimal' ),
		'use_featured_image'    => __( 'Usar como Imagen destacada', 'minimal' ),
		'insert_into_item'      => __( 'Insertar en servicio', 'minimal' ),
		'uploaded_to_this_item' => __( 'Subir a servicio', 'minimal' ),
		'items_list'            => __( 'Lista de servicios', 'minimal' ),
		'items_list_navigation' => __( 'Navegación en lista de servicios', 'minimal' ),
		'filter_items_list'     => __( 'Filtrar lista de servicios', 'minimal' ),
	);
	$args = array(
		'label'                 => __( 'Servicio', 'minimal' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'servicios', $args );

}
add_action( 'init', 'bu_servicios', 0 );

}


if ( ! function_exists('proyectos') ) {

// Register Custom Post Type
function proyectos() {

	$labels = array(
		'name'                  => _x( 'Proyectos', 'Post Type General Name', 'minimal' ),
		'singular_name'         => _x( 'Proyecto', 'Post Type Singular Name', 'minimal' ),
		'menu_name'             => __( 'Proyectos', 'minimal' ),
		'name_admin_bar'        => __( 'Proyectos', 'minimal' ),
		'archives'              => __( 'Archivos de proyectos', 'minimal' ),
		'attributes'            => __( 'Atributos de proyectos', 'minimal' ),
		'parent_item_colon'     => __( 'Proyecto padre:', 'minimal' ),
		'all_items'             => __( 'Todos los proyectos', 'minimal' ),
		'add_new_item'          => __( 'Añadir nuevo proyecto', 'minimal' ),
		'add_new'               => __( 'Añadir Nuevo', 'minimal' ),
		'new_item'              => __( 'Nuevo proyecto', 'minimal' ),
		'edit_item'             => __( 'Editar proyecto', 'minimal' ),
		'update_item'           => __( 'Actualizar proyecto', 'minimal' ),
		'view_item'             => __( 'Ver proyecto', 'minimal' ),
		'view_items'            => __( 'Ver proyectos', 'minimal' ),
		'search_items'          => __( 'Buscar proyecto', 'minimal' ),
		'not_found'             => __( 'No se encontró', 'minimal' ),
		'not_found_in_trash'    => __( 'No se encontró en la papelera', 'minimal' ),
		'featured_image'        => __( 'Imagen destacada', 'minimal' ),
		'set_featured_image'    => __( 'Configuración de Imagen destacada', 'minimal' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'minimal' ),
		'use_featured_image'    => __( 'Usar como Imagen destacada', 'minimal' ),
		'insert_into_item'      => __( 'Insertar proyecto', 'minimal' ),
		'uploaded_to_this_item' => __( 'Actualizar estos proyectos', 'minimal' ),
		'items_list'            => __( 'Lista de proyectos', 'minimal' ),
		'items_list_navigation' => __( 'Navegación en lista de proyectos', 'minimal' ),
		'filter_items_list'     => __( 'Filtrar lista de proyectos', 'minimal' ),
	);
	$args = array(
		'label'                 => __( 'Proyecto', 'minimal' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'proyectos', $args );

}
add_action( 'init', 'proyectos', 0 );

}


add_filter('excerpt_length', 'bu_custom_the_excerpt');

// Modificando estructura de campos de commentarios
add_filter( 'comment_form_defaults', 'dcms_modify_fields_form' );

function dcms_modify_fields_form( $args ){

	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$author = '<input placeholder="'.__( 'Name' ) . ( $req ? ' *' : '' ).'" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30"' . $aria_req . ' />';
	$email = '<div class="fields-wrap"><input placeholder="'.__( 'Email' ) . ( $req ? ' *' : '' ).'" id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) .'" size="30"' . $aria_req . ' />';
	$url = '<input placeholder="'.__( 'Website' ).'" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .'" size="30" /></div>';
	$comment = '<textarea placeholder="'. _x( 'Comment', 'noun' ).'" id="comment" name="comment" cols="80" rows="8" aria-required="true"></textarea>';

	$args['fields']['author'] = $author;
	$args['fields']['email'] = $email;
	$args['fields']['url'] = $url;
	$args['comment_field'] = $comment;

	return $args;

}

// cambiando oreden del formulario de comentarios
add_filter( 'comment_form_fields', 'dcms_modify_order_fields' );

function dcms_modify_order_fields( $fields ){
	$val = $fields['comment'];
	unset($fields['comment']);

	$fields += array('comment' => $val );

	return $fields;
}
