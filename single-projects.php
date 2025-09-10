<?php
get_header();
?>

<main>
  <?php get_template_part( 'template-parts/section', 'masonry' ); ?>
  <?php get_template_part( 'template-parts/section', 'contact' ); ?>
  <?php get_template_part( 'template-parts/section', 'instagram' ); ?>
</main>

<?php get_footer();
