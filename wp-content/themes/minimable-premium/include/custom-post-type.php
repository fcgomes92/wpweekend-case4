<?php
add_action( 'init', 'create_post_type' );

function create_post_type() {
	register_post_type( 'team',
		array(
			'labels' => array(
			'name' => __( 'Team' ),
			'singular_name' => __( 'Team Member' ),
			'add_new' => __( 'Add New' ),
			'add_new_item' => __( 'Add New Member' ),
			'edit' => __( 'Edit' ),
			'edit_item' => __( 'Edit Member' ),
			'new_item' => __( 'New Member' ),
			),
		'public' => true,
		'supports' => array( 'title', 'editor','thumbnail' )
		)

	);
	register_post_type( 'portfolio',
		array(
			'labels' => array(
			'name' => __( 'Portfolio' ),
			'singular_name' => __( 'Work ' ),
			'add_new' => __( 'Add New' ),
			'add_new_item' => __( 'Add New Work' ),
			'edit' => __( 'Edit' ),
			'edit_item' => __( 'Edit Work' ),
			'new_item' => __( 'New Work' ),
			),
		'public' => true,
		'supports' => array( 'title', 'editor','thumbnail','excerpt' )
		)
	);
}

	/* ========================================================================================================================

	Taxonmies for portfolio items

	======================================================================================================================== */

	add_action( 'init', 'create_portfolio_categories', 0 );

	function create_portfolio_categories() {
	// Add new taxonomy, make it hierarchical (like categories)
		$labels = array(
			'name'              => _x( 'Categories', 'taxonomy general name' ),
			'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
			'search_items'      => __( 'Search Portfolio Categories' ),
			'all_items'         => __( 'All Portfolio Categories' ),
			'parent_item'       => __( 'Parent Category' ),
			'parent_item_colon' => __( 'Parent Category:' ),
			'edit_item'         => __( 'Edit Category' ),
			'update_item'       => __( 'Update Category' ),
			'add_new_item'      => __( 'Add New Category' ),
			'new_item_name'     => __( 'New Category Name' ),
			'menu_name'         => __( 'Portfolio Categories' ),
			);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'portfolio-categories' ),
			);

		register_taxonomy( 'portfolio-categories', array( 'portfolio'), $args );
	}

	add_action( 'init', 'create_staff_categories', 0 );

	function create_staff_categories() {
	// Add new taxonomy, make it hierarchical (like categories)
		$labels = array(
			'name'              => _x( 'Categories', 'taxonomy general name' ),
			'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
			'search_items'      => __( 'Search Staff Categories' ),
			'all_items'         => __( 'All Staff Categories' ),
			'parent_item'       => __( 'Parent Category' ),
			'parent_item_colon' => __( 'Parent Category:' ),
			'edit_item'         => __( 'Edit Category' ),
			'update_item'       => __( 'Update Category' ),
			'add_new_item'      => __( 'Add New Category' ),
			'new_item_name'     => __( 'New Category Name' ),
			'menu_name'         => __( 'Staff Categories' ),
			);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'staff-categories' ),
			);

		register_taxonomy( 'staff-categories', array( 'team'), $args );
	}
	?>