<?php
/*
Personalizador del tema



*/




function bu_registro_modificador($wp_customize) {
	
	// Panel Encabezado
	$wp_customize->add_panel('bu_header_panel', array(

		'title' => __('Personalizar', 'minimal'),
		'description' => __('Opciones del encabezado', 'minimal'),
		'priority' => 35

	));
	
	// Seccion encabezado superior
	$wp_customize->add_section('bu_header_top', array(

		'title' => __('Redes Sociales', 'minimal'),
		'description' => __('Opciones para agregar redes sociales', 'minimal'),
		'priority' => 10,
		'panel' => 'bu_header_panel'

	));
	
	// Activar Redes sociales en menu principal
	$wp_customize->add_setting('bu_settings[top_header_redes]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('top_header_redes', array(
		'label' => __('Activar En El Menú principal', 'minimal'),
		'section' => 'bu_header_top',
		'settings' => 'bu_settings[top_header_redes]',
		'type' => 'checkbox'
	));
	
	// Activar Redes sociales en pie de pagina
	$wp_customize->add_setting('bu_settings[pie_redes]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('pie_redes', array(
		'label' => __('Activar En El Pie de Pagina', 'minimal'),
		'section' => 'bu_header_top',
		'settings' => 'bu_settings[pie_redes]',
		'type' => 'checkbox'
	));

	// Enlace Facebook
	$wp_customize->add_setting('bu_settings[top_header_facebook_link]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('top_header_facebook_link', array(
		'label' => __('Enlace de facebook', 'minimal'),
		'section' => 'bu_header_top',
		'settings' => 'bu_settings[top_header_facebook_link]'
	));



	// Enlace Twitter
	$wp_customize->add_setting('bu_settings[top_header_twitter_link]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('top_header_twitter_link', array(
		'label' => __('Enlace de twitter', 'minimal'),
		'section' => 'bu_header_top',
		'settings' => 'bu_settings[top_header_twitter_link]'
	));



	// Enlace Instagram
	$wp_customize->add_setting('bu_settings[top_header_instagram_link]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('top_header_instagram_link', array(
		'label' => __('Enlace de instagram', 'minimal'),
		'section' => 'bu_header_top',
		'settings' => 'bu_settings[top_header_instagram_link]'
	));
	
	// Enlace Youtube
	$wp_customize->add_setting('bu_settings[top_header_youtube_link]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('top_header_youtube_link', array(
		'label' => __('Enlace de Youtube', 'minimal'),
		'section' => 'bu_header_top',
		'settings' => 'bu_settings[top_header_youtube_link]'
	));
	
	
	
	
	
	
	
	
	
	
	
	
	// Seccion encabezado normal
	$wp_customize->add_section('bu_header', array(

		'title' => __('Encabezado normal', 'slan'),
		'description' => __('Opciones del encabezado normal', 'minimal'),
		'priority' => 20,
		'panel' => 'bu_header_panel'

	));


	// Logo
	$wp_customize->add_setting('bu_settings[logo]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
		'label' => __('Logo', 'minimal'),
		'section' => 'bu_header',
		'settings' => 'bu_settings[logo]'
	)));
	
	
	
	
	
	
	
	
	
	
	// Panel Pagina de inicio
	$wp_customize->add_panel('bu_homepage', array(

		'title' => __('Pagina de inicio', 'minimal'),
		'description' => __('Opciones de la página de inicio', 'minimal'),
		'priority' => 41

	));

	// Seccion Imagen Hero
	$wp_customize->add_section('bu_home_hero', array(

		'title' => __('Banner Slider', 'minimal'),
		'description' => __('Habilita el slider principal', 'minimal'),
		'priority' => 10,
		'panel' => 'bu_homepage'

	));

	// Mostrar seccion Imagen Hero
	$wp_customize->add_setting('bu_settings[mostrar_hero]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('mostrar_hero', array(
		'label' => __('Mostrar sección de Slider', 'minimal'),
		'section' => 'bu_home_hero',
		'settings' => 'bu_settings[mostrar_hero]',
		'type' => 'checkbox'
	));
	
	
	
	
	// imagen 1 seccion Imagen Hero
	$wp_customize->add_setting('bu_settings[mostrar_hero_imagen1]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mostrar_hero_imagen1', array(
		'label' => __('Seleccione la 1º imagen', 'minimal'),
		'section' => 'bu_home_hero',
		'settings' => 'bu_settings[mostrar_hero_imagen1]'
	)));
	
	// Titulo imagen 1
	$wp_customize->add_setting('bu_settings[titulo_hero_imagen1]', array(
		'default' => '',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('titulo_hero_imagen1', array(
		'label' => __('Titulo del 1º Slide', 'minimal'),
		'section' => 'bu_home_hero',
		'settings' => 'bu_settings[titulo_hero_imagen1]'
	));
	
	// Descripción imagen 1
	$wp_customize->add_setting('bu_settings[descripcion_hero_imagen1]', array(
		'default' => '',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('descripcion_hero_imagen1', array(
		'label' => __('Puede colocar una descripción', 'minimal'),
		'section' => 'bu_home_hero',
		'settings' => 'bu_settings[descripcion_hero_imagen1]'
	));
	
	// Texto del Boton imagen 1
	$wp_customize->add_setting('bu_settings[boton_hero_imagen1]', array(
		'default' => '',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('boton_hero_imagen1', array(
		'label' => __('Texto del botón', 'minimal'),
		'section' => 'bu_home_hero',
		'settings' => 'bu_settings[boton_hero_imagen1]'
	));
	
	// URL del Boton imagen 1
	$wp_customize->add_setting('bu_settings[boton_url_hero_imagen1]', array(
		'default' => '',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('boton_url_hero_imagen1', array(
		'label' => __('Url del botón', 'minimal'),
		'section' => 'bu_home_hero',
		'settings' => 'bu_settings[boton_url_hero_imagen1]'
	));
	
	
	
	// imagen 2 seccion Imagen Hero
	$wp_customize->add_setting('bu_settings[mostrar_hero_imagen2]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mostrar_hero_imagen2', array(
		'label' => __('Seleccione la 2º imagen', 'minimal'),
		'section' => 'bu_home_hero',
		'settings' => 'bu_settings[mostrar_hero_imagen2]'
	)));
	
	
	// Titulo imagen 2
	$wp_customize->add_setting('bu_settings[titulo_hero_imagen2]', array(
		'default' => '',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('titulo_hero_imagen2', array(
		'label' => __('Titulo del 2º Slide', 'minimal'),
		'section' => 'bu_home_hero',
		'settings' => 'bu_settings[titulo_hero_imagen2]'
	));
	
	// Descripción imagen 2
	$wp_customize->add_setting('bu_settings[descripcion_hero_imagen2]', array(
		'default' => '',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('descripcion_hero_imagen2', array(
		'label' => __('Puede colocar una descripción', 'minimal'),
		'section' => 'bu_home_hero',
		'settings' => 'bu_settings[descripcion_hero_imagen2]'
	));
	
	// Texto del Boton imagen 2
	$wp_customize->add_setting('bu_settings[boton_hero_imagen2]', array(
		'default' => '',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('boton_hero_imagen2', array(
		'label' => __('Texto del botón', 'minimal'),
		'section' => 'bu_home_hero',
		'settings' => 'bu_settings[boton_hero_imagen2]'
	));
	
	// URL del Boton imagen 2
	$wp_customize->add_setting('bu_settings[boton_url_hero_imagen2]', array(
		'default' => '',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('boton_url_hero_imagen2', array(
		'label' => __('Url del botón', 'minimal'),
		'section' => 'bu_home_hero',
		'settings' => 'bu_settings[boton_url_hero_imagen2]'
	));
	
	
	
	
	// imagen 3 seccion Imagen Hero
	$wp_customize->add_setting('bu_settings[mostrar_hero_imagen3]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mostrar_hero_imagen3', array(
		'label' => __('Seleccione la 3º imagen', 'minimal'),
		'section' => 'bu_home_hero',
		'settings' => 'bu_settings[mostrar_hero_imagen3]'
	)));
	
	
	// Titulo imagen 3
	$wp_customize->add_setting('bu_settings[titulo_hero_imagen3]', array(
		'default' => '',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('titulo_hero_imagen3', array(
		'label' => __('Titulo del 3º Slide', 'minimal'),
		'section' => 'bu_home_hero',
		'settings' => 'bu_settings[titulo_hero_imagen3]'
	));
	
	// Descripción imagen 3
	$wp_customize->add_setting('bu_settings[descripcion_hero_imagen3]', array(
		'default' => '',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('descripcion_hero_imagen3', array(
		'label' => __('Puede colocar una descripción', 'minimal'),
		'section' => 'bu_home_hero',
		'settings' => 'bu_settings[descripcion_hero_imagen3]'
	));
	
	// Texto del Boton imagen 3
	$wp_customize->add_setting('bu_settings[boton_hero_imagen3]', array(
		'default' => '',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('boton_hero_imagen3', array(
		'label' => __('Texto del botón', 'minimal'),
		'section' => 'bu_home_hero',
		'settings' => 'bu_settings[boton_hero_imagen3]'
	));
	
	// URL del Boton imagen 3
	$wp_customize->add_setting('bu_settings[boton_url_hero_imagen3]', array(
		'default' => '',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('boton_url_hero_imagen3', array(
		'label' => __('Url del botón', 'minimal'),
		'section' => 'bu_home_hero',
		'settings' => 'bu_settings[boton_url_hero_imagen3]'
	));



	
	
	
	
	
	// Seccion Blog
	$wp_customize->add_section('bu_last_posts', array(

		'title' => __('Blog', 'minimal'),
		'description' => __('Opciones de sección de artículos del blog', 'minimal'),
		'priority' => 20,
		'panel' => 'bu_homepage'

	));

	// Mostrar seccion ultimos articulos
	$wp_customize->add_setting('bu_settings[show_last_posts_section]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('show_last_posts_section', array(
		'label' => __('Mostrar sección de últimos artículos', 'minimal'),
		'section' => 'bu_last_posts',
		'settings' => 'bu_settings[show_last_posts_section]',
		'type' => 'checkbox'
	));

	// Titulo seccion ultimos articulos
	$wp_customize->add_setting('bu_settings[last_posts_section_title]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('last_posts_section_title', array(
		'label' => __('Titulo de seccion ultimos articulos', 'minimal'),
		'section' => 'bu_last_posts',
		'settings' => 'bu_settings[last_posts_section_title]'
	));
	
	
	// Descripción seccion ultimos articulos
	$wp_customize->add_setting('bu_settings[last_posts_section_description]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('last_posts_section_description', array(
		'label' => __('Descripción de seccion ultimos articulos', 'minimal'),
		'section' => 'bu_last_posts',
		'settings' => 'bu_settings[last_posts_section_description]'
	));
	
	
	
	// Seccion Servicios
	$wp_customize->add_section('bu_servicios', array(

		'title' => __('Servicios', 'minimal'),
		'description' => __('Opciones de sección de servicios', 'minimal'),
		'priority' => 30,
		'panel' => 'bu_homepage'

	));

	// Mostrar seccion servicios
	$wp_customize->add_setting('bu_settings[bu_mostrar_servicios]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('bu_mostrar_servicios', array(
		'label' => __('Mostrar sección de Servicios', 'minimal'),
		'section' => 'bu_servicios',
		'settings' => 'bu_settings[bu_mostrar_servicios]',
		'type' => 'checkbox'
	));
	
	// Titulo seccion servicios
	$wp_customize->add_setting('bu_settings[servicios_title]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('servicios_title', array(
		'label' => __('Titulo de seccion Servicios', 'minimal'),
		'section' => 'bu_servicios',
		'settings' => 'bu_settings[servicios_title]'
	));
	
	
	// Descripción seccion servicios
	$wp_customize->add_setting('bu_settings[servicios_description]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('servicios_description', array(
		'label' => __('Descripción de seccion servicios', 'minimal'),
		'section' => 'bu_servicios',
		'settings' => 'bu_settings[servicios_description]'
	));
	
	
	// Texto boton servicios
	$wp_customize->add_setting('bu_settings[servicios_boton]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('servicios_boton', array(
		'label' => __('Texto de boton Servicios', 'minimal'),
		'section' => 'bu_servicios',
		'settings' => 'bu_settings[servicios_boton]'
	));
	
	
	// URL de boton servicios
	$wp_customize->add_setting('bu_settings[servicios_boton_url]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('servicios_boton_url', array(
		'label' => __('URL de boton', 'minimal'),
		'section' => 'bu_servicios',
		'settings' => 'bu_settings[servicios_boton_url]'
	));
	

	
	
	
	
	
	
	// Seccion Proyectos realizados
	$wp_customize->add_section('bu_proyectos', array(

		'title' => __('Proyectos realizados', 'minimal'),
		'description' => __('Opciones de sección de proyectos realizados para mostrar', 'minimal'),
		'priority' => 40,
		'panel' => 'bu_homepage'

	));

	// Mostrar seccion proyectos
	$wp_customize->add_setting('bu_settings[bu_mostrar_proyectos]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('bu_mostrar_proyectos', array(
		'label' => __('Mostrar sección de Proyectos', 'minimal'),
		'section' => 'bu_proyectos',
		'settings' => 'bu_settings[bu_mostrar_proyectos]',
		'type' => 'checkbox'
	));
	
	// Titulo seccion Proyectos
	$wp_customize->add_setting('bu_settings[proyectos_titulo]', array(
		'default' => '',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('proyectos_titulo', array(
		'label' => __('Titulo de seccion', 'minimal'),
		'section' => 'bu_proyectos',
		'settings' => 'bu_settings[proyectos_titulo]'
	));
	
	$wp_customize->add_setting('bu_settings[proyectos_boton_texto]', array(
		'default' => '',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('proyectos_boton_texto', array(
		'label' => __('Texto de boton', 'minimal'),
		'section' => 'bu_proyectos',
		'settings' => 'bu_settings[proyectos_boton_texto]'
	));
	
	$wp_customize->add_setting('bu_settings[proyectos_boton_url]', array(
		'default' => '',
		'type' => 'theme_mod'
	));
	
	$wp_customize->add_control('proyectos_boton_url', array(
		'label' => __('Url de boton', 'minimal'),
		'section' => 'bu_proyectos',
		'settings' => 'bu_settings[proyectos_boton_url]',
		'type' => 'url'
	));
	
	
	
	
	
	
	// Seccion Contador
	$wp_customize->add_section('bu_contador', array(

		'title' => __('Contador', 'minimal'),
		'description' => __('Opciones de sección de contador', 'minimal'),
		'priority' => 50,
		'panel' => 'bu_homepage'

	));

	// Mostrar seccion contador
	$wp_customize->add_setting('bu_settings[bu_mostrar_contador]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('bu_mostrar_contador', array(
		'label' => __('Mostrar sección de contador', 'minimal'),
		'section' => 'bu_contador',
		'settings' => 'bu_settings[bu_mostrar_contador]',
		'type' => 'checkbox'
	));
	
	// imagen de fondo seccion contador
	$wp_customize->add_setting('bu_settings[mostrar_contador_imagen]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mostrar_contador_imagen', array(
		'label' => __('Seleccione imagen de fondo para la sección', 'minimal'),
		'section' => 'bu_contador',
		'settings' => 'bu_settings[mostrar_contador_imagen]'
	)));
	
	// Titulo contador izquierda
	$wp_customize->add_setting('bu_settings[contador_titulo_izq]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('contador_titulo_izq', array(
		'label' => __('Titulo de contador izquierdo', 'minimal'),
		'section' => 'bu_contador',
		'settings' => 'bu_settings[contador_titulo_izq]'
	));
	
	// Numero contador izquierda
	$wp_customize->add_setting('bu_settings[contador_numero_izq]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('contador_numero_izq', array(
		'label' => __('Cantidad a mostrar en el contador izquierdo', 'minimal'),
		'section' => 'bu_contador',
		'settings' => 'bu_settings[contador_numero_izq]',
		'type' => 'number'
	));
	
	// Titulo contador centro
	$wp_customize->add_setting('bu_settings[contador_titulo_cen]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('contador_titulo_cen', array(
		'label' => __('Titulo de contador del centro', 'minimal'),
		'section' => 'bu_contador',
		'settings' => 'bu_settings[contador_titulo_cen]'
	));
	
	// Numero contador izquierda
	$wp_customize->add_setting('bu_settings[contador_numero_cen]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('contador_numero_cen', array(
		'label' => __('Cantidad a mostrar en el contador del centro', 'minimal'),
		'section' => 'bu_contador',
		'settings' => 'bu_settings[contador_numero_cen]',
		'type' => 'number'
	));
	
	// Titulo contador derecha
	$wp_customize->add_setting('bu_settings[contador_titulo_der]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('contador_titulo_der', array(
		'label' => __('Titulo de contador derecha', 'minimal'),
		'section' => 'bu_contador',
		'settings' => 'bu_settings[contador_titulo_der]'
	));
	
	// Numero contador izquierda
	$wp_customize->add_setting('bu_settings[contador_numero_der]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('contador_numero_der', array(
		'label' => __('Cantidad a mostrar en el contador derecho', 'minimal'),
		'section' => 'bu_contador',
		'settings' => 'bu_settings[contador_numero_der]',
		'type' => 'number'
	));
	
	
	
	
	

	
	// Panel pie de pagina
	$wp_customize->add_panel('bu_pie_panel', array(

		'title' => __('Pie de página', 'minimal'),
		'description' => __('Opciones de pie de pagina', 'minimal'),
		'priority' => 60

	));
	
	// Seccion Información 
	$wp_customize->add_section('bu_pie_info', array(

		'title' => __('Información', 'minimal'),
		'description' => __('Opciones para agregar información de copyrights', 'minimal'),
		'priority' => 10,
		'panel' => 'bu_pie_panel'

	));
	
	// Modificar información de copy
	$wp_customize->add_setting('bu_settings[pie_info]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('pie_info', array(
		'label' => __('Colocar Información', 'minimal'),
		'section' => 'bu_pie_info',
		'settings' => 'bu_settings[pie_info]'
	));


}

add_action('customize_register', 'bu_registro_modificador');