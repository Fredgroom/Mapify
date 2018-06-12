<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package mapify_theme
 */

/**
 * Removes Comments from admin menu.
 */
function mapify_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'mapify_remove_admin_menus' );

/**
 * Removes comments support from Posts and Pages.
 */
function mapify_remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
add_action( 'init', 'mapify_remove_comment_support', 100 );

/**
 * Removes Comments from admin bar.
 */
function mapify_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mapify_admin_bar_render' );

/**
 * Removes Comments-related metaboxes.
 */
 function mapify_remove_comments_meta_boxes() {
	remove_meta_box( 'commentstatusdiv', 'post', 'normal' );
	remove_meta_box( 'commentsdiv', 'post', 'normal' );
	remove_meta_box( 'trackbacksdiv', 'post', 'normal' );
}
add_action( 'admin_init', 'mapify_remove_comments_meta_boxes' );
