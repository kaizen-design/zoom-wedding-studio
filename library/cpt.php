<?php

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
    'show_in_rest'             => true,
    'labels'                   => $labels,
    'public'                   => true,
    'publicly_queryable'       => true,
    'show_ui'                  => true,
    'show_in_menu'             => true,
    'query_var'                => true,
    'capability_type'          => 'post',
    'map_meta_cap'             => true,
    'has_archive'              => false,
    'hierarchical'             => false,
    'menu_position'            => null,
    'supports'                 => array('title', 'thumbnail', 'editor'),
    'menu_icon'                => 'dashicons-portfolio',
  );
  register_post_type('projects', $args);
}

add_action( 'init', 'pricing_plans_cpt' );
function pricing_plans_cpt() {
  $labels = array(
    'name'                 => _x('Pricing Plans', 'post type general name', 'zoomwedding'),
    'singular_name'        => _x('Pricing Plan', 'post type singular name', 'zoomwedding'),
    'menu_name'            => _x('Pricing Plans', 'admin menu', 'zoomwedding'),
    'name_admin_bar'       => _x('Pricing Plan', 'add new on admin bar', 'zoomwedding'),
    'add_new'              => _x('Add Pricing Plan', 'zoomwedding'),
    'add_new_item'         => __('Add Pricing Plan ', 'zoomwedding'),
    'new_item'             => __('New Pricing Plan', 'zoomwedding'),
    'edit_item'            => __('Edit Pricing Plan', 'zoomwedding'),
    'view_item'            => __('View Pricing Plan', 'zoomwedding'),
    'all_items'            => __('Pricing Plans', 'zoomwedding'),
    'search_items'         => __('Search Pricing Plans', 'zoomwedding'),
    'parent_item_colon'    => __('Pricing Plans:', 'zoomwedding'),
    'not_found'            => __('No Pricing Plans found.', 'zoomwedding'),
    'not_found_in_trash'   => __('No Pricing Plans found in Trash.', 'zoomwedding')
  );

  $args = array(
    'show_in_rest'             => true,
    'labels'                   => $labels,
    'public'                   => false,
    'publicly_queryable'       => true,
    'show_ui'                  => true,
    'show_in_menu'             => true,
    'query_var'                => true,
    'capability_type'          => 'post',
    'map_meta_cap'             => true,
    'has_archive'              => false,
    'hierarchical'             => false,
    'menu_position'            => null,
    'supports'                 => array('title'),
    'menu_icon'                => 'dashicons-tag',
  );
  register_post_type('pricing_plans', $args);
}

function pricing_plan_categories() {
  register_taxonomy('pricing_plan_category', ['pricing_plans'], [
    'labels' => [
      'name'               => _x('Plan Categories', 'post type general name', 'zoomwedding'),
      'singular_name'      => _x('Plan Category', 'post type singular name', 'zoomwedding'),
      'menu_name'          => _x('Plan Categories', 'admin menu', 'zoomwedding'),
      'name_admin_bar'     => _x('Plan Category', 'add new on admin bar', 'zoomwedding'),
      'add_new'            => _x('Add Plan Category', 'zoomwedding'),
      'add_new_item'       => __('Add Plan Category ', 'zoomwedding'),
      'new_item'           => __('New Plan Category', 'zoomwedding'),
      'edit_item'          => __('Edit  Plan Category', 'zoomwedding'),
      'view_item'          => __('View Plan Category', 'zoomwedding'),
      'all_items'          => __('All Plan Category', 'zoomwedding'),
      'search_items'       => __('Search Plan Categories', 'zoomwedding'),
      'parent_item_colon'  => __('Parent Plan Category:', 'zoomwedding'),
      'not_found'          => __('No  Plan Categories found.', 'zoomwedding'),
      'not_found_in_trash' => __('No Plan Categories found in Trash.', 'zoomwedding')
    ],
    'hierarchical'      => true,
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_rest'      => true,  
    'public'            => true,
  ]);
}
add_action( 'init', 'pricing_plan_categories' );

add_action( 'init', 'faq_cpt' );
function faq_cpt() {
  $labels = array(
    'name'                 => _x('FAQs', 'post type general name', 'zoomwedding'),
    'singular_name'        => _x('FAQ', 'post type singular name', 'zoomwedding'),
    'menu_name'            => _x('FAQs', 'admin menu', 'zoomwedding'),
    'name_admin_bar'       => _x('FAQ', 'add new on admin bar', 'zoomwedding'),
    'add_new'              => _x('Add FAQ', 'zoomwedding'),
    'add_new_item'         => __('Add FAQ ', 'zoomwedding'),
    'new_item'             => __('New FAQ', 'zoomwedding'),
    'edit_item'            => __('Edit FAQ', 'zoomwedding'),
    'view_item'            => __('View FAQ', 'zoomwedding'),
    'all_items'            => __('FAQs', 'zoomwedding'),
    'search_items'         => __('Search FAQs', 'zoomwedding'),
    'parent_item_colon'    => __('FAQs:', 'zoomwedding'),
    'not_found'            => __('No FAQs found.', 'zoomwedding'),
    'not_found_in_trash'   => __('No FAQs found in Trash.', 'zoomwedding')
  );

  $args = array(
    'show_in_rest'             => true,
    'labels'                   => $labels,
    'public'                   => false,
    'publicly_queryable'       => true,
    'show_ui'                  => true,
    'show_in_menu'             => true,
    'query_var'                => true,
    'capability_type'          => 'post',
    'map_meta_cap'             => true,
    'has_archive'              => false,
    'hierarchical'             => false,
    'menu_position'            => null,
    'supports'                 => array('title', 'editor'),
    'menu_icon'                => 'dashicons-editor-help',
  );
  register_post_type('faq', $args);
}

function faq_categories() {
  register_taxonomy('faq_categories', ['faq'], [
    'labels' => [
      'name'               => _x('FAQ Categories', 'post type general name', 'zoomwedding'),
      'singular_name'      => _x('FAQ Category', 'post type singular name', 'zoomwedding'),
      'menu_name'          => _x('FAQ Categories', 'admin menu', 'zoomwedding'),
      'name_admin_bar'     => _x('FAQ Category', 'add new on admin bar', 'zoomwedding'),
      'add_new'            => _x('Add FAQ Category', 'zoomwedding'),
      'add_new_item'       => __('Add FAQ Category ', 'zoomwedding'),
      'new_item'           => __('New FAQ Category', 'zoomwedding'),
      'edit_item'          => __('Edit  FAQ Category', 'zoomwedding'),
      'view_item'          => __('View FAQ Category', 'zoomwedding'),
      'all_items'          => __('All FAQ Category', 'zoomwedding'),
      'search_items'       => __('Search FAQ Categories', 'zoomwedding'),
      'parent_item_colon'  => __('Parent FAQ Category:', 'zoomwedding'),
      'not_found'          => __('No  FAQ Categories found.', 'zoomwedding'),
      'not_found_in_trash' => __('No FAQ Categories found in Trash.', 'zoomwedding')
    ],
    'hierarchical'      => true,
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_rest'      => true,  
    'public'            => true,
  ]);
}
add_action( 'init', 'faq_categories' );