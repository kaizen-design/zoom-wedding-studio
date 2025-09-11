<?php
get_header();
?>

<main>
  <?php get_template_part( 'template-parts/project', 'hero' ); ?>
  <?php get_template_part( 'template-parts/project', 'description' ); ?>
  <?php get_template_part( 'template-parts/project', 'video' ); ?>
  <?php get_template_part( 'template-parts/project', 'package' ); ?>
  <?php get_template_part( 'template-parts/project', 'reels' ); ?>
  <?php get_template_part( 'template-parts/section', 'masonry' ); ?>
  <?php get_template_part( 'template-parts/section', 'contact' ); ?>
  <?php get_template_part( 'template-parts/section', 'instagram' ); ?>
</main>

<?php get_footer();
