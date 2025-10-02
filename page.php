<?php

get_header(); ?>

<main>
  <?php while (have_posts()) : the_post(); ?>
    <div class="container-xl py-6">
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
</main>

<?php get_footer();
