
<?php

/**
 *  Template Name: About Us
 */

get_header(); ?>

<main>
  <?php get_template_part( 'template-parts/about', 'hero' ); ?>
  <?php get_template_part( 'template-parts/about', 'welcome' ); ?>
  <?php get_template_part( 'template-parts/about', 'video' ); ?>
  <?php get_template_part( 'template-parts/about', 'photo' ); ?>
  <?php get_template_part( 'template-parts/about', 'team' ); ?>
  <?php get_template_part( 'template-parts/about', 'awards' ); ?>
  <?php get_template_part( 'template-parts/section', 'faq' ); ?>
  <?php get_template_part( 'template-parts/about', 'advantages' ); ?>
  <?php get_template_part( 'template-parts/section', 'contact' ); ?>
  <?php get_template_part( 'template-parts/section', 'instagram' ); ?>
</main>

<?php get_footer();
