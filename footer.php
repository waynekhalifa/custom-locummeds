<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom-locummeds
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-widgets">
			<div class="content-wrap">
				<div class="footer-widget">
					<h3 class="widget__title"><?php _e('Why Locum Meds ?', 'custom-locummeds'); ?></h3>
					<?php dynamic_sidebar('about'); ?>
				</div>
				<div class="footer-widget">
					<h3 class="widget__title"><?php _e('Important Links', 'custom-locummeds'); ?></h3>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'footer-menu',
							'menu_id'        => 'secondary-menu',
						) );
					?>
				</div>
				<div class="footer-widget">
					<h3 class="widget__title"><?php _e('Contact Us', 'custom-locummeds'); ?></h3>
					<?php dynamic_sidebar('contact'); ?>
				</div>
				<div class="footer-widget">
					<h3 class="widget__title"><?php _e('Stay Connected', 'custom-locummeds'); ?></h3>
					<?php dynamic_sidebar('social'); ?>
				</div>
			</div>
		</div>
		<div class="site-info">
			<div class="footer-wrap">
				<div class="info">
					<p>
						&copy; <?php echo date('Y'); ?>
						<a href="<?php site_url(); ?>"><?php _e('Locum Meds.', 'custom-locummeds'); ?></a>
						<?php _e('All rights reserved.', 'custom-locummeds'); ?>
					</p>
				</div>
				<div class="info">-</div>
				<div class="info hotline"><?php dynamic_sidebar('hotline'); ?></div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php
	// Display Modals
	get_template_part( 'template-parts/backdrop' ); ?>
	<div class="request-modal contact-form"><?php modal( do_shortcode('[contact-form-7 id="100" title="Contact form"]') ); ?></div>
	<div class="refer-modal contact-form"><?php modal( do_shortcode('[contact-form-7 id="12768" title="Refer a Friend"]') ); ?></div>
	<div class="send-cv-modal contact-form"><?php modal( do_shortcode('[contact-form-7 id="113" title="Send CV Contact Form"]') ); ?></div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
