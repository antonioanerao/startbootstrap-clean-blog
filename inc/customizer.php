<?php
function wphahamu_customizer ( $wp_customizer ) {
    /*
     * Adicionar redes sociais no Blog para aparecer no footer
     */

    $wp_customizer->add_section(
        'sec_redes_sociais', [
        'title' => 'Redes sociais',
        'description' => 'Adicione suas redes sociais'
    ]);

    $wp_customizer->add_setting(
        'add_facebook', [
        'type' => 'theme_mod',
        'default' => '#',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);

    $wp_customizer->add_control(
        'add_facebook', [
        'label' => 'Facebook',
        'description' => 'Link do Facebook',
        'section' => 'sec_redes_sociais',
        'type' => 'text'
    ]);

    $wp_customizer->add_setting(
        'add_twitter', [
        'type' => 'theme_mod',
        'default' => '#',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);

    $wp_customizer->add_control(
        'add_twitter', [
        'label' => 'Twitter',
        'description' => 'Link do Twitter',
        'section' => 'sec_redes_sociais',
        'type' => 'text'
    ]);

    $wp_customizer->add_setting(
        'add_github', [
        'type' => 'theme_mod',
        'default' => '#',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);

    $wp_customizer->add_control(
        'add_github', [
        'label' => 'Github',
        'description' => 'Link do Github',
        'section' => 'sec_redes_sociais',
        'type' => 'text'
    ]);

    $wp_customizer->add_setting(
        'add_linkedin', [
        'type' => 'theme_mod',
        'default' => '#',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);

    $wp_customizer->add_control(
        'add_linkedin', [
        'label' => 'LinkedIn',
        'description' => 'Link do LinkedIn',
        'section' => 'sec_redes_sociais',
        'type' => 'text'
    ]);

	$wp_customizer->add_setting(
		'add_dockerhub', [
		'type' => 'theme_mod',
		'default' => '#',
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	]);

	$wp_customizer->add_control(
		'add_dockerhub', [
		'label' => 'DockerHub',
		'description' => 'Link do Docker Hub',
		'section' => 'sec_redes_sociais',
		'type' => 'text'
	]);


}
add_action('customize_register', 'wphahamu_customizer');