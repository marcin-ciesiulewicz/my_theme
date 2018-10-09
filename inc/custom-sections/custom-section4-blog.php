<?php
/*
    ==================================
        CUSTOM SECTION 4 - NEWS
    ==================================
*/

function sds_custom_blog_section( $wp_customize ) {

    //panel
    $wp_customize->add_panel( 'sds_front_section4_blog', array(
        'title'         => __( 'Sekcaj 4 - Blog' ),
        'priority'      => 31
    ) );

    /*
        opcje sekcji
    */
    $wp_customize->add_section( 'sds_front_section4_section', array(
        'title'         => __( 'Opcje sekcji Blog' ),
        'description'   => 'Tutaj możesz włączyć lub wyłączyć sekcję',
        'panel'         => 'sds_front_section4_blog'
    ) );

    $wp_customize->add_setting( 'sds_front_section4_options', array(
        'capability'    => 'edit_theme_options',
        'default'       => 'type1'
    ) );

    $wp_customize->add_control( 'sds_front_section4_options', array(
        'type'          => 'radio',
        'section'       => 'sds_front_section4_section',
        'label'         => __( 'Opcje wyświetlania' ),
        'description'   => __( 'Wybierz opcje wyświetlania 4 sekcji' ),
        'choices'       => array(
            'type1'     => 'Wyświetlaj',
            'type2'     => 'Wyłącz'
        )
    ) );

    /*
        zarządzanie sekcjią
    */
    $wp_customize->add_section( 'sds_front_section4_content', array(
        'title'         => __( 'Zarządzaj sekcją' ),
        'description'   => __( 'Tutaj możesz zmienić tytuł, kategorię wyświetlanych postów itd. Kategorie postów możesz znaleźć <a href="http://localhost/xampp/wordpress7/wp-admin/edit-tags.php?taxonomy=category" target="__blank">TUTAJ</a>' ),
        'panel'         => 'sds_front_section4_blog'
    ) );

    //tytuł
    $wp_customize->add_setting( 'sds_front_section4_title', array(
        'capability'    => 'edit_theme_options',
        'default'       => 'Nasz blog',
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_front_section4_title', array(
        'type'          => 'text',
        'label'         => __( 'Zmień tytuł' ),
        'section'       => 'sds_front_section4_content'
    ) );

    //kategoria postów
    $wp_customize->add_setting( 'sds_front_section4_blog_category', array(
        'capability'    => 'edit_theme_options',
        'default'       => '',
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_front_section4_blog_category', array(
        'type'          => 'text',
        'label'         => __( 'Zmień kategorię wyświetlanych postów.' ),
        'section'       => 'sds_front_section4_content'
    ) );

    //tekst przycisku
    $wp_customize->add_setting( 'sds_front_section4_btn_title', array(
        'capability'    => 'edit_theme_options',
        'default'       => __( 'Zobacz więcej wpisów' ),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_front_section4_btn_title', array(
        'type'          => 'text',
        'label'         => __( 'Zmień tytuł przycisku' ),
        'section'       => 'sds_front_section4_content'
    ) );

}

add_action( 'customize_register', 'sds_custom_blog_section' );