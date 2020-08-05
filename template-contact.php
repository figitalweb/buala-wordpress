<?php

/*
Template name: Contacto



*/
?>
	
<?php get_header(); ?>
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

	<div id="fh5co-contact-section">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-md-push-1 animate-box">
					<h3><?php the_field('direccion'); ?></h3>
					<ul class="contact-info">
						<?php if(get_field('ubicacion_del_lugar') == true): ?>
						<li><i class="icon-location-pin"></i><?php the_field('ubicacion_del_lugar'); ?></li>
						<?php endif; ?>
						
						<?php if(get_field('telefono') == true): ?>
						<li><i class="icon-phone2"></i><?php the_field('telefono'); ?></li>
						<?php endif; ?>
						
						<?php if(get_field('email') == true): ?>
						<li><i class="icon-mail"></i><a href="#"><?php the_field('email'); ?></a></li>
						<?php endif; ?>
						
						<?php if(get_field('url_del_sitio_web') == true): ?>
						<li><i class="icon-globe2"></i><a href="#"><?php the_field('url_del_sitio_web'); ?></a></li>
						<?php endif; ?>
					</ul>
				</div>
				<div class="col-md-7 col-md-push-1 animate-box">
					<div class="row">
						<?php echo do_shortcode('[contact-form-7 id="263" title="Formulario buala"]'); ?>
						<!--<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Nombre y Apellido">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Consulta"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="Enviar" class="btn btn-primary">
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End: fh5co-contact-section -->

<?php get_footer(); ?>

