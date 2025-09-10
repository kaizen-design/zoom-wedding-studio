<?php

// -------- custom post type example ---------
add_action( 'init', 'projects_cpt' );
function projects_cpt() {
  $labels = array(
    'name'                 => _x('Projects', 'post type general name', 'zoomwedding'),
    'singular_name'        => _x('Project', 'post type singular name', 'zoomwedding'),
    'menu_name'            => _x('Projects', 'admin menu', 'zoomwedding'),
    'name_admin_bar'       => _x('Project', 'add new on admin bar', 'zoomwedding'),
    'add_new'              => _x('Add Project', 'zoomwedding'),
    'add_new_item'         => __('Add Project ', 'zoomwedding'),
    'new_item'             => __('New Project', 'zoomwedding'),
    'edit_item'            => __('Edit Project', 'zoomwedding'),
    'view_item'            => __('View Project', 'zoomwedding'),
    'all_items'            => __('Projects', 'zoomwedding'),
    'search_items'         => __('Search Projects', 'zoomwedding'),
    'parent_item_colon'    => __('Projects:', 'zoomwedding'),
    'not_found'            => __('No Projects found.', 'zoomwedding'),
    'not_found_in_trash'   => __('No Projects found in Trash.', 'zoomwedding')
  );

  $args = array(
    'show_in_rest'              => true,
    'labels'                 => $labels,
    'public'                 => true,
    'publicly_queryable'       => true,
    'show_ui'                => true,
    'show_in_menu'             => true,
    'query_var'                => true,
    'capability_type'          => 'post',
    'map_meta_cap'              => true,
    'has_archive'              => false,
    'hierarchical'           => false,
    'menu_position'            => null,
    //'rewrite' => array('slug' => 'projects', 'with_front' => false),
    'supports'               => array('title', 'thumbnail', 'editor'),
    'menu_icon'                 => 'dashicons-portfolio',
  );
  register_post_type('projects', $args);
}


// -------- custom taxonomy example ---------
function custom_taxonomies_posts()
{
  register_taxonomy('offene_stelle_rubrik', ['offene_stelle'], [
    'labels' => [
      'name'               => _x('Job Rubriken', 'post type general name', 'zoomwedding'),
      'singular_name'      => _x('Job Rubrik', 'post type singular name', 'zoomwedding'),
      'menu_name'          => _x('Job Rubriken', 'admin menu', 'zoomwedding'),
      'name_admin_bar'     => _x('Job Rubrik', 'add new on admin bar', 'zoomwedding'),
      'add_new'            => _x('Add Job Rubrik', 'zoomwedding'),
      'add_new_item'       => __('Add Job Rubrik ', 'zoomwedding'),
      'new_item'           => __('New Job Rubrik', 'zoomwedding'),
      'edit_item'          => __('Edit Jobe Rubrik', 'zoomwedding'),
      'view_item'          => __('View Job Rubrik', 'zoomwedding'),
      'all_items'          => __('All Job Rubrik', 'zoomwedding'),
      'search_items'       => __('Search Job Rubriken', 'zoomwedding'),
      'parent_item_colon'  => __('Parent Job Rubrik:', 'zoomwedding'),
      'not_found'          => __('No Jobe Rubriken found.', 'zoomwedding'),
      'not_found_in_trash' => __('No Job Rubriken found in Trash.', 'zoomwedding')
    ],
    'hierarchical'      => true,
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_rest'      => true,    // Needed for tax to appear in Gutenberg editor.
    'public'            => true,
  ]);
}
//add_action( 'init', 'custom_taxonomies_posts' );
