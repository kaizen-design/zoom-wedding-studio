<?php

/**
 * Enqueue all styles and scripts
 */


if (! function_exists('zwickywed_scripts')) :
  function zwickywed_scripts() {
    $id = get_the_ID();    

    wp_enqueue_style('main-css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('main-theme-css', get_template_directory_uri() . '/assets/css/app.css', '', date("ndY_h:i:s", filemtime(get_template_directory() . '/assets/css/app.css')));
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');

    // Enqueue scripts
    wp_deregister_script('jquery');

    wp_enqueue_script('masonry-js', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', [], '4.2.2', true);
    wp_enqueue_script('fslightbox-js', get_template_directory_uri() . '/assets/js/fslightbox.js', [], '3.7.4', true);
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', [], '2.3.1', true);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], '11.2.10', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main-min.js', [], date("ndY_h:i:s", filemtime(get_template_directory() . '/assets/js/main-min.js')), true);
    wp_localize_script('main-js', 'starter_data', [
      'root_url' => get_template_directory_uri(), 
      'ajax_url' =>  admin_url('admin-ajax.php')
    ]);
  }

  add_action('wp_enqueue_scripts', 'zwickywed_scripts');
endif;