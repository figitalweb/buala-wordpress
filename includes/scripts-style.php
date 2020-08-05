<?php

/*

Archivo principal para cargar y registrar los estilos y scripts


@package Minimal
@subpackage Minimal Buala
@Since 1.0

*/


/*

Registro y carga de estilos

*/
function mil_theme_style(){
	
	// registro de estilos
	wp_register_style('animate', RUTATEMA . '/css/animate.css', '', '1.0', 'all');
	wp_register_style('icomoon', RUTATEMA . '/css/icomoon.css', '', '1.0.0', 'all');
	wp_register_style('bootstrap', RUTATEMA . '/css/bootstrap.css', '', '3.3.5', 'all');
	wp_register_style('flexslider', RUTATEMA . '/css/flexslider.css', '', '2.6.0', 'all');
	
	
	wp_register_style('bu_style', get_stylesheet_uri(), array(), '1.0', 'all');
	
	// cargar los estilos
	
	wp_enqueue_style('animate');
	wp_enqueue_style('icomoon');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('flexslider');
	wp_enqueue_style('bu_style');
	
}

add_action('wp_enqueue_scripts', 'mil_theme_style');


/*

Registro y carga de scripts

*/

function mil_theme_scripts(){
	
	// registro de scripts
	wp_deregister_script('jquery');
	wp_register_script('jquery', RUTATEMA . '/js/jquery.min.js', array(), '2.1.0', true);
	
	wp_register_script('easing', RUTATEMA . '/js/jquery.easing.1.3.js', array('jquery'), '1.3.0', true);
	wp_register_script('bootstrap', RUTATEMA . '/js/bootstrap.min.js', array('jquery', 'easing'), '3.3.5', true);
	wp_register_script('points', RUTATEMA . '/js/jquery.waypoints.min.js', array('jquery', 'bootstrap'), '4.0.0', true);
	wp_register_script('count', RUTATEMA . '/js/jquery.countTo.js', array('jquery', 'points'), '1.0.0', true);
	wp_register_script('flexslider', RUTATEMA . '/js/jquery.flexslider-min.js', array('jquery', 'count'), '2.6.0', true);
	wp_register_script('main-script', RUTATEMA . '/js/main.js',array('jquery', 'flexslider'), '1.0.0', true);
	
	wp_register_script('modernizr', RUTATEMA . '/js/modernizr-2.6.2.min.js', array('jquery', 'main-script'), '2.6.2', false);
	wp_register_script('respond', RUTATEMA . '/js/respond.min.js', array('jquery', 'modernizr'), '1.4.2', false);	
	
	
	
	// carga de scripts
	wp_enqueue_script('respond');
	
	
}

add_action('wp_enqueue_scripts', 'mil_theme_scripts');