<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moda Mia
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'moda-mia' ); ?></a>

<div class="container-fluid">
	<div class="row">
	<header id="masthead" class="site-header center">

			<div class="col-md-2">
				<a href=""><img src="<?php bloginfo('template_directory');?>/img/modamia.png" width="200" alt="Moda Mia Boutique"/></a>
			</div>
			
			<div class="site-branding col-md-8 ">
				
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'moda-mia' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div><!-- .site-branding -->
			
			<div class="col-md-2 shoppingicon">
				<span>Cart</span> &nbsp;<img src="<?php bloginfo('template_directory');?>/img/shopping-bag.png" alt="Shopping Bag" height="30"/>
			</div>
	</header><!-- #masthead -->
	</div><!-- #row -->

<div id="content" class="site-content">