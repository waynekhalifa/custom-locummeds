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
	<main id="main" class="site-main clients">
		<div class="content-wrap">
			<?php while ( have_posts() ) : the_post(); ?>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->

                <?php
                    $args = array(
                        'post_type'         => 'service',
                        'posts_per_page'    => -1
                    );
                    $query = new WP_Query( $args );
                ?>
                <?php if ($query->have_posts()) : ?>
                    <ul class="offers">
                        <?php while($query->have_posts()) : $query->the_post(); ?>
                            <li class="offer">
                                <div class="offer__thumb"><?php the_post_thumbnail(); ?></div>
                                <h3 class="offer__title"><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

				<?php // If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop. ?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();