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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

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
