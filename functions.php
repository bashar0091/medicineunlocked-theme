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

	// custom  css 
	wp_enqueue_style( 'custom-admin-dashboard-css', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '1.0.0' );
	wp_enqueue_style( 'custom-admin-custom-css', get_stylesheet_directory_uri() . '/assets/css/custom.css', array(), '1.0.0' );

	// custom js 
	wp_enqueue_script( 'custom-counterup2-script', 'https://unpkg.com/counterup2@2.0.2/dist/index.js', '', '1.0.0', '' );
	wp_enqueue_script( 'custom-swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'custom-admin-dashboard-script', get_stylesheet_directory_uri() . '/assets/js/bundle.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'custom-admin-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.0', true );
	
	// tailwind connect
	wp_enqueue_script( 'custom-tailwind','https://cdn.tailwindcss.com', '', '1.0.0', '' );
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );


// redirect if user is not logged in 
function auth() {
	if( !is_user_logged_in()  ) {
		wp_redirect( home_url('/login') );
		exit;
	}
}