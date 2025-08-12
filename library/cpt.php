<?php

// -------- custom post type example ---------
//add_action( 'init', 'offene_stellen_posts' );
function offene_stellen_posts() {
    $labels = array(
        'name'                 => _x( 'Jobs', 'post type general name', 'starter_cpt' ),
        'singular_name'        => _x( 'Job', 'post type singular name', 'starter_cpt' ),
        'menu_name'            => _x( 'Jobs', 'admin menu', 'starter_cpt' ),
        'name_admin_bar'       => _x( 'Job', 'add new on admin bar', 'starter_cpt' ),
        'add_new'              => _x( 'Add Job', 'starter_cpt' ),
        'add_new_item'         => __( 'Add Job ', 'starter_cpt' ),
        'new_item'             => __( 'New Job', 'starter_cpt' ),
        'edit_item'            => __( 'Edit Job', 'starter_cpt' ),
        'view_item'            => __( 'View Job', 'starter_cpt' ),
        'all_items'            => __( 'Jobs', 'starter_cpt' ),
        'search_items'         => __( 'Search Jobs', 'starter_cpt' ),
        'parent_item_colon'    => __( 'Jobs:', 'starter_cpt' ),
        'not_found'            => __( 'No Jobs found.', 'starter_cpt' ),
        'not_found_in_trash'   => __( 'No Jobs found in Trash.', 'starter_cpt' )
    );

    $args = array(
        'show_in_rest'              => true,
        'labels'             		=> $labels,
        'public'             		=> true,
        'publicly_queryable' 	    => true,
        'show_ui'            		=> true,
        'show_in_menu'       	    => true,
        'query_var'          	    => true,
//        'rewrite'            		=> array( 'slug' => 'offene_stelle' ),
        'capability_type'    	    => 'post',
        'map_meta_cap'              =>true,
        'has_archive'        	    => true,
        'hierarchical'       		=> false,
        'menu_position'      	    => null,
        'supports'           		=> array('title', 'thumbnail', 'editor'),
        'menu_icon'                 => 'dashicons-text-page',
    );
    register_post_type( 'offene_stelle', $args );
}


// -------- custom taxonomy example ---------
function custom_taxonomies_posts() {
    register_taxonomy( 'offene_stelle_rubrik', ['offene_stelle'], [
        'labels' => [
            'name'               => _x( 'Job Rubriken', 'post type general name', 'starter_cpt' ),
            'singular_name'      => _x( 'Job Rubrik', 'post type singular name', 'starter_cpt' ),
            'menu_name'          => _x( 'Job Rubriken', 'admin menu', 'starter_cpt' ),
            'name_admin_bar'     => _x( 'Job Rubrik', 'add new on admin bar', 'starter_cpt' ),
            'add_new'            => _x( 'Add Job Rubrik', 'starter_cpt' ),
            'add_new_item'       => __( 'Add Job Rubrik ', 'starter_cpt' ),
            'new_item'           => __( 'New Job Rubrik', 'starter_cpt' ),
            'edit_item'          => __( 'Edit Jobe Rubrik', 'starter_cpt' ),
            'view_item'          => __( 'View Job Rubrik', 'starter_cpt' ),
            'all_items'          => __( 'All Job Rubrik', 'starter_cpt' ),
            'search_items'       => __( 'Search Job Rubriken', 'starter_cpt' ),
            'parent_item_colon'  => __( 'Parent Job Rubrik:', 'starter_cpt' ),
            'not_found'          => __( 'No Jobe Rubriken found.', 'starter_cpt' ),
            'not_found_in_trash' => __( 'No Job Rubriken found in Trash.', 'starter_cpt' )],
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,    // Needed for tax to appear in Gutenberg editor.
        'public'            => true,
    ] );
}
//add_action( 'init', 'custom_taxonomies_posts' );
