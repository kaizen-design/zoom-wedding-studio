<?php

// ajax
add_action('wp_ajax_starterExample', 'starter_ajax_starterExample');
add_action('wp_ajax_nopriv_starterExample', 'starter_ajax_starterExample');
function starter_ajax_starterExample(){
    $test = sanitize_text_field($_POST['test']);


    $res = [
        'test' => $test,
    ];

    echo json_encode($res);

    wp_die();
}