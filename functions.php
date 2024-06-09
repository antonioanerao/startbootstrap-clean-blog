<?php
require_once get_template_directory() . '/inc/bootstrap-navwalker.php';
require_once get_template_directory() . '/inc/customizer.php';
// Carregando arquivos .css e .js
function load_scripts() {
    //Arquivos .css
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800', false );
    wp_enqueue_style( 'google-fonts-2', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic', false );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css',
        array(), '1.0', 'all' );
    wp_enqueue_style( 'font-awesome-blog', get_template_directory_uri() . '/vendor/fontawesome-free/css/all.min.css',
        array(), NULL, 'all' );
    wp_enqueue_style( 'blog-style', get_template_directory_uri() . '/css/clean-blog.min.css',
        array(), '1.0', 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css',
        array(), '1.1', 'all' );

    //Arquivos .js
    wp_enqueue_script('jquery-js', get_stylesheet_directory_uri() . '/vendor/jquery/jquery.min.js',
        array(), NULL, True
    );
    wp_enqueue_script('bootstrap-bundle', get_stylesheet_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js',
        array(), NULL, True
    );
    wp_enqueue_script('clean-blog-js', get_stylesheet_directory_uri() . '/js/clean-blog.min.js',
        array(), NULL, True
    );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Função de Configuração do Tema
function wp_config(){
    // Registrando menus
    register_nav_menus( array(
        'menu-1' => esc_html__( 'Primary', 'wphahamu' ),
    ) );

    // Adicionando suporte ao tema
    $args = array(
        'height'	=> 600,
        'width'		=> 1920
    );
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'single-post-thumbnail', 1024, 800 );
    add_theme_support( 'post-formats', array( 'video', 'image' ) );
    add_theme_support('title-tag');
    add_theme_support('custom-logo', [
        'height' => '46',
        'width' => '220'
    ]);
}
add_action( 'after_setup_theme', 'wp_config', 0 );

//Altera o valor padrao do the_expert(); de 55 para 20
function resumo( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'resumo', 999 );

/* Customiza os botões de exibir posts mais recentes e mais antigos  */
function posts_link_attributes() {
    return 'class="btn btn-primary"';
}
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

/* Excluir páginas dos resultados de buscas */
function excluirPaginaBusca($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts','excluirPaginaBusca');

// Registrando Sidebars
add_action('widgets_init', 'wp_sidebar');
function wp_sidebar() {
    register_sidebar([
        'name' => 'Pesquisar (Home)',
        'id' => 'pesquisar-home',
        'description' => 'Adiciona uma busca na Home. Deixe o Widget sem título',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 style="display: none;">',
        'after_title' => '</h2>'
    ]);

    register_sidebar([
        'name' => 'Pesquisar (Tags e Categorias)',
        'id' => 'pesquisar-tags-categorias',
        'description' => 'Adiciona uma busca no resultado de categorias e tags',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 style="display: none;">',
        'after_title' => '</h2>'
    ]);

    register_sidebar([
        'name' => 'Pesquisar (Post)',
        'id' => 'pesquisar-post',
        'description' => 'Adiciona uma busca no fim de um post',
        'before_widget' => '<div class="sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="ml-3">',
        'after_title' => '</h4>'
    ]);

    register_sidebar([
        'name' => 'Pesquisar (Resultado Busca)',
        'id' => 'pesquisar-resultado-busca',
        'description' => 'Adiciona uma busca na página de resultado de buscas',
        'before_widget' => '<div class="sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="ml-3">',
        'after_title' => '</h4>'
    ]);

    register_sidebar([
        'name' => 'Home Sidebar',
        'id' => 'sidebar-home',
        'description' => 'Adiciona um sidebar na Home',
        'before_widget' => '<div style="margin-left: -20px;" class="sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="ml-3">',
        'after_title' => '</h4>'
    ]);

    register_sidebar([
        'name' => 'Post Sidebar',
        'id' => 'sidebar-post',
        'description' => 'Adiciona um sidebar no post',
        'before_widget' => '<div style="margin-left: -20px;" class="sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="ml-3">',
        'after_title' => '</h4>'
    ]);
}
