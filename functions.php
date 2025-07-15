<?php
function meu_tema_child_enqueue_assets() {
    // Estilos
    wp_enqueue_style('tema-pai-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('tema-filho-style', get_stylesheet_uri(), array('tema-pai-style'));

    // FontAwesome
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');

    // Scripts
    wp_enqueue_script('tema-filho-translete', get_stylesheet_directory_uri() . '/js/translate.js', array('jquery'), null, true);
    wp_enqueue_script('tema-filho-modal', get_stylesheet_directory_uri() . '/js/modal.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'meu_tema_child_enqueue_assets');

