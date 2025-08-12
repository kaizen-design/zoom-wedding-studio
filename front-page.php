<?php

/**
 * Front page
 */

get_header(); ?>

<main>
  <?php get_template_part( 'template-parts/hero', 'slider' ); ?>
  <?php while (have_posts()) : the_post(); ?>

    <?php //the_content(); ?>

  <?php endwhile; ?>
</main>

<?php get_footer();
