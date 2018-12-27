<?php


/*
Plugin Name: Book reivew
Plugin URI: 
Description:Adds book reviews to site
Version: 0.1.0
Author: Michael Ferguson 
Author URI: 
Text Domain: 
Domain Path: /languages
*/

add_action( 'init', 'book_review_post_type' );
/**
 * Register a book post type.
 *
 
 */
function codex_book_init() {
	$labels = array(
		'name'               => _x( 'Books Reviews', 'post type general name', 'myPlugin-book-reviw' ),
		'singular_name'      => _x( 'Book Review', 'post type singular name', 'myPlugin-book-reviw' ),
		'menu_name'          => _x( 'Books Reviews', 'admin menu', 'myPlugin-book-reviw' ),
		'name_admin_bar'     => _x( 'Book Review', 'add new on admin bar', 'myPlugin-book-reviw' ),
		'add_new'            => _x( 'Add New', 'book', 'myPlugin-book-reviw' ),
		'add_new_item'       => __( 'Add New Review', 'myPlugin-book-reviw' ),
		'new_item'           => __( 'New Book Review', 'myPlugin-book-reviw' ),
		'edit_item'          => __( 'Edit Book Review', 'myPlugin-book-reviw' ),
		'view_item'          => __( 'View Book Reviews', 'myPlugin-book-reviw' ),
		'all_items'          => __( 'All Books', 'myPlugin-book-reviw' ),
		'search_items'       => __( 'Search Reviews', 'myPlugin-book-reviw' ),
		'parent_item_colon'  => __( 'Parent Reviews:', 'myPlugin-book-reviw' ),
		'not_found'          => __( 'No Reviews found.', 'myPlugin-book-reviw' ),
		'not_found_in_trash' => __( 'No Reviews found in Trash.', 'myPlugin-book-reviw' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'myPlugin-book-reviw' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'book', $args );
}

?>