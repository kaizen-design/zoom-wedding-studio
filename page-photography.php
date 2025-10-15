
<?php

/**
 *  Template Name: Photography
 */

get_header(); ?>

<main>
  <?php get_template_part( 'template-parts/section', 'hero' ); ?>
  <?php get_template_part( 'template-parts/photography', 'masonry' ); ?>
  <?php get_template_part( 'template-parts/section', 'contact' ); ?>
  <?php get_template_part( 'template-parts/section', 'instagram' ); ?>
</main>

<?php get_footer();
