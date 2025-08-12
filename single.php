<?php

if(get_post_type() == 'testimonial'){
    header("Location: ". get_bloginfo('url'));
    exit();
}

get_header(); ?>

    <main class="container-main">
        <?php while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; ?>
    </main>
<?php get_footer();

