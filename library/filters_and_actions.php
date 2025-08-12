<?php

add_filter('show_admin_bar', '__return_false');


// Removes from admin menu
// hide some menus from other users except admin
//add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );

    $user_login = wp_get_current_user()->user_login;

    if($user_login != 'admin'){
        remove_menu_page('plugins.php');
        remove_menu_page('edit.php?post_type=acf-field-group');
    }
}
// Removes comments from post and pages
add_action('init', 'remove_comment_support', 100);
function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}

// Removes from admin bar
//add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}

// remove tag and category from post
//add_action('admin_menu', 'my_remove_sub_menus');
function my_remove_sub_menus() {
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=category');
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');
}

// remove these columns of posts in dashboard
add_filter( 'manage_post_posts_columns', 'set_custom_edit_post_columns' );
function set_custom_edit_post_columns($columns) {
    unset($columns['comments']);
//    unset($columns['categories']);
//    unset($columns['tags']);

    return $columns;
}

