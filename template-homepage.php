<?php

/*
Template name: Pagina de Inicio



*/
?>

<?php get_header(); ?>

<?php 
        $options = get_theme_mod('bu_settings');

        // Seccion hero imagen
        if ( isset( $options['mostrar_hero'] ) ) {
            $mostrar_hero = $options['mostrar_hero'];
        } else{
            $mostrar_hero = false;
        }
		// imagen 1
		if ( ! empty( $options['mostrar_hero_imagen1'] ) ) {
            $mostrar_hero_imagen1 = $options['mostrar_hero_imagen1'];
        } else{
            $mostrar_hero_imagen1 = IMAGEN . '/images/slide_1.jpg';
        }
		if ( ! empty($options['titulo_hero_imagen1']) ) {
            $titulo_hero_imagen1 = $options['titulo_hero_imagen1'];
        }
		if ( ! empty($options['descripcion_hero_imagen1']) ) {
            $descripcion_hero_imagen1 = $options['descripcion_hero_imagen1'];
        }
		if ( ! empty($options['boton_hero_imagen1']) ) {
            $boton_hero_imagen1 = $options['boton_hero_imagen1'];
        }
		if ( ! empty($options['boton_url_hero_imagen1']) ) {
            $boton_url_hero_imagen1 = $options['boton_url_hero_imagen1'];
        }

		
		// imagen 2
		if ( ! empty( $options['mostrar_hero_imagen2'] ) ) {
            $mostrar_hero_imagen2 = $options['mostrar_hero_imagen2'];
        } /*else{
            $mostrar_hero_imagen2 = IMAGEN . '/images/slide_2.jpg';
        }*/
		if ( ! empty($options['titulo_hero_imagen2']) ) {
            $titulo_hero_imagen2 = $options['titulo_hero_imagen2'];
        }
		if ( ! empty($options['descripcion_hero_imagen2']) ) {
            $descripcion_hero_imagen2 = $options['descripcion_hero_imagen2'];
        }
		if ( ! empty($options['boton_hero_imagen2']) ) {
            $boton_hero_imagen2 = $options['boton_hero_imagen2'];
        }
		if ( ! empty($options['boton_url_hero_imagen2']) ) {
            $boton_url_hero_imagen2 = $options['boton_url_hero_imagen2'];
        }

		// imagen 3
		if ( ! empty( $options['mostrar_hero_imagen3'] ) ) {
            $mostrar_hero_imagen3 = $options['mostrar_hero_imagen3'];
        } /*else{
            $mostrar_hero_imagen3 = IMAGEN . '/images/slide_3.jpg';
        }*/
		if ( ! empty($options['titulo_hero_imagen3']) ) {
            $titulo_hero_imagen3 = $options['titulo_hero_imagen3'];
        }
		if ( ! empty($options['descripcion_hero_imagen3']) ) {
            $descripcion_hero_imagen3 = $options['descripcion_hero_imagen3'];
        }
		if ( ! empty($options['boton_hero_imagen3']) ) {
            $boton_hero_imagen3 = $options['boton_hero_imagen3'];
        }
		if ( ! empty($options['boton_url_hero_imagen3']) ) {
            $boton_url_hero_imagen3 = $options['boton_url_hero_imagen3'];
        }


        // Titulo seccion blog
        if ( ! empty($options['last_posts_section_title']) ) {
            $last_posts_section_title = $options['last_posts_section_title'];
        }
		
		if ( ! empty($options['last_posts_section_description']) ) {
            $last_posts_section_description = $options['last_posts_section_description'];
        }
	
        if ( isset( $options['show_last_posts_section'] ) ) {
            $show_last_posts_section = $options['show_last_posts_section'];
        } else{
            $show_last_posts_section = false;
        }


		// Seccion Servicios
        if ( isset( $options['bu_mostrar_servicios'] ) ) {
            $bu_mostrar_servicios = $options['bu_mostrar_servicios'];
        } else{
            $bu_mostrar_servicios = false;
        }

		if ( ! empty($options['servicios_title']) ) {
            $servicios_title = $options['servicios_title'];
        }
		
		if ( ! empty($options['servicios_description']) ) {
            $servicios_description = $options['servicios_description'];
        }
		if ( ! empty($options['servicios_boton']) ) {
            $servicios_boton = $options['servicios_boton'];
        }
		
		if ( ! empty($options['servicios_boton_url']) ) {
            $servicios_boton_url = $options['servicios_boton_url'];
        }



		// Seccion Proyectos
        if ( isset( $options['bu_mostrar_proyectos'] ) ) {
            $bu_mostrar_proyectos = $options['bu_mostrar_proyectos'];
        } else{
            $bu_mostrar_proyectos = false;
        }

		if ( ! empty($options['proyectos_titulo']) ) {
            $proyectos_titulo = $options['proyectos_titulo'];
        }
		if ( ! empty($options['proyectos_boton_texto']) ) {
            $proyectos_boton_texto = $options['proyectos_boton_texto'];
        }
		if ( ! empty($options['proyectos_boton_url']) ) {
            $proyectos_boton_url = $options['proyectos_boton_url'];
        }
		


		// Seccion contador
        if ( isset( $options['bu_mostrar_contador'] ) ) {
            $bu_mostrar_contador = $options['bu_mostrar_contador'];
        } else{
            $bu_mostrar_contador = false;
        }
		if ( ! empty( $options['mostrar_contador_imagen'] ) ) {
            $mostrar_contador_imagen = $options['mostrar_contador_imagen'];
        }
				// contador titulo y numeros izquierda
		if ( ! empty($options['contador_titulo_izq']) ) {
            $contador_titulo_izq = $options['contador_titulo_izq'];
        }
		
		if ( ! empty($options['contador_numero_izq']) ) {
            $contador_numero_izq = $options['contador_numero_izq'];
        }

				// contador titulo y numeros centro
		if ( ! empty($options['contador_titulo_cen']) ) {
            $contador_titulo_cen = $options['contador_titulo_cen'];
        }
		
		if ( ! empty($options['contador_numero_cen']) ) {
            $contador_numero_cen = $options['contador_numero_cen'];
        }

				// contador titulo y numeros derecha
		if ( ! empty($options['contador_titulo_der']) ) {
            $contador_titulo_der = $options['contador_titulo_der'];
        }
		
		if ( ! empty($options['contador_numero_der']) ) {
            $contador_numero_der = $options['contador_numero_der'];
        }

 ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div id="fh5co-intro-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box text-center">
						<h2 class="intro-heading"><?php the_title(); ?></h2>
						<p><span><?php the_content(); ?></span></p>
					</div>
				</div>
			</div>
