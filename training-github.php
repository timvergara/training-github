<?php
/*
Plugin Name: Inbound Found Training
Plugin URI: https://www.inboundfound.com
Description: Registers a custom post type called Movies
Version: 1.0
Author: Timothy Roy Vergara
Author URI: https://www.inboundfound.com
*/

function if_create_movie_post_type() {
	$labels = array(
		'name'               => __( 'Movies', 'inbound-found-training' ),
		'singular_name'      => __( 'Movie', 'inbound-found-training' ),
		'add_new'            => __( 'Add New', 'inbound-found-training' ),
		'add_new_item'       => __( 'Add New Movie', 'inbound-found-training' ),
		'edit_item'          => __( 'Edit Movie', 'inbound-found-training' ),
		'new_item'           => __( 'New Movie', 'inbound-found-training' ),
		'view_item'          => __( 'View Movie', 'inbound-found-training' ),
		'search_items'       => __( 'Search Movies', 'inbound-found-training' ),
		'not_found'          => __( 'No movies found', 'inbound-found-training' ),
		'not_found_in_trash' => __( 'No movies found in trash', 'inbound-found-training' ),
		'parent_item_colon'  => __( 'Parent Movie:', 'inbound-found-training' ),
		'menu_name'          => __( 'Movies', 'inbound-found-training' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'A custom post type for movies',
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-video',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);

	register_post_type( 'movie', $args );
}

add_action( 'init', 'if_create_movie_post_type' );

?>
