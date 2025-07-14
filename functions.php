<?php

function meu_tema_child_enqueue_styles() {
    
    wp_enqueue_style('tema-filho-style', get_stylesheet_uri());

   
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        array(),
        '6.5.0'
    );
}
add_action('wp_enqueue_scripts', 'meu_tema_child_enqueue_styles');

function meu_tema_child_enqueue_scripts() {
    wp_enqueue_script(
        'tema-filho-translate',
        get_stylesheet_directory_uri() . '/js/translate.js',
        array(), 
        null,
        true
    );

    wp_enqueue_script(
        'tema-filho-modal',
        get_stylesheet_directory_uri() . '/js/modal.js',
        array(), 
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'meu_tema_child_enqueue_scripts');

