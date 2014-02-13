<!doctype html>
<html <?php language_attributes(); ?>>

	<head>
	
	
		<meta charset="utf-8">
		
		<title><?php bloginfo("name"); ?> <?php wp_title("&bull;"); ?></title>
		
		<!--<meta name="viewport" content="width=device-width">-->
		<meta name="application-name" content="<?php bloginfo('name'); ?>" />
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  		
  		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/master.css" />
  		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/foundation.css" />
  		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/screen.css" />
  		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/overlay.css" />
  		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/Fonts/stylesheet.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/Fonts/stylesheet-icons.css" />
		<!-- LOAD SCRIPTS -->
		<script src="<?php bloginfo('template_url');?>/library/js/libs/jquery.js"></script>
		<script src="<?php bloginfo('template_url');?>/library/js/foundation.min.js"></script>
		<script src="<?php bloginfo('template_url');?>/library/js/foundation/foundation.topbar.js"></script>
		
		<?php wp_head(); ?>
		
		<script type= text/javascript>
				$(function(){
					$(".dropdown-toggle").click(function() {
					  $(".collapse").slideToggle(200);
					  return false;
					});
				});
			</script>
			
		</head>

		<body <?php body_class(); ?>>
		<div class="container">
			<div class="topBar">
				<div class="row"> 
						<p><?php if(function_exists('fontResizer_place')) { fontResizer_place(); } ?></p>
				</div>
			</div>
			<nav class="nav">
				<div class="row">
					<div class="large-12 columns container">
						<div class="site-logo">
							<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><span class="logo-brand"></span><span class="logoText"><?php bloginfo('name'); ?></span></a></h1>
						</div>
						
						<div class="mainNavigation">
							<a href="#" class="dropdown-toggle">Menu</a>
								<div class="collapse">
			 						<div class="menu">
			 							<li><a  href="gallery">Gallery</a></li>
			 							<li><a href="about">About</a></li>
			 							<li id="trigger-overlay"><a href="#">Contact</a></li>
			 						</div>
			 					</div>
		 				</div>
		 			</div>
	 			</div>		
	 		</nav>
		
	