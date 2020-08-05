
<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<div id="fh5co-intro-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box text-center">
						<h2 class="intro-heading"><?php the_title(); ?> </h2>
					</div>
				</div>
			</div>
	</div>

    <?php if(has_post_thumbnail()): ?>
	<aside id="fh5co-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
						
						<?php $banner_imagen = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
						<li style="background-image: url(<?php echo $banner_imagen[0]; ?>);">	
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
								<div class="slider-text-inner">
									<h2><?php the_field('titulo_del_banner'); ?></h2>
									<span><?php the_field('subtitulo_del_banner'); ?></span>
								</div>
							</div>
						</div>
					</li>
					</ul>
				</div>
	</aside>
<?php endif; ?>


	<div id="fh5co-product-section">
			<div class="container">
				<div class="row">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center animate-box">
							<div class="about-content">
								<?php the_content(); ?> 
							</div>
						</div>
					</div>		
				</div>
			</div>
	</div>
<?php endwhile; endif; ?>
	
<?php get_footer(); ?>