<?php
/*
    ==================================
        CUSTOM CSS CHANGER
    ==================================
*/

function sds_custom_colors_section( $wp_customize ) {

    //panel custol colors
    $wp_customize->add_panel('sds_custom_colors_panel', array(
        'title'         => __( 'Kolory' ),
        'priority'      => 27
    ) );

    //sekcja custom css
    $wp_customize->add_section( 'sds_custom_colors_section', array(
        'title'         => __( 'Kolory nagłówka' ),
        'description'   => __('Tutaj możesz zmienić kolry elementów nagłówka'),
        'panel'         => 'sds_custom_colors_panel'
    ) );

    //kolor logo tekstowego
    $wp_customize->add_setting( 'sds_custom_color_brand', array(
        'capability'    => 'edit_theme_options',
        'default'       => '#ffffff'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sds_custom_color_brand', array(
        'label'         => __( 'Zmień kolor logo tekstowego. Logo tekstowe jest aktywne jeżeli nie mamy wgranego logo jako image' ),
        'section'       => 'sds_custom_colors_section'
    ) ) );

    //kolor elementów menu
    $wp_customize->add_setting( 'sds_custom_color_menu_item', array(
        'capability'    => 'edit_theme_options',
        'default'       => '#ffffff'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sds_custom_color_menu_item', array(
        'label'         => __( 'Zmień kolor elementów menu' ),
        'section'       => 'sds_custom_colors_section'
    ) ) );

    //kolor pierwszego tytułu
    $wp_customize->add_setting( 'sds_custom_color_heading1', array(
        'capability'    => 'edit_theme_options',
        'default'       => '#ffffff'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sds_custom_color_heading1', array(
        'label'         => __( 'Zmień kolor pierwszego tytułu slidera' ),
        'section'       => 'sds_custom_colors_section'
    ) ) );

    //kolor drugiego tytułu
    $wp_customize->add_setting( 'sds_custom_color_heading2', array(
        'capability'    => 'edit_theme_options',
        'default'       => '#ffffff'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sds_custom_color_heading2', array(
        'label'         => __( 'Zmień kolor drugiego tytułu slidera' ),
        'section'       => 'sds_custom_colors_section'
    ) ) );

    //kolor podtytułu
    $wp_customize->add_setting( 'sds_custom_color_subtitle', array(
        'capability'    => 'edit_theme_options',
        'default'       => '#ffffff'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sds_custom_color_subtitle', array(
        'label'         => __( 'Zmień kolor podtytułu slidera' ),
        'section'       => 'sds_custom_colors_section'
    ) ) );

    //kolor przycisku
    $wp_customize->add_setting( 'sds_custom_color_button', array(
        'capability'    => 'edit_theme_options',
        'default'       => '#ffffff'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sds_custom_color_button', array(
        'label'         => __( 'Zmień kolor przycisku' ),
        'section'       => 'sds_custom_colors_section'
    ) ) );

    //kolor borderu przycisku
    $wp_customize->add_setting( 'sds_custom_color_button_border', array(
        'capability'    => 'edit_theme_options',
        'default'       => '#ffffff'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sds_custom_color_button_border', array(
        'label'         => __( 'Zmień kolor obramowania przycisku' ),
        'section'       => 'sds_custom_colors_section'
    ) ) );

}

add_action( 'customize_register', 'sds_custom_colors_section' );

/*
    FUNKCJA ZMIANY CSS
*/

function sds_custom_colors_css() {

    ?>
        <style type="text/css">
            .navbar-sds .navbar-brand { color: <?php echo get_theme_mod( 'sds_custom_color_brand' ); ?>; }
            .navbar-sds ul li a { color: <?php echo get_theme_mod( 'sds_custom_color_menu_item' ); ?> !important; }
            .sds-caption h3 { color: <?php echo get_theme_mod( 'sds_custom_color_heading1' ); ?>; }
            .sds-caption h1 { color: <?php echo get_theme_mod( 'sds_custom_color_heading2' ); ?>; }
            .sds-caption p { color: <?php echo get_theme_mod( 'sds_custom_color_subtitle' ); ?>; }
            .sds-caption .btn { color: <?php echo get_theme_mod( 'sds_custom_color_button' ) ?>; }
            .sds-caption .btn { border-color: <?php echo get_theme_mod( 'sds_custom_color_button_border' ) ?>; }
        </style>

    <?php

}

add_action( 'wp_head', 'sds_custom_colors_css' );