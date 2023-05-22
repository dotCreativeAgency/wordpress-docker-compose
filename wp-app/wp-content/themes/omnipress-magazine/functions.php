<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package omnipress-magazine
 * @since 1.0.0
 */

/**
 * Magazine Theme Support
 */
function omnipress_magazine_theme_support() {

	load_theme_textdomain( 'omnipress-magazine', get_template_directory() . '/languages' );

	// Support Post thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Support responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Support Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Support Editor Styles.
	add_editor_style( get_template_directory_uri() . '/assets/css/editor-styles.css' );

}
add_action( 'after_setup_theme', 'omnipress_magazine_theme_support' );


/*
-----------------------------
Enqueue Styles
--------------------------------*/
if ( ! function_exists( 'omnipress_magazine_styles' ) ) :

	/**
	 * Enqueue Theme Styles nad js.
	 */
	function omnipress_magazine_styles() {

		$version = wp_get_theme()->get( 'Version' );

		// Font Awesome.
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/vendors/font-awesome/css/all.min.css', array(), $version, 'all' );

		// Theme Styles.
		wp_enqueue_style( 'omnipress-magazine-styles', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

		// Core Block Styles.
		wp_enqueue_style( 'omnipress-magazine-styles-blocks', get_template_directory_uri() . '/assets/css/blocks.css', array(), $version, 'all' );

		// Animate CSS.
		wp_enqueue_style( 'op-animate-style', get_template_directory_uri() . '/assets/css/vendors/animate.min.css', array(), $version, 'all' );

		// Animate js.
		wp_enqueue_script( 'op-scrollanimate-js', get_template_directory_uri() . '/assets/js/scrollanimate.js', array( 'jquery' ), $version, true );
	}

endif;
add_action( 'wp_enqueue_scripts', 'omnipress_magazine_styles' );

/**
 * Pattern category register.
 */
require_once get_theme_file_path( 'includes/pattern-category.php' );
require_once get_theme_file_path( 'includes/plugin-notice/class-plugin-notice.php' );
