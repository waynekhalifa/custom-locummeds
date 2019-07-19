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
                            <div class="single_job">
                                <ul class="job-listing-meta meta">
                                    <?php do_action( 'single_job_listing_meta_start' ); ?>

                                    <?php if ( get_option( 'job_manager_enable_types' ) ) { ?>
                                        <?php $types = wpjm_get_the_job_types(); ?>
                                        <?php if ( ! empty( $types ) ) : foreach ( $types as $type ) : ?>

                                            <li class="job-type <?php echo esc_attr( sanitize_title( $type->slug ) ); ?>"><?php echo esc_html( $type->name ); ?></li>

                                        <?php endforeach; endif; ?>
                                    <?php } ?>

                                    <li class="location"><?php the_job_location(); ?></li>

                                    <li class="date-posted"><?php the_job_publish_date(); ?></li>

                                    <?php if ( is_position_filled() ) : ?>
                                        <li class="position-filled"><?php _e( 'This position has been filled', 'wp-job-manager' ); ?></li>
                                    <?php elseif ( ! candidates_can_apply() && 'preview' !== $post->post_status ) : ?>
                                        <li class="listing-expired"><?php _e( 'Applications have closed', 'wp-job-manager' ); ?></li>
                                    <?php endif; ?>

                                    <?php do_action( 'single_job_listing_meta_end' ); ?>
                                </ul>
                                <?php if ( candidates_can_apply() ) : ?>
                                    <?php get_job_manager_template( 'job-application.php' ); ?>
                                <?php endif; ?>
                                <div class="company">
                                    <?php the_company_logo(); ?>

                                    <p class="name">
                                        <?php if ( $website = get_the_company_website() ) : ?>
                                            <a class="website" href="<?php echo esc_url( $website ); ?>" rel="nofollow"><?php esc_html_e( 'Website', 'wp-job-manager' ); ?></a>
                                        <?php endif; ?>
                                        <?php the_company_twitter(); ?>
                                        <?php the_company_name( '<strong>', '</strong>' ); ?>
                                    </p>
                                    <?php the_company_tagline( '<p class="tagline">', '</p>' ); ?>
                                    <?php the_company_video(); ?>
                                </div>
                                <div class="job_description">
                                    <?php wpjm_the_job_description(); ?>
                                </div>
                                <div class="more-info"><a href="tel:01923594002"><?php _e('Call For More Information', 'custom-locummeds'); ?></a></div>
                            </div>
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
