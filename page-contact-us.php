<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package custom-locummeds
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main contact-us">
		
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="content-wrap">
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header><!-- .entry-header -->
            </div>

            <div id="map-canvas" class="location">
                <?php echo do_shortcode('[wpgmza id="1"]'); ?>
            </div>

            <div class="content-wrap">
                <div class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="100" title="Contact form"]'); ?>
                </div>

				<div class="entry-content">
					<?php the_content(); ?>
                </div><!-- .entry-content -->
            </div>
        <?php endwhile; // End of the loop. ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
