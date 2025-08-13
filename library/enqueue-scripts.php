<?php

/**
 * Enqueue all styles and scripts
 */


if (! function_exists('zwickywed_scripts')) :
  function zwickywed_scripts() {
    $id = get_the_ID();    

    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('main-theme-style', get_template_directory_uri() . '/assets/css/app.css', '', date("ndY_h:i:s", filemtime(get_template_directory() . '/assets/css/app.css')));

    // Enqueue scripts
    wp_deregister_script('jquery');

    wp_enqueue_script('masonry-js', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', [], '4.2.2', true);
    wp_enqueue_script('fslightbox-js', get_template_directory_uri() . '/assets/js/fslightbox.js', [], '3.7.4', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main-min.js', [], date("ndY_h:i:s", filemtime(get_template_directory() . '/assets/js/main-min.js')), true);
    wp_localize_script('main-js', 'starter_data', [
      'root_url' => get_template_directory_uri(), 
      'ajax_url' =>  admin_url('admin-ajax.php')
    ]);
  }

  add_action('wp_enqueue_scripts', 'zwickywed_scripts');
endif;