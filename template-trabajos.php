<?php

/*
Template name: Trabajos realizados



*/
?>
<?php get_header(); ?>


		<div id="fh5co-intro-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box text-center">
						<h2 class="intro-heading"><?php the_title(); ?></h2>
						<p><?php the_excerpt(); ?></p>
					</div>
				</div>
			</div>
		</div>



<?php $bu_trabajos = new WP_Query(array(

						'post_type' => 'proyectos',
						'posts_per_page' => ''

)); ?>

<?php if($bu_trabajos->have_posts()): ?>
		<div id="fh5co-work-section">
			<div class="container">
				<div class="row">
					<?php while($bu_trabajos->have_posts()): $bu_trabajos->the_post(); ?>
					<div class="col-md-6 text-center animate-box">
						<div class="work" style="background-image: url(images/img-1.jpg);">
							<a href="<?php the_post_thumbnail_url('full'); ?>" class="view" target="_blank">
								<?php the_post_thumbnail('imagen_proyectos'); ?>
							</a>
							<h3><?php the_title(); ?></h3>
							<br>
						</div>
					</div>
					<?php endwhile; ?>
					
					
				</div>
			</div>
		</div>
<?php endif; ?>

	
<?php get_footer(); ?>

