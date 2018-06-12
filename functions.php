<?php
/**
 * mapify functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mapify_theme
 */

if ( ! function_exists( 'mapify_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function mapify_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array( 'search-form' ) );

}
endif; // mapify_setup
add_action( 'after_setup_theme', 'mapify_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function mapify_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mapify_content_width', 640 );
}
add_action( 'after_setup_theme', 'mapify_content_width', 0 );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function mapify_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'mapify_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function mapify_scripts() {
	wp_enqueue_style( 'mapify-style', get_stylesheet_uri() );

	wp_enqueue_script( 'mapify-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );
}
add_action( 'wp_enqueue_scripts', 'mapify_scripts' );

add_action( 'wp_enqueue_scripts', 'custom_load_bootstrap' );
/**
 * Enqueue Bootstrap.
 */
function custom_load_bootstrap() {
    wp_enqueue_style( 'bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css' );

    wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
}

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Custom template tags for this theme.
 */
 require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom metaboxes generated using the CMB2 library.
 */
require get_template_directory() . '/inc/metaboxes.php';

 /**
 * Custom WP API modifications.
 */
require get_template_directory() . '/inc/api.php';
