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
		'secondary' => esc_html( 'secondary menu' ),
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
function red_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => 'Appears in the Sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'red_starter_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function mapify_scripts() {
	wp_enqueue_style( 'bootstrap-css', '/wp-content/themes/mapify/build/css/bootstrap.min.css' );
	//wp_enqueue_style( 'flickity', '/wp-content/themes/mapify/build/css/flickity.min.css' );
	wp_enqueue_style( 'mapify-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome-cdn', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), '4.4.0' );
	wp_enqueue_script( 'bootstrap-js', '/wp-content/themes/mapify/build/js/bootstrap.min.js', array('jquery'), true );

	//wp_enqueue_script( 'flickity-js', '/wp-content/themes/mapify/build/js/flickity.pkgd.min.js', array('jquery'), true );
	
	wp_enqueue_script( 'mapify-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );
}
add_action( 'wp_enqueue_scripts', 'mapify_scripts' );
/**
 * Contact form 7 password fields
 */
function cfp($atts, $content = null) {
    extract(shortcode_atts(array( "id" => "", "title" => "", "pwd" => "" ), $atts));
    if(empty($id) || empty($title)) return "";
$cf7 = do_shortcode('[contact-form-7 id="'. $id .'" title="' . $title . '"]');
    $pwd = explode(',', $pwd);
    foreach($pwd as $p) {
        $p = trim($p);
        $cf7 = preg_replace('/<input type="text" name="' . $p . '"/usi', '<input type="password" name="' . $p . '"', $cf7);
    }
    return $cf7;
}
add_shortcode('cfp', 'cfp');
add_shortcode('cfp', 'cfp');
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
// remove extra p tags from contact form 7
add_filter('wpcf7_autop_or_not', '__return_false');


flush_rewrite_rules( false );

function set_posts_project_archive( $query ) {
	if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'projects' ) ) {
	  $query->set( 'posts_per_page', '9' );
	}
  }
  add_action( 'pre_get_posts', 'set_posts_project_archive' );


  function set_posts_partners_archive( $query ) {
	if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'Partners' ) ) {
	  $query->set( 'posts_per_page', '4' );
	}
  }
  add_action( 'pre_get_posts', 'set_posts_partners_archive' );
