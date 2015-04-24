<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package DAI
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script src="//use.typekit.net/urm0kvw.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">

			<div class="site-branding">
				<a href="/">
					<h1 class="site-title">
						<img src="<?php echo get_template_directory_uri(); ?>/public/images/DAI_logo.png" height="65" width="157">
					</h1>
				</a>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'dai' ); ?></button> -->
				<div class="close"></div>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container_class' => 'menu' ) ); ?>
				<div class="button-group">
					<div class="donate"><div class="donate-border"></div><a href="/#/my/donate" class="btn tr-up">Donate Now</a></div>
					<div class="institute"><a href="#" class="btn tr-up">DAI Institute</a></div>
					<div class="menu-button button"><a href="#" class="btn tr-up">Menu</a></div>
				</div>
			</nav><!-- #site-navigation -->

	</header><!-- #masthead -->
	
	<div id="content" class="site-content">
