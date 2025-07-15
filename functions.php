<?php
// Load required assets for the portfolio template
function portfolio_theme_enqueue_assets() {
    // Verifica se é a página portfolio de diferentes formas
    $is_portfolio_page = false;
    
    // Método 1: Verifica se é template page-portfolio.php
    if (is_page_template('page-portfolio.php')) {
        $is_portfolio_page = true;
    }
    
    // Método 2: Verifica se é a página com slug 'portfolio'
    if (is_page('portfolio')) {
        $is_portfolio_page = true;
    }
    
    // Método 3: Verifica se é a página inicial e se ela usa o template portfolio
    if (is_front_page()) {
        $page_id = get_option('page_on_front');
        if ($page_id) {
            $template = get_page_template_slug($page_id);
            if ($template === 'page-portfolio.php') {
                $is_portfolio_page = true;
            }
        }
    }
    
    // Método 4: Fallback - se nenhum dos métodos acima funcionar, carrega sempre
    // (remova este comentário se quiser forçar o carregamento em todas as páginas)
    // $is_portfolio_page = true;
    
    if ($is_portfolio_page) {
        // Google Fonts - Raleway
        wp_enqueue_style(
            'portfolio-theme-google-fonts',
            'https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&display=swap',
            array(),
            null
        );

        // Main stylesheet
        wp_enqueue_style(
            'portfolio-theme-style', 
            get_stylesheet_uri(), 
            array(), 
            wp_get_theme()->get('Version')
        );

        // Font Awesome (CDN)
        wp_enqueue_style(
            'portfolio-theme-fontawesome',
            'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
            array(),
            '6.5.0'
        );

        // JavaScript (loaded in footer)
        wp_enqueue_script(
            'portfolio-theme-translate',
            get_stylesheet_directory_uri() . '/js/translate.js',
            array('jquery'),
            wp_get_theme()->get('Version'),
            true
        );

        wp_enqueue_script(
            'portfolio-theme-modal',
            get_stylesheet_directory_uri() . '/js/modal.js',
            array('jquery'),
            wp_get_theme()->get('Version'),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'portfolio_theme_enqueue_assets');

// Clean up WordPress <head> output for performance and SEO
function portfolio_theme_optimize_head() {
    // Remove emoji scripts and styles
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');

    // Remove unnecessary header links
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'wp_shortlink_wp_head', 10);
    remove_action('wp_head', 'wp_generator'); // Removes WordPress version meta

    // Disable REST API discovery links and oEmbed
    remove_action('wp_head', 'rest_output_link_wp_head', 10);
    remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
    remove_action('wp_head', 'wp_oembed_add_host_js');
}
add_action('init', 'portfolio_theme_optimize_head');

// Função corrigida para criar a página portfolio
function portfolio_theme_create_portfolio_page() {
    // Verifica se a página já existe pelo slug
    $page_check = get_page_by_path('portfolio');
    
    if (!$page_check) {
        // Cria a página portfolio
        $new_page_id = wp_insert_post(array(
            'post_title'     => 'Portfolio',
            'post_name'      => 'portfolio', // Define o slug explicitamente
            'post_content'   => '<h2>Meus projetos</h2><p>Adicione aqui seus projetos de destaque.</p>',
            'post_status'    => 'publish',
            'post_type'      => 'page',
            'post_author'    => 1,
            'page_template'  => 'page-portfolio.php' // Nome correto do template
        ));
        
        // Verifica se a página foi criada com sucesso
        if (!is_wp_error($new_page_id)) {
            // Define como página inicial
            update_option('show_on_front', 'page');
            update_option('page_on_front', $new_page_id);
            
            // Log para debug (opcional)
            error_log('Portfolio page created with ID: ' . $new_page_id);
        } else {
            error_log('Error creating portfolio page: ' . $new_page_id->get_error_message());
        }
    } else {
        // Se a página já existe, apenas define como página inicial se ainda não for
        if (get_option('page_on_front') != $page_check->ID) {
            update_option('show_on_front', 'page');
            update_option('page_on_front', $page_check->ID);
        }
        
        // Atualiza o template da página se necessário
        $current_template = get_page_template_slug($page_check->ID);
        if ($current_template !== 'page-portfolio.php') {
            update_post_meta($page_check->ID, '_wp_page_template', 'page-portfolio.php');
        }
    }
}
add_action('after_switch_theme', 'portfolio_theme_create_portfolio_page');

// Função adicional para recriar a página manualmente (para debug)
function portfolio_theme_recreate_page() {
    if (current_user_can('manage_options')) {
        // Remove a página existente
        $existing_page = get_page_by_path('portfolio');
        if ($existing_page) {
            wp_delete_post($existing_page->ID, true);
        }
        
        // Recria a página
        portfolio_theme_create_portfolio_page();
    }
}

// Uncomment the line below to manually recreate the page (remove after use)
// add_action('wp_loaded', 'portfolio_theme_recreate_page');

// Função para verificar se o template existe
function portfolio_theme_check_template() {
    $template_path = get_stylesheet_directory() . '/page-portfolio.php';
    if (!file_exists($template_path)) {
        add_action('admin_notices', function() {
            echo '<div class="notice notice-warning"><p>Aviso: O template page-portfolio.php não foi encontrado no diretório do tema.</p></div>';
        });
    }
}
add_action('admin_init', 'portfolio_theme_check_template');

// Função para debug - mostra informações sobre a página atual
function portfolio_theme_debug_page_info() {
    if (current_user_can('manage_options') && isset($_GET['portfolio_debug'])) {
        add_action('wp_footer', function() {
            $page_id = get_queried_object_id();
            $template = get_page_template_slug($page_id);
            $is_front = is_front_page();
            $is_portfolio = is_page('portfolio');
            $is_template = is_page_template('portfolio-page.php');
            
            echo '<div style="position:fixed;top:0;left:0;background:black;color:white;padding:10px;z-index:9999;font-size:12px;">';
            echo '<strong>DEBUG INFO:</strong><br>';
            echo 'Page ID: ' . $page_id . '<br>';
            echo 'Template: ' . $template . '<br>';
            echo 'Is Front Page: ' . ($is_front ? 'Yes' : 'No') . '<br>';
            echo 'Is Portfolio Page: ' . ($is_portfolio ? 'Yes' : 'No') . '<br>';
            echo 'Is Template Portfolio: ' . ($is_template ? 'Yes' : 'No') . '<br>';
            echo 'Page Slug: ' . get_post_field('post_name', $page_id) . '<br>';
            echo '</div>';
        });
    }
}
add_action('init', 'portfolio_theme_debug_page_info');

// Função alternativa para carregar estilos sempre (temporário para debug)
function portfolio_theme_force_assets() {
    // Descomente as linhas abaixo para forçar o carregamento dos estilos
    /*
    wp_enqueue_style(
        'portfolio-theme-google-fonts',
        'https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'portfolio-theme-style', 
        get_stylesheet_uri(), 
        array(), 
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'portfolio-theme-fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        array(),
        '6.5.0'
    );
    */
}
// add_action('wp_enqueue_scripts', 'portfolio_theme_force_assets');