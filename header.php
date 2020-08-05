<!DOCTYPE html>


<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" > <!--<![endif]-->
	<html <?php language_attributes(); ?>>
	<head>
	 	
	<meta charset="<?php bloginfo('charset'); ?> ">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?> </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
		
		<?php wp_head(); ?>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
	<?php if(is_single() && comments_open()): ?>
		
		<?php wp_enqueue_script('comment-reply'); ?>
		
	<?php endif; ?>	
		
		
	</head>
	<body <?php body_class(); ?>>

	<nav id="fh5co-main-nav" role="navigation">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle active"><i></i></a>
		<div class="js-fullheight fh5co-table">
			<div class="fh5co-table-cell js-fullheight">
				
				<?php wp_nav_menu(array(
					
						'theme_location'=> 'menu-principal'
							
				)); ?>
				<?php 

        $options = get_theme_mod('bu_settings');

		// Mostrar redes en menu principal
        if ( isset( $options['top_header_redes'] ) ) {
            $top_header_redes = $options['top_header_redes'];
        } else{
            $top_header_redes = false;
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
				
        // Logo
        if ( ! empty($options['logo']) ) {
            $logo = $options['logo'];
        } else{
            $logo = 'Minimal';
        }


     ?>
				<?php if($top_header_redes == true): ?>
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
			</div>
		</div>
	</nav>
	
	<div id="fh5co-page">
		<header>
			<div class="container">
				<div class="fh5co-navbar-brand">

					<?php if(isset ($logo)): ?>				
					 <h1 class="text-center"><a class="" href="index.html"><img id="logo" src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>" ></a></h1>
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<?php else: ?>
					 <h1 class="text-center"><a class="fh5co-logo" href="index.html">Logo</a></h1>
					 <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<?php endif; ?>
					
				</div>
			</div>
		</header>
		