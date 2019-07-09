<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package custom-locummeds
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main single-job">
            <div class="content-wrap">

                <?php while ( have_posts() ) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php
                            if ( is_singular() ) :
                                the_title( '<h1 class="entry-title">', '</h1>' );
                            else :
                                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                            endif;

                            if ( 'post' === get_post_type() ) :
                                ?>
                                <div class="entry-meta">
                                    <?php
                                    custom_locummeds_posted_on();
                                    custom_locummeds_posted_by();
                                    ?>
                                </div><!-- .entry-meta -->
                            <?php endif; ?>
                        </header><!-- .entry-header -->

                        <?php custom_locummeds_post_thumbnail(); ?>

                        <div class="entry-content">
                            <?php
                            the_content( sprintf(
                                wp_kses(
                                    /* translators: %s: Name of current post. Only visible to screen readers */
                                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'custom-locummeds' ),
                                    array(
                                        'span' => array(
                                            'class' => array(),
                                        ),
                                    )
                                ),
                                get_the_title()
                            ) );

                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'custom-locummeds' ),
                                'after'  => '</div>',
                            ) );
                            ?>
                        </div><!-- .entry-content -->

                        
                    </article><!-- #post-<?php the_ID(); ?> -->

                    <?php // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>
                <?php endwhile; // End of the loop. ?>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
