
<?php

/**
 *  Template Name: Projects
 */

get_header(); ?>

<main>
  <?php get_template_part( 'template-parts/projects', 'hero' ); ?>
  <?php get_template_part( 'template-parts/projects', 'list' ); ?>
  <?php get_template_part( 'template-parts/projects', 'services' ); ?>
  <?php get_template_part( 'template-parts/projects', 'about-us' ); ?>
  <?php get_template_part( 'template-parts/section', 'contact' ); ?>
  <?php get_template_part( 'template-parts/section', 'instagram' ); ?>
</main>

<?php get_footer();
