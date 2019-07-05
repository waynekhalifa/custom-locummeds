<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function custom_locummeds_widgets_init() {
	// Hotline widget
	register_sidebar( array(
		'name'          => esc_html__( 'Hotline', 'custom-locummeds' ),
		'id'            => 'hotline',
		'description'   => esc_html__( 'Add widgets here.', 'custom-locummeds' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// Mail widget
	register_sidebar( array(
		'name'          => esc_html__( 'Mail', 'custom-locummeds' ),
		'id'            => 'mail',
		'description'   => esc_html__( 'Add widgets here.', 'custom-locummeds' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// About widget
	register_sidebar( array(
		'name'          => esc_html__( 'About', 'custom-locummeds' ),
		'id'            => 'about',
		'description'   => esc_html__( 'Add widgets here.', 'custom-locummeds' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// Contact widget
	register_sidebar( array(
		'name'          => esc_html__( 'Contact', 'custom-locummeds' ),
		'id'            => 'contact',
		'description'   => esc_html__( 'Add widgets here.', 'custom-locummeds' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// Social widget
	register_sidebar( array(
		'name'          => esc_html__( 'Social', 'custom-locummeds' ),
		'id'            => 'social',
		'description'   => esc_html__( 'Add widgets here.', 'custom-locummeds' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'custom_locummeds_widgets_init' );