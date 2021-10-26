<?php

function mytheme_register_styles() {
    wp_enqueue_style (
        'main-style',
        get_template_directory_uri() . '/style.css', array('bootstrap'));

    wp_enqueue_style (
        'custom-style',
        get_template_directory_uri() . '/assets/css/custom.css');

    wp_enqueue_style(
        'bootstrap',
        "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css",
        array(),
        '4.3.1'
    );
}

add_action( 'wp_enqueue_scripts', 'mytheme_register_styles');

function mytheme_register_scripts() {
    wp_enqueue_script(
        'bootstrap-script',
        "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js",
        array('jquery-script', 'popper-script'),
        '4.3.1',
        true
    );

    wp_enqueue_script(
        'jquery-script',
        "https://code.jquery.com/jquery-3.3.1.slim.min.js",
        array(),
        '3.3.1',
        true
    );

    wp_enqueue_script(
        'popper-script',
        "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js",
        array('jquery-script'),
        '1.14.7',
        true
    );

    wp_enqueue_script( 
        'mytheme-script',
        get_template_directory_uri() . "/assets/js/main.js",
        array('bootstrap-script'), 
        '1.0',
        true 
    );
}

add_action( 'wp_enqueue_scripts', 'mytheme_register_scripts');