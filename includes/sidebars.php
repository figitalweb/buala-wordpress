<?php



function bu_sidebar(){
	
	register_sidebar(array(
	
		'name'          => __( 'Barra Lateral', 'minimal' ),
        'id'            => 'main_sidebar',
        'description'   => __( 'Widgets para el blog', 'minimal' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
	
	));
	
	register_sidebar(array(
	
		'name'          => __( 'Pie de página zona derecha', 'minimal' ),
        'id'            => 'sidebar-footer-der',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
	
	));
	
	
	register_sidebar(array(
	
		'name'          => __( 'Pie de página zona centro', 'minimal' ),
        'id'            => 'sidebar-footer-cent',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
	
	));
	
	register_sidebar(array(
	
		'name'          => __( 'Pie de página zona izquierda', 'minimal' ),
        'id'            => 'sidebar-footer-izq',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
	
	));
}

add_action('widgets_init', 'bu_sidebar');