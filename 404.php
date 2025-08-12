<?php

$page_404_title = get_field('page_404_title', 'option');
$page_404_content = get_field('page_404_content', 'option');

get_header(); ?>

    <main class="container-main">

        <?php if($page_404_title): ?>
            <h1><?php echo $page_404_title; ?></h1>
        <?php endif;?>

        <?php if($page_404_content): ?>
            <?php echo apply_filters('the_content', $page_404_content); ?>
        <?php endif;?>
    </main>

<?php get_footer();
