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




    // Home Page Settings

    $wp_customizer->add_section(
        'sec_home_page', array(
            'title'			=> 'Home Page Products and Blog Settings',
            'description'	=> 'Home Page Section'
        )
    );


    $wp_customizer->add_setting(
        'set_popular_max_num', array(
            'type'					=> 'theme_mod',
            'default'				=> '',
            'sanitize_callback'		=> 'absint'
        )
    );

    $wp_customizer->add_control(
        'set_popular_max_num', array(
            'label'				=> 'Popular Products Max Number',
            'description'		=> 'Popular Products Max Number',
            'section'			=> 'sec_home_page',
            'type'				=> 'number'
        )
    );


    $wp_customizer->add_setting(
        'set_popular_max_col', array(
            'type'					=> 'theme_mod',
            'default'				=> '',
            'sanitize_callback'		=> 'absint'
        )
    );

    $wp_customizer->add_control(
        'set_popular_max_col', array(
            'label'				=> 'Popular Products Max Columns',
            'description'		=> 'Popular Products Max Columns',
            'section'			=> 'sec_home_page',
            'type'				=> 'number'
        )
    );


    $wp_customizer->add_setting(
        'set_new_arrivals_max_num', array(
            'type'					=> 'theme_mod',
            'default'				=> '',
            'sanitize_callback'		=> 'absint'
        )
    );

    $wp_customizer->add_control(
        'set_new_arrivals_max_num', array(
            'label'				=> 'New Arrivals Max Number',
            'description'		=> 'New Arrivals Max Number',
            'section'			=> 'sec_home_page',
            'type'				=> 'number'
        )
    );


    $wp_customizer->add_setting(
        'set_new_arrivals_max_col', array(
            'type'					=> 'theme_mod',
            'default'				=> '',
            'sanitize_callback'		=> 'absint'
        )
    );

    $wp_customizer->add_control(
        'set_new_arrivals_max_col', array(
            'label'				=> 'New Arrivals Max Columns',
            'description'		=> 'New Arrivals Max Columns',
            'section'			=> 'sec_home_page',
            'type'				=> 'number'
        )
    );

    // Deal of the Week Checkbox

    $wp_customizer->add_setting(
        'set_deal_show', array(
            'type'					=> 'theme_mod',
            'default'				=> '',
            'sanitize_callback'		=> 'fancy_lab_sanitize_checkbox'
        )
    );

    $wp_customizer->add_control(
        'set_deal_show', array(
            'label'				=> 'Show deal of the week?',
            'section'			=> 'sec_home_page',
            'type'				=> 'checkbox'
        )
    );

    // Deal of the Week Product ID

    $wp_customizer->add_setting(
        'set_deal', array(
            'type'					=> 'theme_mod',
            'default'				=> '',
            'sanitize_callback'		=> 'absint'
        )
    );

    $wp_customizer->add_control(
        'set_deal', array(
            'label'				=> 'Deal of the Week Product ID',
            'description'		=> 'Product ID to display',
            'section'			=> 'sec_home_page',
            'type'				=> 'number'
        )
    );
}
add_action('customize_register', 'wphahamu_customizer');

function fancy_lab_sanitize_checkbox( $checked ){
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}