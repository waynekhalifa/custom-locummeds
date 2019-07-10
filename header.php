<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom-locummeds
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-KQR2M2N');</script>
	<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQR2M2N" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="topbar">
		<div class="content-wrap">
			<div class="contact">
				<div class="hotline"><?php dynamic_sidebar('hotline'); ?></div>
				<div class="mail"><?php dynamic_sidebar('mail'); ?></div>
			</div>
			<div class="social"><?php dynamic_sidebar('social'); ?></div>
		</div>
	</div>
	<header id="masthead" class="site-header">
		<div class="header-wrap">
			<div class="site-branding">
				<?php the_custom_logo(); ?>
			</div><!-- .site-branding -->

			<div class="menu__icon">
				<div></div>
				<div></div>
				<div></div>
			</div>
			<nav id="site-navigation" class="main-navigation">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'header-menu',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
