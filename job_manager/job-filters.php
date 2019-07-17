<?php
/**
 * Filters in `[jobs]` shortcode.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/job-filters.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     wp-job-manager
 * @category    Template
 * @version     1.33.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

wp_enqueue_script( 'wp-job-manager-ajax-filters' );

do_action( 'job_manager_job_filters_before', $atts );
?>

<form class="job_filters">
	<?php do_action( 'job_manager_job_filters_start', $atts ); ?>
	<?php do_action( 'job_manager_job_filters_search_jobs_start', $atts ); ?>
	<input type="text" id="search_location" class="job__search__input" name="search_location" placeholder="e.g. London, West London"/>
	<select id="search_category" class="job__search__input" name="search_category">
		<option value="">Jobs</option>
		<?php foreach ( get_job_listing_categories() as $cat ) : ?>
			<option value="<?php echo esc_attr( $cat->term_id ); ?>"><?php echo esc_html( $cat->name ); ?></option>
		<?php endforeach; ?>
	</select>
	<?php
	/**
	 * Show the submit button on the job filters form.
	 *
	 * @since 1.33.0
	 *
	 * @param bool $show_submit_button Whether to show the button. Defaults to true.
	 * @return bool
	 */
	if ( apply_filters( 'job_manager_job_filters_show_submit_button', true ) ) : ?>
		<input type="submit" class="job__search__button" value="Search" />
	<?php endif; ?>
	<?php do_action( 'job_manager_job_filters_search_jobs_end', $atts ); ?>
	<?php do_action( 'job_manager_job_filters_end', $atts ); ?>
</form>

<?php do_action( 'job_manager_job_filters_after', $atts ); ?>

<noscript><?php esc_html_e( 'Your browser does not support JavaScript, or it is disabled. JavaScript must be enabled in order to view listings.', 'wp-job-manager' ); ?></noscript>
