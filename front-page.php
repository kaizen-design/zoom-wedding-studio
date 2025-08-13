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
  <?php while (have_posts()) : the_post(); ?>

    <?php //the_content(); ?>

  <?php endwhile; ?>
</main>

<?php get_footer();
