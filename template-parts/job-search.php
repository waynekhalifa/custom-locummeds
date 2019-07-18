<?php
/**
 * This template for creating custom job search form
 */

?>

<form class="job_filters" method="GET" action="<?php echo site_url('/') . '/jobs'; ?>">
    <input type="text" id="search_location" class="job__search__input" name="search_location" placeholder="e.g. London, West London"/>
    <select id="search_category" class="job__search__input" name="search_category">
        <option value=""><?php _e('Jobs', 'custom-locummeds'); ?></option>
        <?php foreach ( get_job_listing_categories() as $cat ) : ?>
            <option value="<?php echo esc_attr( $cat->term_id ); ?>"><?php echo esc_html( $cat->name ); ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" class="job__search__button" value="Search Job" />

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
</form>