</div>
<?php endwhile; endif; ?>

<?php if($mostrar_hero == true): ?>
<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
				
				
			   	<li style="background-image: url(<?php echo $mostrar_hero_imagen1; ?>">	
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
			   				<div class="slider-text-inner">
								<?php if(isset($titulo_hero_imagen1)): ?>
			   					<h2><?php echo $titulo_hero_imagen1; ?></h2>
								<?php endif; ?>
								
								<?php if(isset($descripcion_hero_imagen1)): ?>
			   					<span><?php echo $descripcion_hero_imagen1; ?> </span>
								<?php endif; ?>
								<?php if(isset ($boton_hero_imagen1)): ?>
								<p></p>
								<p class="text-left view-button animate-box"><a href="<?php echo $boton_url_hero_imagen1; ?>" class="btn btn-primary btn-lg"><?php echo $boton_hero_imagen1; ?></a></p>
								<?php endif; ?>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
					
			   	<?php if(! empty($mostrar_hero_imagen2)): ?>
			   	<li style="background-image: url(<?php echo $mostrar_hero_imagen2; ?>">
				
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<?php if(isset($titulo_hero_imagen2)): ?>
			   					<h2><?php echo $titulo_hero_imagen2; ?></h2>
								<?php endif; ?>
								
								<?php if(isset($descripcion_hero_imagen2)): ?>
			   					<span><?php echo $descripcion_hero_imagen2; ?> </span>
								<?php endif; ?>
								<?php if(isset ($boton_hero_imagen2)): ?>
								<p></p>
								<p class="text-left view-button animate-box"><a href="<?php echo $boton_url_hero_imagen2; ?>" class="btn btn-primary btn-lg"><?php echo $boton_hero_imagen2; ?></a></p>
								<?php endif; ?>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
				<?php endif; ?>
					
			   	<?php if(! empty($mostrar_hero_imagen3)): ?>
			   	<li style="background-image: url(<?php echo $mostrar_hero_imagen3; ?>">
							
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<?php if(isset($titulo_hero_imagen3)): ?>
			   					<h2><?php echo $titulo_hero_imagen3; ?></h2>
								<?php endif; ?>
								
								<?php if(isset($descripcion_hero_imagen3)): ?>
			   					<span><?php echo $descripcion_hero_imagen3; ?> </span>
								<?php endif; ?>
								<?php if(isset ($boton_hero_imagen3)): ?>
								<p></p>
								<p class="text-left view-button animate-box"><a href="<?php echo $boton_url_hero_imagen3; ?>" class="btn btn-primary btn-lg"><?php echo $boton_hero_imagen3; ?></a></p>
								<?php endif; ?>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
				<?php endif; ?>
				
			  	</ul>
		  	</div>
