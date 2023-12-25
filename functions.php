<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles() {

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);


	// custom admin dashboard css 
	wp_enqueue_style( 'custom-admin-dashboard-css', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '1.0.0' );

	// custom admin dashboard js 
	wp_enqueue_script( 'custom-admin-dashboard-script', get_stylesheet_directory_uri() . '/assets/js/bundle.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );
