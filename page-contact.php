
<?php

/**
 *  Template Name: Contact Us
 */

get_header(); ?>

<main>
  <?php get_template_part( 'template-parts/section', 'hero' ); ?>
  <?php get_template_part( 'template-parts/contact', 'contacts' ); ?>
  <?php get_template_part( 'template-parts/contact', 'form' ); ?>
  <?php get_template_part( 'template-parts/section', 'instagram' ); ?>
</main>

<?php get_footer();
