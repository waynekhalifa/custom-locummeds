<?php
/**
 * Filter in `[jobs]` shortcode for job types.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/job-filter-job-types.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     wp-job-manager
 * @category    Template
 * @version     1.31.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php if ( ! is_tax( 'job_listing_type' ) && empty( $job_types ) ) : ?>
	<ul class="job_types">
		<?php foreach ( get_job_listing_types() as $type ) : ?>
			<li class="filter"><a href="<?php echo site_url('/') . '/jobs/' . esc_attr( $type->slug ); ?>"><?php echo esc_attr( $type->name ); ?></a></li>
		<?php endforeach; ?>
	</ul>
<?php elseif ( $job_types ) : ?>
	<?php foreach ( $job_types as $job_type ) : ?>
		<input type="hidden" name="filter_job_type[]" value="<?php echo esc_attr( sanitize_title( $job_type ) ); ?>" />
	<?php endforeach; ?>
<?php endif; ?>
