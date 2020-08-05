<?php get_header(); ?>
		<div id="fh5co-intro-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box text-center">
						<?php if(is_category()): ?>
						<h2 class="intro-heading"><?php _e('Categoría: ', 'minimal'); ?> <?php single_cat_title(); ?> </h2>
						
						<?php elseif(is_tag()): ?>
						<h2 class="intro-heading"><?php _e('Etiqueta: ', 'minimal'); ?> <?php single_tag_title(); ?> </h2>
						
						<?php elseif(is_search()): ?>
						<h2 class="intro-heading"><?php _e('Resultado de búsqueda para el termino: ', 'minimal'); ?> <?php the_search_query(); ?> </h2>
						
						<?php elseif(is_day()): ?>
						<h2 class="intro-heading"><?php _e('Archivo: ', 'minimal'); ?> <?php the_time(get_option('date_format')); ?> </h2>
						
						<?php elseif(is_month()): ?>
						<h2 class="intro-heading"><?php _e('Archivo: ', 'minimal'); ?> <?php the_time('F Y'); ?> </h2>
						
						<?php elseif(is_year()): ?>
						<h2 class="intro-heading"><?php _e('Archivo: ', 'minimal'); ?> <?php the_time('Y'); ?> </h2>
						
						<?php elseif(is_author()): ?>
						<h2 class="intro-heading"><?php _e('Articulos de: ', 'minimal'); ?> 
						
						<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
						<?php echo $curauth->display_name; ?>	
						</h2>
						
						<?php elseif(is_404()): ?>
						<h2 class="intro-heading"><?php _e('No se encontró la página', 'minimal'); ?> </h2>
						
						<?php elseif(is_home()): ?>
							<?php if(is_front_page()): ?>
									<h2 class="intro-heading"><?php the_title(); ?> </h2>
							<?php else: ?>
									<h2 class="intro-heading"><?php wp_title(' ', true, 'right'); ?> </h2>
							<?php endif; ?>					
						
						
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>


		<div id="fh5co-product-section">
			<div class="container">
				<?php if( is_active_sidebar('main_sidebar') ) : ?>
				<div class="row col-md-9">
				<?php else: ?>
				<div class="row">
				<?php endif; ?>	
					<?php if(have_posts()): while(have_posts()): the_post(); ?>
					
						<?php if( is_active_sidebar('main_sidebar') ) : ?>
					<div <?php post_class('col-md-6 prod text-center animate-box'); ?> >
						<?php else: ?>
					<div <?php post_class('col-md-4 prod text-center animate-box'); ?> >
						<?php endif; ?>
						<div class="product" >
							
							<a href="<?php the_permalink(); ?>" class="view">
								<?php the_post_thumbnail('blog_imagen'); ?>
							</a> 
						</div>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
						<span class="price"><?php the_excerpt(); ?> </span>
						<p class="text-center view-button animate-box"><a href="<?php the_permalink(); ?> "class="btn btn-primary btn-outline btn-lg"><?php _e('Ver Más', 'minimal'); ?> </a></p>
					</div>
					
					
					<?php endwhile; else: ?>
						
						<?php get_template_part('template-parts/content', 'nopost'); ?>
					
					<?php endif; ?>
				
				</div>
				<?php if( is_active_sidebar('main_sidebar') && have_posts() ) : ?>	
				<div class="row col-md-3">	
					<div class="col-md-3 prod text-left animate-box">
                		<?php get_sidebar(); ?>
        			</div>
				</div>
					
				<?php endif; ?>
			    </div>
			
				<?php if(get_next_posts_link() || get_previous_posts_link() ): ?>
					<div <?php post_class('col-md-12 prod text-center animate-box'); ?>>
						<span class="btn btn-lg"><?php previous_posts_link(__('<i class="icon-arrow-left"></i> Articulos Recientes', 'minimal')); ?></span>
						<span class="btn btn-lg"><?php next_posts_link(__('Articulos Anteriores <i class="icon-arrow-right"></i>', 'minimal')); ?></span>

					</div>
				<?php endif ?>
				
			
		     </div>
		

<?php get_footer(); ?>
