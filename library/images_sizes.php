<?php

// Add additional image sizes
add_action( 'after_setup_theme', 'custom_image_sizes' );
function custom_image_sizes() {
  add_image_size( 'project-thumb', 270, 400, true );
}