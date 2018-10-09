<?php 
/*
    ==================================
        CUSTOM SECTION 3
    ==================================
*/

    //label do pierwszej ikonki
    // $wp_customize->add_setting('sds_options[info]', array(
    //         'type'              => 'info_control',
    //         'capability'        => 'edit_theme_options',
    //         'sanitize_callback' => 'esc_attr',            
    //     )
    // );
    // $wp_customize->add_control( new SDS_Info( $wp_customize, 'i1', array(
    //     'label' => __('Pierwsza ikonka', 'sydney'),
    //     'section' => 'sds_front_section2_icons_section',
    //     'settings' => 'sds_options[info]',
    //     'priority' => 10
    //     ) )
    // ); 

    function sds_custom_section3_parallax( $wp_customize ) {

        //panel 
        $wp_customize->add_panel( 'sds_front_section_3_parallax', array(
            'title'         => __( 'Sekcaj 3 - Parallax' ),
            'priority'      => 30
        ) );

        /*
            opcje sekcji
        */
        $wp_customize->add_section( 'sds_front_section3_section', array(
            'title'         => __( 'Opcje sekcji 3' ),
            'description'   => 'Tutaj możesz włączyć lub wyłączyć sekcję',
            'panel'         => 'sds_front_section_3_parallax'
        ) );

        $wp_customize->add_setting( 'sds_front_section3_options', array(
            'capability'    => 'edit_theme_options',
            'default'       => 'type1'
        ) );

        $wp_customize->add_control( 'sds_front_section3_options', array(
            'type'          => 'radio',
            'section'       => 'sds_front_section3_section',
            'label'         => __( 'Opcje wyświetlania' ),
            'description'   => __( 'Wybierz opcje wyświetlania 3 sekcji' ),
            'choices'       => array(
                'type1'     => 'Wyświetlaj',
                'type2'     => 'Wyłącz'
            )
        ) );

        /*
            zarządzanie sekcją
        */
        $wp_customize->add_section( 'sds_front_section_3_content', array(
            'title'         => __( 'Zmień zdjęcie oraz treść' ),
            'description'   => __( 'Tutaj możesz zmienić zdjęcie, tytuł oraz treść' ),
            'panel'         => 'sds_front_section_3_parallax'
        ) );

        //zdjęcie tła
        $wp_customize->add_setting( 'sds_front_section3_background', array(
            'capability'    => 'edit_theme_options',
            'default'       => 'http://localhost/xampp/wordpress7/wp-content/uploads/2018/01/1.jpg'
        ) );

        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sds_front_section3_background', array(
            'title'         => __( 'Zmień zdjęcie tła tej sekcji' ),
            'section'       => 'sds_front_section_3_content'
        ) ) );

        //tytuł
        $wp_customize->add_setting( 'sds_front_section3_title', array(
            'capability'    => 'edit_theme_options',
            'default'       => __( 'LOREM IPSUM' ),
            'sanitize_callback' => 'sanitize_text_field'
        ) );

        $wp_customize->add_control( 'sds_front_section3_title', array(
            'type'          => 'text',
            'label'         => __( 'Zmień tytuł' ),
            'section'       => 'sds_front_section_3_content'
        ) );

        //treść
        $wp_customize->add_setting( 'sds_front_section3_content', array(
            'capability'    => 'edit_theme_options',
            'default'       => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla ex nemo at velit culpa eum placeat debitis nobis quos ipsa, laborum molestias error rerum natus dolore maxime deserunt officia, voluptate!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est quis nam optio et porro quod at earum dolores. Atque ullam hic numquam quae. Vel culpa enim quaerat iure quos nisi?' ),
            'sanitize_callback' => 'sanitize_text_field'
        ) );

        $wp_customize->add_control( 'sds_front_section3_content', array(
            'type'          => 'text',
            'label'         => __( 'Zmień tytuł' ),
            'section'       => 'sds_front_section_3_content'
        ) );

    }

    add_action( 'customize_register', 'sds_custom_section3_parallax' );

    /*
        FUNKCJA ZMIANY USTAWIEŃ CSS
    */
    function sds_front_section3_css() {
        ?>

            <style type="text/css">
                /*zmiana zdjęcia tła sekcji*/
                .custom-parallax { background: url(<?php echo get_theme_mod( 'sds_front_section3_background' ); ?>) no-repeat 0px 0px; }
            </style>

        <?php
    }

    add_action( 'wp_head', 'sds_front_section3_css' );