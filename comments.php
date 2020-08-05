<?php if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) &&  basename( $_SERVER['SCRIPT_FILENAME'] ) == 'comments.php' ): ?>

    <?php die(); ?>

<?php endif; ?>

<?php if ( post_password_required() ): ?>

    <p><?php _e('Se necesita contraseña para visualizar este contenido', 'minimal'); ?></p>
    <?php return; ?>
    
<?php endif ?>


<div id="fh5co-about-section">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center animate-box">
						<div class="about-content">
							<h3><?php comments_number(__('', 'minimal'), __('Un comentario', 'minimal'), __('% comentarios', 'minimal'));  ?></h3>
								<ol id="comments-list">
									<?php wp_list_comments(); ?>			
								</ol>
							<?php if(get_comment_pages_count() > 1 && get_option('page_comments')): ?>
								<?php if(get_next_comments_link() || get_previous_comments_link() ): ?>
									<div <?php post_class('col-md-12 prod text-center animate-box'); ?>>
										<span class="btn btn-lg"><?php next_comments_link(__('<i class="icon-arrow-left"></i> Comentarios recientes', 'minimal')); ?></span>
										<span class="btn btn-lg"><?php previous_comments_link(__('Comentarios anteriores <i class="icon-arrow-right"></i>', 'minimal')); ?></span>
				
									</div>
								<?php endif ?>
							<?php endif; ?>
								<?php comment_form(); ?>
						</div>
					</div>
				</div>
				
			</div>
</div>


