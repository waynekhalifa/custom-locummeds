<?php 
function custom_post_types() {
    // Company Contact
	register_post_type( 'company_contact', array(
		'supports' => array('title', 'thumbnail'),
		'show_in_rest' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'company_contacts'),
        'public' => true,
        'menu_icon' => 'dashicons-admin-users',
		'labels' => array(
			'name' => 'Company Contacts',
			'add_new_item' => 'New Company Contact',
			'edit_item' => 'Edit Company Contact',
			'all_items' => 'All Company Contacts',
			'singular_name' => 'Company Contact'
		),
	));
	
	// Testimonial
	register_post_type( 'testimonial', array(
		'supports' => array('title', 'editor', 'thumbnail'),
		'show_in_rest' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'testimonials'),
        'public' => true,
        'menu_icon' => 'dashicons-format-status',
		'labels' => array(
			'name' => 'Testimonials',
			'add_new_item' => 'New Testimonial',
			'edit_item' => 'Edit Testimonial',
			'all_items' => 'All Testimonials',
			'singular_name' => 'Testimonial'
		),
    ));
}
add_action( 'init', 'custom_post_types', 0 );