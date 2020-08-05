<?php

/*
Template name: Servicios



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



<?php $bu_all_servicios = new WP_Query(array(

						'post_type' => 'servicios',
						'posts_per_page' => ''

)); ?>

<?php if($bu_all_servicios->have_posts()): ?>
		<div id="fh5co-work-section">
			<div class="container">
				<div class="row">
					<?php while($bu_all_servicios->have_posts()): $bu_all_servicios->the_post(); ?>
					
					<div class="col-md-6 text-center animate-box">
						<div class="services">
							<div class="icon">
								<?php if(has_post_thumbnail()): ?>
								<span><?php the_post_thumbnail('thumbnail'); ?></span>
								<?php else: ?>
								<span><i class="icon-clipboard"></i></span>
								<?php endif; ?>
							</div>
							<h3><?php the_title(); ?> </h3>
							<p><?php the_content(); ?></p>
						</div>
					</div>
					<?php endwhile; ?>
					
					
				</div>
			</div>
		</div>
<?php endif; ?>

	
<?php get_footer(); ?>

