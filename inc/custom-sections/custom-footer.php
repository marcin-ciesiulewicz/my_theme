<?php
/*
    ==================================
        CUSTOM FOOTER
    ==================================
*/

function sds_custom_footer( $wp_customize ) {

    //panel
    $wp_customize->add_panel( 'sds_footer_panel', array(
        'title'         => __( 'Footer' ),
        'priority'      => 32
    ) );

    /*
        zarządzanie footer
    */
    $wp_customize->add_section( 'sds_footer_section', array(
        'title'         => __( 'Zarządzaj stopką' ),
        'description'   => __( 'Tutaj możesz dodać linki społecznościowe oraz zmienić podpis copyright. Ikonki możesz znaleźć <a href="https://fontawesome.com/v4.7.0/icons/#brand" target="__blank">TUTAJ:</a>' ),
        'panel'         => 'sds_footer_panel'
    ) );


    /*
        ikonka 1
    */

    //label do pierwszej ikonki
    $wp_customize->add_setting('sds_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new SDS_Info( $wp_customize, 'i1', array(
        'label' => __('Pierwsza ikonka', 'sydney'),
        'section' => 'sds_footer_section',
        'settings' => 'sds_options[info]',
        'priority' => 10
        ) )
    ); 

    //ikonka 1
    $wp_customize->add_setting( 'sds_footer_ico1', array(
        'capabiity'     => 'edit_theme_options',
        'default'       => __( 'fa fa-facebook' ),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_footer_ico1', array(
        'type'          => 'text',
        'label'         => 'Zmień pierwszą ikonkę',
        'section'       => 'sds_footer_section'
    ) );

    //link ikonki 1
    $wp_customize->add_setting( 'sds_footer_ico1_href', array(
        'capabiity'     => 'edit_theme_options',
        'default'       => __( 'www.facebook.com/' ),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_footer_ico1_href', array(
        'type'          => 'text',
        'label'         => 'Zmień link pierwszej ikonki',
        'section'       => 'sds_footer_section'
    ) );


    /*
        ikonka 2
    */

    //label do drugiej ikonki
    $wp_customize->add_setting('sds_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new SDS_Info( $wp_customize, 'i2', array(
        'label' => __('Druga ikonka', 'sydney'),
        'section' => 'sds_footer_section',
        'settings' => 'sds_options[info]',
        'priority' => 10
        ) )
    ); 

    //ikonka 2
    $wp_customize->add_setting( 'sds_footer_ico2', array(
        'capabiity'     => 'edit_theme_options',
        'default'       => __( 'fa fa-twitter' ),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_footer_ico2', array(
        'type'          => 'text',
        'label'         => 'Zmień drugą ikonkę',
        'section'       => 'sds_footer_section'
    ) );

    //link ikonki 2
    $wp_customize->add_setting( 'sds_footer_ico2_href', array(
        'capabiity'     => 'edit_theme_options',
        'default'       => __( 'twitter.com/' ),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_footer_ico2_href', array(
        'type'          => 'text',
        'label'         => 'Zmień link drugiej ikonki',
        'section'       => 'sds_footer_section'
    ) );


    /*
        ikonka 3
    */

    //label do trzeciej ikonki
    $wp_customize->add_setting('sds_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new SDS_Info( $wp_customize, 'i3', array(
        'label' => __('Trzecia ikonka', 'sydney'),
        'section' => 'sds_footer_section',
        'settings' => 'sds_options[info]',
        'priority' => 10
        ) )
    ); 

    //ikonka 3
    $wp_customize->add_setting( 'sds_footer_ico3', array(
        'capabiity'     => 'edit_theme_options',
        'default'       => __( 'fa fa-google-plus-official' ),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_footer_ico3', array(
        'type'          => 'text',
        'label'         => 'Zmień trzecią ikonkę',
        'section'       => 'sds_footer_section'
    ) );

    //link ikonki 3
    $wp_customize->add_setting( 'sds_footer_ico3_href', array(
        'capabiity'     => 'edit_theme_options',
        'default'       => __( 'plus.google.com/discover?hl=pl' ),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_footer_ico3_href', array(
        'type'          => 'text',
        'label'         => 'Zmień link trzeciej ikonki',
        'section'       => 'sds_footer_section'
    ) );


    /*
        ikonka 4
    */

    //label do czwartej ikonki
    $wp_customize->add_setting('sds_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new SDS_Info( $wp_customize, 'i4', array(
        'label' => __('Czwarta ikonka', 'sydney'),
        'section' => 'sds_footer_section',
        'settings' => 'sds_options[info]',
        'priority' => 10
        ) )
    ); 

    //ikonka 4
    $wp_customize->add_setting( 'sds_footer_ico4', array(
        'capabiity'     => 'edit_theme_options',
        'default'       => __( 'fa fa-youtube' ),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_footer_ico4', array(
        'type'          => 'text',
        'label'         => 'Zmień czwartą ikonkę',
        'section'       => 'sds_footer_section'
    ) );

    //link ikonki 4
    $wp_customize->add_setting( 'sds_footer_ico4_href', array(
        'capabiity'     => 'edit_theme_options',
        'default'       => __( 'www.youtube.com/' ),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_footer_ico4_href', array(
        'type'          => 'text',
        'label'         => 'Zmień link czwartej ikonki',
        'section'       => 'sds_footer_section'
    ) );


    /*
        ikonka 5
    */

    //label do piątej ikonki
    $wp_customize->add_setting('sds_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new SDS_Info( $wp_customize, 'i5', array(
        'label' => __('Piąta ikonka', 'sydney'),
        'section' => 'sds_footer_section',
        'settings' => 'sds_options[info]',
        'priority' => 10
        ) )
    ); 

    //ikonka 4
    $wp_customize->add_setting( 'sds_footer_ico5', array(
        'capabiity'     => 'edit_theme_options',
        'default'       => __( 'fa fa-instagram' ),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_footer_ico5', array(
        'type'          => 'text',
        'label'         => 'Zmień piata ikonkę',
        'section'       => 'sds_footer_section'
    ) );

    //link ikonki 4
    $wp_customize->add_setting( 'sds_footer_ico5_href', array(
        'capabiity'     => 'edit_theme_options',
        'default'       => __( 'www.instagram.com/?hl=pl' ),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_footer_ico5_href', array(
        'type'          => 'text',
        'label'         => 'Zmień link piątej ikonki',
        'section'       => 'sds_footer_section'
    ) );


    //label do copyright
    $wp_customize->add_setting('sds_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new SDS_Info( $wp_customize, 'c1', array(
        'label' => __('Tekst copyright', 'sydney'),
        'section' => 'sds_footer_section',
        'settings' => 'sds_options[info]',
        'priority' => 10
        ) )
    ); 

    //podpis copyright
    $wp_customize->add_setting( 'sds_footer_copyright', array(
        'capabiity'     => 'edit_theme_options',
        'default'       => __( 'Copyright 2018 SDSTheme. All rights reserved' ),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_footer_copyright', array(
        'type'          => 'text',
        'label'         => 'Zmień teks copyright',
        'section'       => 'sds_footer_section'
    ) );
}

add_action( 'customize_register', 'sds_custom_footer' );