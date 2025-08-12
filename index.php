<?php

get_header();

if(is_archive()){
    header("Location: ". get_bloginfo('url'));
    exit();
}
?>

    <main class="container-main">
        <?php while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; ?>
    </main>

<?php get_footer();

