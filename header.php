<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Paraglide_NorthAmerica
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'paraglidenorthamerica' ); ?></a>
	

	<header id="masthead" class="site-header" role="banner">

		<nav id="site-navigation" class="main-navigation" role="navigation"> 
			
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			
		</nav><!-- #site-navigation -->

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="pna_logo">
				<img src="<?php echo get_theme_mod('pna_logo'); ?>" width="<?php echo get_theme_mod('logo_width');?>" height="<?php echo get_theme_mod('logo_height');?>" alt="">
			</a>

			<a class="nav-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
		
		

			 <!-- <video  loop autoplay="true" poster="<?php bloginfo('template_directory'); ?>/images/paraglide-bg.jpg">
			                     <source src="<?php bloginfo('template_directory'); ?>/pna-clip.mp4"  type="video/mp4">
			                     
			             </video>
			 
			             <div class="video-text">
			                 <div class="container">
			                     <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			                    <span class="icon-pulldown"><i class="ion-chevron-down"></i></span>
			                 </div>
			                 /.container
			             </div>
			             /.video-dark-overlay -->



		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