</aside>
<?php endif; ?>


<?php if($bu_mostrar_servicios == true): ?>
<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box ">
						<div class="heading-section">
							
							<?php if(isset($servicios_title)): ?>
							<h2><?php echo $servicios_title; ?></h2>
							<?php endif; ?>
							
							<?php if(isset($servicios_description)): ?>
							<p><?php echo $servicios_description; ?></p>
							<?php endif; ?>
						</div>
					</div>
				</div>
				
				<?php $bu_home_servicios = new WP_Query(array(

						'post_type' => 'servicios',
						'posts_per_page' => 6

					)); ?>
				
				<?php if($bu_home_servicios->have_posts()): ?>
				<div class="row">
					
					<?php while($bu_home_servicios->have_posts()): $bu_home_servicios->the_post(); ?>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<div class="icon">
								<?php if(has_post_thumbnail()): ?>
								<span><?php the_post_thumbnail('thumbnail'); ?></span>
								<?php else: ?>
								<span><i class="icon-clipboard"></i></span>
								<?php endif; ?>
							</div>
							<h3><?php the_title(); ?> </h3>
							<p><?php the_excerpt(); ?></p>
						</div>
					</div>
					<?php endwhile; ?>
					
				</div>
				<?php if(isset($servicios_boton) || isset($servicios_boton_url)): ?>
					<br>
					<p class="text-center view-button animate-box"><a href="<?php echo esc_url($servicios_boton_url); ?>" class="btn btn-primary btn-outline btn-lg"><?php echo $servicios_boton; ?></a></p>
					<?php endif; ?>
				<?php endif; ?>
			</div>
</div>
<?php endif; ?>

<?php if($show_last_posts_section == true): ?>
<div id="fh5co-product-section">
			<div class="container">
				<div class="row">
					<?php if(have_posts()): while(have_posts()): the_post(); ?>
						<div class="col-md-6 col-md-offset-3 text-center animate-box heading-section">
							<?php if(isset($last_posts_section_title)): ?>
							<h2><?php echo $last_posts_section_title; ?> </h2>
							<?php endif; ?>
							
							<?php if(isset($last_posts_section_description)): ?>
							<p><?php echo $last_posts_section_description; ?></p>
							<?php endif; ?>
						</div>
					<?php endwhile; endif; ?>
					<?php $bu_home_posts = new WP_Query(array(

						'post_type' => 'post',
						'posts_per_page' => 3

					)); ?>
					<?php if($bu_home_posts->have_posts()): while($bu_home_posts->have_posts()): $bu_home_posts->the_post(); ?>
					
					<div <?php post_class('col-md-4 prod text-center animate-box'); ?> >
						<div class="product" >
							
							<a href="<?php the_permalink(); ?>" class="view">
								<?php the_post_thumbnail('blog_imagen'); ?>
							</a> 
						</div>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
						<span class="price"><?php the_excerpt(); ?> </span>
						<p class="text-center view-button animate-box"><a href="<?php the_permalink(); ?> "class="btn btn-primary btn-outline btn-lg"><?php _e('Ver Más', 'minimal'); ?> </a></p>
					</div>
					
					
					<?php endwhile; endif; ?>
						
					
				</div>
				
			</div>
			
