<?php 

/*
    ==================================
        CUSTOM TITLE/ESCRIPTION/LOGO
    ==================================
*/

function sds_custom_title_section( $wp_customize ) {
    /*usuwanie sekcji tożsamość witryny , zrobie własną*/
    $wp_customize->remove_section( 'title_tagline' );

    //moja sekcja dodawania informacji o witrynie
    $wp_customize->add_section( 'sds_title_tagline' , array(
        'title'         => __('Title/description/logo Strony'),
        'description'   => __('Zmień tytuł , opis , logo i favicon strony'),
        'priority'      => 26
    ) );

    //nazwa strony
    $wp_customize->add_setting('blogname', array(
        'default' => get_option('blogname'),
        'type' => 'option',
        'capability' => 'manage_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('blogname', array(
        'label' => __('Site Title'),
        'section' => 'sds_title_tagline',
    ));

    //opis strony
    $wp_customize->add_setting('blogdescription', array(
        'default' => get_option('blogdescription'),
        'type' => 'option',
        'capability' => 'manage_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('blogdescription', array(
        'label' => __('Tagline'),
        'section' => 'sds_title_tagline',
    ));

    //logo strony
    $wp_customize->add_setting( 'sds_logo', array(
        'default'       => get_template_directory_uri() . '/img/logo1.png',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'sds_logo' , array(
        'label'         => __('Dodaj logo'),
        'section'       => 'sds_title_tagline'
    )  ) );

    /* Dodawanie favicona do mojej sekcji site logo/title/tagline */
    $wp_customize->add_setting('site_icon', array(
        'type' => 'option',
        'capability' => 'manage_options',
        'transport' => 'postMessage', // Previewed with JS in the Customizer controls window.
    ));

    $wp_customize->add_control(new WP_Customize_Site_Icon_Control($wp_customize, 'site_icon', array(
        'label' => __('Site Icon'),
        'description' => sprintf(
				/* translators: %s: site icon size in pixels */
            __('The Site Icon is used as a browser and app icon for your site. Icons must be square, and at least %s pixels wide and tall.'),
            '<strong>512</strong>'
        ),
        'section' => 'sds_title_tagline',
        'priority' => 60,
        'height' => 512,
        'width' => 512,
    )));
}

add_action( 'customize_register', 'sds_custom_title_section' );