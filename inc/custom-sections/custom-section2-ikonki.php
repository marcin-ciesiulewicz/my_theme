<?php
/*
    ==================================
        CUSTOM SECTION 2 - IKONKI
    ==================================
*/

function sds_custom_icons_section( $wp_customize ) {

    //panel obsługi sekcji icons
    $wp_customize->add_panel( 'sds_front_section2_panel', array( 
        'title'         => __( 'Sekcja 2 - Ikonki' ),
        'priority'      => 29
    ) );

     /*
        opcje sekcji
    */
    $wp_customize->add_section( 'sds_front_section2_section', array( 
        'title'         => __( 'Opcje sekcji 2' ),
        'description'   => __( 'Tutaj możesz wybrać sposób wyświetlania sekcji 2. Masz do wyboru 2 opcje ( 1 - włączona, 2 - wyłączona )' ) ,
        'panel'         => 'sds_front_section2_panel'
    ) );

    $wp_customize->add_setting( 'sds_front_section2_options', array( 
        'capability'    => 'edit_theme_options',
        'default'       => 'type1'
    ) );

    $wp_customize->add_control( 'sds_front_section2_options', array( 
        'type'          => 'radio',
        'section'       => 'sds_front_section2_section',
        'label'         => __('Opcje wyświetlania'),
        'description'   => __('Wybierz opcje wyświetlania drugiej sekcji'),
        'choices'       => array(
            'type1'     => 'Wyświetlaj',
            'type2'     => 'Wyłącz sekcję'
        )
    ) );    

    /*
        sekcji ikonek
    */

    $wp_customize->add_section( 'sds_front_section2_icons_section', array( 
        'title'         => __('Dodaj ikonki i treść'),
        'description'   => __('Możesz tutaj zmienić ikonki oraz treść tej sekcji. Pełną listę ikonek znajdziesz <a href="https://fontawesome.com/v4.7.0/icons/" target="_blak">TUTAJ:</a>'),
        'panel'         => 'sds_front_section2_panel'
    ) );


    //label do pierwszej ikonki
    $wp_customize->add_setting('sds_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new SDS_Info( $wp_customize, 'i1', array(
        'label' => __('Pierwsza ikonka', 'sydney'),
        'section' => 'sds_front_section2_icons_section',
        'settings' => 'sds_options[info]',
        'priority' => 10
        ) )
    ); 

    //pierwsza ikonka
    $wp_customize->add_setting( 'sds_front_section2_icon1', array( 
        'capability'    => 'edit_theme_options',
        'default'       => 'fa fa-user-circle-o',
        'sanitize_callbac'  => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_front_section2_icon1', array(
        'type'          => 'text',
        'label'         => __('Zmień pierwszą ikonkę'),
        'section'       => 'sds_front_section2_icons_section'
    ) );

    //pierwszy tytuł
    $wp_customize->add_setting( 'sds_front_section2_title1', array(
        'capability'    => 'edit_theme_options',
        'default'       => 'Lorem Ipsum',
        'sanitize_callbac' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_front_section2_title1', array(
        'type'          => 'text',
        'label'         => __('Zmień pierwszy tytuł'),
        'section'       => 'sds_front_section2_icons_section'
    ) );

    //pierwsza treść
    $wp_customize->add_setting( 'sds_front_section2_content1', array(
        'capability'    => 'edit_theme_options',
        'default'       => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt'),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_front_section2_content1', array(
        'type'          => 'text',
        'label'         => __('Zmień zawartość'),
        'section'       => 'sds_front_section2_icons_section'
    ) );

    //pierwszy link ikonki
    $wp_customize->add_setting( 'sds_front_section2_url1', array(
        'capability'    => 'edit_theme_options',
        'default'       => '',
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_front_section2_url1', array(
        'type'          => 'text',
        'label'         => __('Zmień link odnośnika dla pierwszej kolumny np. wp.pl'),
        'section'       => 'sds_front_section2_icons_section'
    ) );


    //label do drugiej ikonki
    $wp_customize->add_setting('sds_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new SDS_Info( $wp_customize, 'i2', array(
        'label' => __('Druga ikonka', 'sydney'),
        'section' => 'sds_front_section2_icons_section',
        'settings' => 'sds_options[info]',
        'priority' => 10
        ) )
    ); 

    //druga ikonka
    $wp_customize->add_setting( 'sds_front_section2_icon2', array( 
        'capability'    => 'edit_theme_options',
        'default'       => 'fa fa-handshake-o',
        'sanitize_callbac'  => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_front_section2_icon2', array(
        'type'          => 'text',
        'label'         => __('Zmień drugą ikonkę'),
        'section'       => 'sds_front_section2_icons_section'
    ) );

    //drugi tytuł
    $wp_customize->add_setting( 'sds_front_section2_title2', array(
        'capability'    => 'edit_theme_options',
        'default'       => 'Lorem Ipsum',
        'sanitize_callbac' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_front_section2_title2', array(
        'type'          => 'text',
        'label'         => __('Zmień drugi tytuł'),
        'section'       => 'sds_front_section2_icons_section'
    ) );

    //druga treść
    $wp_customize->add_setting( 'sds_front_section2_content2', array(
        'capability'    => 'edit_theme_options',
        'default'       => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt'),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_front_section2_content2', array(
        'type'          => 'text',
        'label'         => __('Zmień zawartość'),
        'section'       => 'sds_front_section2_icons_section'
    ) );

    //drugi link ikonki
    $wp_customize->add_setting( 'sds_front_section2_url2', array(
        'capability'    => 'edit_theme_options',
        'default'       => '',
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_front_section2_url2', array(
        'type'          => 'text',
        'label'         => __('Zmień link odnośnika dla drugiej kolumny np. wp.pl'),
        'section'       => 'sds_front_section2_icons_section'
    ) );


    //label do trzeciej ikonki
    $wp_customize->add_setting('sds_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new SDS_Info( $wp_customize, 'i3', array(
        'label' => __('Trzecia ikonka', 'sydney'),
        'section' => 'sds_front_section2_icons_section',
        'settings' => 'sds_options[info]',
        'priority' => 10
        ) )
    ); 

    //trzecia ikonka
    $wp_customize->add_setting( 'sds_front_section2_icon3', array( 
        'capability'    => 'edit_theme_options',
        'default'       => 'fa fa-bar-chart',
        'sanitize_callbac'  => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_front_section2_icon3', array(
        'type'          => 'text',
        'label'         => __('Zmień trzecią ikonkę'),
        'section'       => 'sds_front_section2_icons_section'
    ) );

    //trzeci tytuł
    $wp_customize->add_setting( 'sds_front_section2_title3', array(
        'capability'    => 'edit_theme_options',
        'default'       => 'Lorem Ipsum',
        'sanitize_callbac' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_front_section2_title3', array(
        'type'          => 'text',
        'label'         => __('Zmień trzeci tytuł'),
        'section'       => 'sds_front_section2_icons_section'
    ) );

    //trzecia treść
    $wp_customize->add_setting( 'sds_front_section2_content3', array(
        'capability'    => 'edit_theme_options',
        'default'       => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt'),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_front_section2_content3', array(
        'type'          => 'text',
        'label'         => __('Zmień zawartość'),
        'section'       => 'sds_front_section2_icons_section'
    ) );

    //trzeci link ikonki
    $wp_customize->add_setting( 'sds_front_section2_url3', array(
        'capability'    => 'edit_theme_options',
        'default'       => '',
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_front_section2_url3', array(
        'type'          => 'text',
        'label'         => __('Zmień link odnośnika dla trzeciej kolumny np. wp.pl'),
        'section'       => 'sds_front_section2_icons_section'
    ) );


    //czwarta ikonka
    $wp_customize->add_setting( 'sds_front_section2_icon4', array( 
        'capability'    => 'edit_theme_options',
        'default'       => 'fa fa-pie-chart',
        'sanitize_callbac'  => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_front_section2_icon4', array(
        'type'          => 'text',
        'label'         => __('Zmień czwartą ikonkę'),
        'section'       => 'sds_front_section2_icons_section'
    ) );


    //label do czwartej ikonki
    $wp_customize->add_setting('sds_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new SDS_Info( $wp_customize, 'i4', array(
        'label' => __('Czwarta ikonka', 'sydney'),
        'section' => 'sds_front_section2_icons_section',
        'settings' => 'sds_options[info]',
        'priority' => 10
        ) )
    ); 

    //czwarty tytuł
    $wp_customize->add_setting( 'sds_front_section2_title4', array(
        'capability'    => 'edit_theme_options',
        'default'       => 'Lorem Ipsum',
        'sanitize_callbac' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_front_section2_title4', array(
        'type'          => 'text',
        'label'         => __('Zmień czwarty tytuł'),
        'section'       => 'sds_front_section2_icons_section'
    ) );

    //czwarta treść
    $wp_customize->add_setting( 'sds_front_section2_content4', array(
        'capability'    => 'edit_theme_options',
        'default'       => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt'),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_front_section2_content4', array(
        'type'          => 'text',
        'label'         => __('Zmień zawartość'),
        'section'       => 'sds_front_section2_icons_section'
    ) );

    //czwarty link ikonki
    $wp_customize->add_setting( 'sds_front_section2_url4', array(
        'capability'    => 'edit_theme_options',
        'default'       => '',
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'sds_front_section2_url4', array(
        'type'          => 'text',
        'label'         => __('Zmień link odnośnika dla czwartej kolumny np. wp.pl'),
        'section'       => 'sds_front_section2_icons_section'
    ) );

}

add_action( 'customize_register', 'sds_custom_icons_section' );