</div>
<?php endif; ?>

<?php if($bu_mostrar_proyectos == true): ?>
<div id="fh5co-work-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box ">
						
						<?php if(isset($proyectos_titulo)): ?>
						<div class="heading-section">
							<h2><?php echo $proyectos_titulo; ?></h2>
						</div>
						<?php endif; ?>
					</div>
				</div>
				
				<?php $bu_home_proyectos = new WP_Query(array(

						'post_type' => 'proyectos',
						'posts_per_page' => 4

					)); ?>
				
				<?php if($bu_home_proyectos->have_posts()): ?>
				
				<div class="row">
					
					<?php while($bu_home_proyectos->have_posts()): $bu_home_proyectos->the_post(); ?>
					<div class="col-md-6 prod text-center animate-box">
						<div class="work" >
							<a href="<?php the_permalink(); ?>" class="view">
								<?php the_post_thumbnail('imagen_proyectos'); ?>
							</a>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</div>
					</div>
					<?php endwhile; ?>
					
					<?php if(isset($proyectos_boton_texto) || isset($proyectos_boton_url)): ?>
					<p class="text-center view-button animate-box"><a href="<?php echo esc_url($proyectos_boton_url); ?>" class="btn btn-primary btn-outline btn-lg"><?php echo $proyectos_boton_texto; ?></a></p>
					<?php endif; ?>
				</div>
				<?php endif; ?>
			</div>
</div>
<?php endif; ?>


<?php if($bu_mostrar_contador == true): ?>

<?php if(empty($mostrar_contador_imagen)): ?>
<div class="fh5co-counters" style="background-color: #2F74FF" data-stellar-background-ratio="0.5" id="counter-animate">
	<?php else: ?>
	<div class="fh5co-counters" style="background-image: url(<?php echo $mostrar_contador_imagen; ?>);" data-stellar-background-ratio="0.5" id="counter-animate">
	<?php endif; ?>
			<div class="fh5co-narrow-content animate-box">
				<div class="row" >
					<div class="col-md-4 text-center">
						<?php if(! empty($contador_numero_izq)): ?>
						<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $contador_numero_izq; ?>" data-speed="5000" data-refresh-interval="50"></span>
						<?php endif; ?>
						
						<?php if(! empty($contador_titulo_izq)): ?>
						<span class="fh5co-counter-label"><?php echo $contador_titulo_izq; ?></span>
						<?php endif; ?>
					</div>
					<div class="col-md-4 text-center">
						<?php if(! empty($contador_numero_cen)): ?>
						<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $contador_numero_cen; ?>" data-speed="5000" data-refresh-interval="50"></span>
						<?php endif; ?>
						
						<?php if(! empty($contador_titulo_cen)): ?>
						<span class="fh5co-counter-label"><?php echo $contador_titulo_cen; ?></span>
						<?php endif; ?>
					</div>
					<div class="col-md-4 text-center">
						<?php if(! empty($contador_numero_der)): ?>
						<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $contador_numero_der; ?>" data-speed="5000" data-refresh-interval="50"></span>
						<?php endif; ?>
						
						<?php if(! empty($contador_titulo_der)): ?>
						<span class="fh5co-counter-label"><?php echo $contador_titulo_der; ?></span>
						<?php endif; ?>
					</div>
				</div>
			</div>

</div>
	
<?php endif; ?>
<?php get_footer(); ?>
