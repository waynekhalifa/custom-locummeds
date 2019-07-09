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
	<main id="main" class="site-main">
		
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="content-wrap">
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header><!-- .entry-header -->

                <div class="entry-content">
					<?php the_content(); ?>
                </div><!-- .entry-content -->
            </div>
    
            <ul class="counter-widgets">
                <div class="content-wrap">
                    <li class="counter-widget">
                        <span class="counter"><?php the_field('weekly_hours_worked'); ?></span>
                        <strong class="counter-widget__title"><?php _e('Weekly Hours Worked', 'custom-locummeds'); ?></strong>
                    </li>
                    <li class="counter-widget">
                        <span class="counter"><?php the_field('clients_served'); ?></span>
                        <strong class="counter-widget__title"><?php _e('Clients Served', 'custom-locummeds'); ?></strong>
                    </li>
                </div>
            </ul>

            <div class="content-wrap">
                <ul class="offers">this offers placeholder</ul>
            </div>

            <?php // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop. ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();