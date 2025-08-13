<?php

/**
 * Front page
 */

get_header(); ?>

<main>
  <?php get_template_part( 'template-parts/hero', 'slider' ); ?>
  <?php get_template_part( 'template-parts/section', 'projects' ); ?>
  <?php get_template_part( 'template-parts/section', 'marquee' ); ?>
  <?php get_template_part( 'template-parts/section', 'masonry' ); ?>
  <?php get_template_part( 'template-parts/section', 'slider' ); ?>
</main>

<?php get_footer();
