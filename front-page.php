<?php

/**
 * Front page
 */

get_header(); ?>

<main>
  <?php get_template_part( 'template-parts/hero', 'slider' ); ?>
  <?php get_template_part( 'template-parts/home', 'projects' ); ?>
  <?php get_template_part( 'template-parts/section', 'marquee' ); ?>
  <?php get_template_part( 'template-parts/section', 'masonry' ); ?>
  <?php get_template_part( 'template-parts/section', 'slider' ); ?>
  <?php get_template_part( 'template-parts/section', 'services' ); ?>
  <?php get_template_part( 'template-parts/section', 'awards' ); ?>
  <?php get_template_part( 'template-parts/home', 'contact' ); ?>
  <?php get_template_part( 'template-parts/section', 'instagram' ); ?>
</main>

<?php get_footer();
