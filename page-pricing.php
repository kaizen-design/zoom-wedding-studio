
<?php

/**
 *  Template Name: Pricing
 */

get_header(); ?>

<main>
  <?php get_template_part( 'template-parts/pricing', 'hero' ); ?>
  <?php get_template_part( 'template-parts/pricing', 'plans' ); ?>
  <?php get_template_part( 'template-parts/pricing', 'addons' ); ?>
  <?php get_template_part( 'template-parts/section', 'contact' ); ?>
  <?php get_template_part( 'template-parts/section', 'instagram' ); ?>
</main>

<?php get_footer();
