<?php

if ( ! defined( 'VISUALSITE_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'VISUALSITE_VERSION', wp_get_theme()->get( 'Version' ) );
}

if ( ! function_exists( 'visualblogger_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function visualblogger_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on VisualBlogger, use a find and replace
		 * to change 'visualblogger' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'visualblogger', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'align-wide' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 400,
				'width'       => 120,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}
endif;
add_action( 'after_setup_theme', 'visualblogger_setup' );

if ( ! function_exists( 'visualblogger_fonts_url' ) ) :
	/**
	 * Register Google fonts for VisualBlogger
	 *
	 * Create your own visualblogger_fonts_url() function to override in a child theme.
	 *
	 * @since 1.0
	 *
	 * @return string Google fonts URL for the theme.
	 */
	function visualblogger_fonts_url() {
		$fonts_url = '';

		/* Translators: If there are characters in your language that are not
		* supported by Poppins, translate this to 'off'. Do not translate
		* into your own language.
		*/
		$font_families = array( 'Inter:wght@400;700', 'Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900' );

		if ( ! empty( $font_families  ) ) {

			$query_args = array(
				'family' => implode( '&family=', $font_families ), //urlencode( implode( '|', $font_families ) ),
				// 'subset' => urlencode( 'latin,latin-ext' ),
				'display' => 'swap',
			);

			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );
		}

		if ( ! class_exists( 'WPTT_WebFont_Loader' ) ) {
			// Load Google fonts from Local.
			require_once get_theme_file_path( 'inc/lib/wptt-webfont-loader.php' );
		}

		return esc_url( wptt_get_webfont_url( $fonts_url ) );
	}
endif;

/**
 * Enqueue scripts and styles.
 */
function visualblogger_enqueue_scripts() {

	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	// Register theme stylesheet.
	$theme_version = wp_get_theme()->get( 'Version' );
	// FontAwesome.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/all' . $min . '.css', array(), '5.15.3', 'all' );
	//wp_enqueue_style( 'visualblogger-fonts', visualblogger_fonts_url(), array(), null );

	$deps = array( 'font-awesome' );
	global $wp_styles;
	if ( in_array( 'wc-blocks-vendors-style', $wp_styles->queue ) ) {
		$deps[] = 'wc-blocks-vendors-style';
	}

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array(), '', true ); 
	wp_enqueue_script( 'theia-sticky-sidebar', get_template_directory_uri() . '/assets/js/theia-sticky-sidebar.js', array(), '', true );         
	wp_enqueue_script( 'visualblogger-custom', get_template_directory_uri() . '/assets/js/jquery.custom.js', array(), '20230515', true );	

	wp_enqueue_style( 'visualblogger-style', get_stylesheet_uri(), $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );
	wp_enqueue_style( 'design', get_template_directory_uri() . '/design' . $min . '.css', array(), '20230515', 'all' );		
	wp_enqueue_style( 'visualblogger-responsive-style', get_template_directory_uri() . '/responsive.css', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'responsive.css' ) ) ) );

}
add_action( 'wp_enqueue_scripts', 'visualblogger_enqueue_scripts' );

function visualblogger_block_assets() {
	$min = '';
	// FontAwesome.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/all' . $min . '.css', array(), '5.15.3', 'all' );

	wp_enqueue_style( 'admin-style', get_template_directory_uri() . '/assets/css/admin-style' . $min . '.css', array(), '1.0.0', 'all' );	

	wp_enqueue_style( 'design', get_template_directory_uri() . '/design' . $min . '.css', array(), '20230515', 'all' );	

}
add_action( 'enqueue_block_assets', 'visualblogger_block_assets' );

/**
 *
 * Enqueue scripts and styles.
 */
function visualblogger_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			visualblogger_fonts_url(),
		)
	);
}
add_action( 'admin_init', 'visualblogger_editor_styles' );

/**
 * Post Thumbnails.
 */
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 400, 266, true ); // default Post Thumbnail dimensions (cropped)
    add_image_size( 'visualblogger_post_thumb', 400, 266, true );
}

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/init.php';
