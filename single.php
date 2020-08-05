<?php get_header(); ?>
	
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<div id="fh5co-intro-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box text-center">
						
						<span><?php the_category(', '); ?> </span>
						<br>
						<span><?php the_tags(); ?> </span>
						<h2 class="intro-heading"><?php the_title(); ?></h2>
						<p><span class="role"><?php the_time(get_option('date_format')); ?> </span></p>
						<?php if(has_post_thumbnail()): ?>
						<?php the_post_thumbnail('blog_imagen'); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>

		
		<div id="fh5co-about-section">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center animate-box">
						<div class="about-content">
							<?php the_content(); ?> 
						</div>
					</div>
				</div>
				
				<div class="row">
					
					<div class="col-md-4 col-md-offset-4 text-center animate-box">
						<div class="fh5co-staff">
							<?php if(get_avatar(get_the_author_meta('ID'))): ?>
								<img height="80px" src="<?php echo IMAGEN; ?>/avatar-default.png">
							<?php else: ?>
								<?php get_avatar(get_the_author_meta('ID')); ?>
							<?php endif; ?>
							
							<h3>Escrito por: <?php the_author_posts_link(); ?></h3>
							<span class="role"><?php the_author_meta('nickname'); ?> </span>
						</div>
					</div>
					
				</div>
			</div>
			<hr width="50%">
			<?php endwhile; endif; ?>
			<?php comments_template('', true); ?>
		</div>
	
<?php get_footer(); ?>

