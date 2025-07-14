<?php
// Função para carregar os estilos e scripts do tema pai e do child theme
function meu_tema_child_enqueue_styles() {
    // Carregar o CSS do tema pai (Hello Elementor ou outro)
    wp_enqueue_style('tema-pai-style', get_template_directory_uri() . '/style.css');

    // Carregar o CSS do child theme (style.css do child theme)
    wp_enqueue_style('tema-filho-style', get_stylesheet_uri(), array('tema-pai-style'));
}
add_action('wp_enqueue_scripts', 'meu_tema_child_enqueue_styles');

// Função para carregar os scripts do child theme
function meu_tema_child_enqueue_scripts() {
    // Carregar o script translate.js
    wp_enqueue_script('tema-filho-translete', get_stylesheet_directory_uri() . '/js/translete.js', array('jquery'), null, true);

    // Carregar o script modal.js
    wp_enqueue_script('tema-filho-modal', get_stylesheet_directory_uri() . '/js/modal.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'meu_tema_child_enqueue_scripts');
