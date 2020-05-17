<?php
// Carregando arquivos .css e .js
function load_scripts(){
    //Arquivos .css
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800', false );
    wp_enqueue_style( 'google-fonts-2', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic', false );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css',
        array(), '1.0', 'all' );
    wp_enqueue_style( 'font-awesome-blog', get_template_directory_uri() . '/vendor/fontawesome-free/css/all.min.css',
        array(), '1.0', 'all' );
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
