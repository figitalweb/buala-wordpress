<?php


function bu_menus(){
	
	register_nav_menus(array(
	
		'menu-principal'=> __('Menú principal del encabezado', 'minimal')
		
	));
}

add_action('init', 'bu_menus');