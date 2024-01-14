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

	if (is_page('create-new-article')) {
        wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
		wp_enqueue_style('summernote-css', 'https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css');

		// Enqueue Bootstrap JS
		wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
		// Enqueue Summernote JS
		wp_enqueue_script('summernote-js', 'https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js', array('jquery'), null, true);
    }

	// custom admin dashboard css 
	wp_enqueue_style( 'custom-admin-dashboard-css', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '1.0.0' );
	wp_enqueue_style( 'custom-admin-custom-css', get_stylesheet_directory_uri() . '/assets/css/custom.css', array(), '1.0.0' );

	// custom admin dashboard js 
	wp_enqueue_script( 'custom-admin-dashboard-script', get_stylesheet_directory_uri() . '/assets/js/bundle.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'custom-admin-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );
