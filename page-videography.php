
<?php

/**
 *  Template Name: Videography
 */

get_header(); ?>

<main>
  <?php get_template_part( 'template-parts/videography', 'hero' ); ?>
  <?php get_template_part( 'template-parts/videography', 'masonry' ); ?>
  <?php get_template_part( 'template-parts/section', 'contact' ); ?>
  <?php get_template_part( 'template-parts/section', 'instagram' ); ?>
</main>

<?php get_footer();
