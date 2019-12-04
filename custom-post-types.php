<?php
/**
 * Plugin Name: Custom posttypes for demo.getfrontender.com
 * Plugin URI: https://frontender.com
 * Description: A plugin that will add all of our custom post types
 * Version: 1.0.0
 * Author: Brickson
 * Author URI: https://brickson.nl
 * License: MIT
 */

/**
 * !!!Per post type a custom init action will be added so things keep clean!!!
 */


/**
 * Add the teaser post type.
 */
add_action( 'init', function () {
	register_post_type( 'teasers', [
		'label'        => __( 'Teasers' ),
		'labels'       => [
			'name'          => __( 'Teasers' ),
			'singular_name' => __( 'Teaser' ),
			'add_new'       => __( 'New teaser' ),
			'add_new_item'  => __( 'Add new teaser' ),
			'edit_item'     => __( 'Edit teaser' ),
			'new_item'      => __( 'New teaser' ),
			'view_item'     => __( 'View teaser' ),
			'view_items'    => __( 'View teasers' ),
			'search_items'  => __( 'Search teasers' ),
			'not_found'     => __( 'No teasers found' ),
			'all_items'     => __( 'All teasers' )
		],
		'description'  => __( 'Teaser posts' ),
		'public'       => true,
		'hierarchical' => true,
		'show_in_rest' => true
	] );
} );
