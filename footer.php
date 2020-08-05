<?php 

        $options = get_theme_mod('bu_settings');

		// Mostrar redes en pie de pagina
        if ( isset( $options['pie_redes'] ) ) {
            $pie_redes = $options['pie_redes'];
        } else{
            $pie_redes = false;
        }

        // Facebook url
        if ( ! empty($options['top_header_facebook_link']) ) {
            $facebook_url = $options['top_header_facebook_link'];
        }

        // Twitter url
        if ( ! empty($options['top_header_twitter_link']) ) {
            $twitter_url = $options['top_header_twitter_link'];
        }

        // Instagram url
        if ( ! empty($options['top_header_instagram_link']) ) {
            $instagram_url = $options['top_header_instagram_link'];
        }

		// Youtube url
        if ( ! empty($options['top_header_youtube_link']) ) {
            $youtube_url = $options['top_header_youtube_link'];
        }

		// Pie de pagina informacion
        if ( ! empty($options['pie_info']) ) {
            $pie_info = $options['pie_info'];
        }
		
				

  ?>

	<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<?php if(is_active_sidebar('sidebar-footer-izq')){
	
	
								dynamic_sidebar('sidebar-footer-izq');
	
				
							} ?>
							
						</div>
						
						<div class="col-md-4 col-md-push-1">
							
							<?php if(is_active_sidebar('sidebar-footer-cent')){
	
	
								dynamic_sidebar('sidebar-footer-cent');
	
				
							} ?>
							
						</div>

						<div class="col-md-4">
							<?php if(is_active_sidebar('sidebar-footer-der')){
	
	
								dynamic_sidebar('sidebar-footer-der');
	
				
							} ?>
							
						</div>
					</div>
					<div class="row copy-right">
						<div class="col-md-6 col-md-offset-3 text-center">
							<?php if($pie_redes == true): ?>
							<p class="fh5co-social-icon">
								<?php if(isset($twitter_url)): ?>
								<a href="<?php echo esc_url($twitter_url); ?> "><i class="icon-twitter2"></i></a>
								<?php endif; ?>

								<?php if(isset($facebook_url)): ?>
								<a href="<?php echo esc_url($facebook_url); ?>"><i class="icon-facebook2"></i></a>
								<?php endif; ?>

								<?php if(isset($instagram_url)): ?>
								<a href="<?php echo esc_url($instagram_url); ?>"><i class="icon-instagram"></i></a>
								<?php endif; ?>

								<?php if(isset($youtube_url)): ?>
								<a href="<?php echo esc_url($youtube_url); ?>"><i class="icon-youtube"></i></a>
								<?php endif; ?>
							</p>
							<?php endif; ?>
							
							<?php if(isset($pie_info)): ?>
							<p><?php echo $pie_info; ?>. <!-- <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="http://blog.gessato.com/" target="_blank">Gessato</a></p> -->
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
	</div>

	
		<?php wp_footer(); ?>
		
	</body>
</html>
