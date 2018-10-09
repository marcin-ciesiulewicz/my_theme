<?php

/*
    ==================================
        CUSTOM SLIDER SECTION
    ==================================
*/

function sds_slider_custom_section( $wp_customize ) {

//klasa sds_info nadpisująca wp_customizer_control
require 'sds-info-class.php';

    //rejestracja panelu
    $wp_customize->add_panel('sds_header_panel', array(
        'title'         => __('Sekcja Nagłówka'),
        'priority'      => 27
    ));

    /*
        SEKCJA TYPU NAGŁÓWKA
    */

    $wp_customize->add_section('sds_header_type_section' , array(
        'title'         => __('Opcje Nagłówka'),
        'description'   => __('Możesz wybrać tutaj swój typ nagłówka. Następnie przejdź do następnych dwóch kart (opcje slidera i obraz nagłówka) i skonfiguruj je.'),
        'panel'         => 'sds_header_panel'
    ));

    $wp_customize->add_setting('sds_front_slider_type_options', array(
        'capability'    => 'edit_theme_options',
        'default'       => 'slider',
        'sanitize_callback' => 'sds_slider_type_options_sanitize'
    ));
    
    //opcja add_settings i add_control musi się tak samo nazywać żeby zadziałała funkcja sanitize, dlatego usunąłem parametr 'settings' w tablicy
    $wp_customize->add_control( 'sds_front_slider_type_options',array(
        'type'          => 'radio',
        'section'       => 'sds_header_type_section',
        // 'settings'      => 'sds_slider_type_options',
        'label'         => __('Typ nagłowka strony głównej'),
        'description'   => __('Wybierz typ nagłówka dla swojej strony głównej'),
        'choices'       => array(
            'slider'    => __('Slajder'),
            'image'     => __('Zdjęcie'),
        ),
    ));

    $wp_customize->add_setting('sds_single_slider_type_options', array(
        'capability'    => 'edit_theme_options',
        'default'       => 'slider',
        'sanitize_callback' => 'sds_slider_type_options_sanitize'
    ));
    
    //opcja add_settings i add_control musi się tak samo nazywać żeby zadziałała funkcja sanitize, dlatego usunąłem parametr 'settings' w tablicy
    $wp_customize->add_control( 'sds_single_slider_type_options',array(
        'type'          => 'radio',
        'section'       => 'sds_header_type_section',
        // 'settings'      => 'sds_slider_type_options',
        'label'         => __('Typ nagłowka podstron'),
        'description'   => __('Wybierz typ nagłówka jaki będzie wyświetlany w podstronach'),
        'choices'       => array(
            'slider'    => __('Slajder'),
            'image'     => __('Zdjęcie'),
            'none'      => __('Bez naglówka samo menu'),
        ),
    ));


    /*
        SEKCJA USTAWIEN SLIDERA
    */

    $wp_customize->add_section( 'sds_slider_section' , array(
        'title'         => __('Slajder'),
        'description'   => __('Możesz dodać do 3 zdjęć na slajderze. Upewnij się, że wybierasz miejsce wyświetlania slajdera w sekcji Typy Nagłówka powyżej. Możesz również dodać link przekierowania przycisku (przewiń w dół, aby znaleźć opcje)'),
        'panel'         => 'sds_header_panel'
    ) );
    
    //szybkość zmiany slajdów
    $wp_customize->add_setting( 'sds_slider_speed' , array(
        'capability'    => 'edit_theme_options',
        // 'sanitize_callback' => 'sds_sanitize_number',        
        'default'       => 4000,
    ) );

    $wp_customize->add_control( 'sds_slider_speed' , array(
        'type'          => 'number',
        'label'         => __('Szybkość przejścia slajdów'),
        'description'   => __('Szybkość przejścia slajdów w milisekundach. Ustaw na 0 żeby wyłączyć przejścia.[podstawowa wartość to 4000]'),
        'section'       => 'sds_slider_section',
        // 'settings'      => 'sds_slider_speed'
    ) );


    //label do pierwszebo slajdu
    $wp_customize->add_setting('sds_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new SDS_Info( $wp_customize, 's1', array(
        'label' => __('Pierwszy slajd', 'sydney'),
        'section' => 'sds_slider_section',
        'settings' => 'sds_options[info]',
        'priority' => 10
        ) )
    ); 

    //pierwszy slajd
    $wp_customize->add_setting( 'sds_first_slider_image' , array(
        'capability'    => 'edit_theme_options',
        'default'       => 'http://localhost/xampp/wordpress7/wp-content/uploads/2018/01/1.jpg',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'sds_first_slider_image' , array(
        'label'         => __('DODAJ PIERWSZE ZDJĘCIE SLAJDERA'),
        'section'       => 'sds_slider_section',
        'settings'      => 'sds_first_slider_image'
    ) ) );

    //pierwszy tytuł
    $wp_customize->add_setting( 'sds_first_slider_header1' , array(
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default'       => __('Lorem ipsum'),
    ) );

    $wp_customize->add_control( new WP_Customize_control( $wp_customize , 'sds_first_slider_header1_control' , array(
        'label'         => __('Dodaj pierwszy tytuł pierwszego slajdu'),
        'section'       => 'sds_slider_section',
        'settings'      => 'sds_first_slider_header1'
    ) ) );

    //drugi tytuł
    $wp_customize->add_setting( 'sds_first_slider_header2' , array(
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default'       => __('LOREM IPSUM DOLOR SIT AMET'),
    ) );

    $wp_customize->add_control( new WP_Customize_control( $wp_customize , 'sds_first_slider_header2_control' , array(
        'label'         => __('Dodaj drugi tytuł pierwszego slajdu'),
        'section'       => 'sds_slider_section',
        'settings'      => 'sds_first_slider_header2'
    ) ) );

    //podtytuł
    $wp_customize->add_setting( 'sds_first_slider_subtitle', array(
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default'       => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem facere commodi omnis perspiciatis quas modi, corporis consequatur facilis natus fuga, veritatis adipisci ducimus, dignissimos. Tenetur non quae ullam omnis illo.'),
    ) );

    $wp_customize->add_control( new WP_Customize_control( $wp_customize , 'sds_first_slider_subtitle' , array(
        'label'         => __('Dodaj podtytuł'),
        'section'       => 'sds_slider_section',
    ) ) );

    /*
        Drugi slajd
    */


    //label do drugiego slajdu
    $wp_customize->add_setting('sds_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new SDS_Info( $wp_customize, 's2', array(
        'label' => __('Drugi slajd', 'sydney'),
        'section' => 'sds_slider_section',
        'settings' => 'sds_options[info]',
        'priority' => 10
        ) )
    ); 

    //drugi slajd
    $wp_customize->add_setting( 'sds_second_slider_image' , array(
        'capability'    => 'edit_theme_options',
        'default'       => 'http://localhost/xampp/wordpress7/wp-content/uploads/2018/01/2.jpg'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'sds_second_slider_image' , array(
        'label'         => __('DODAJ DRUGIE ZDJĘCIE SLAJDERA'),
        'section'       => 'sds_slider_section',
        'settings'      => 'sds_second_slider_image'
    ) ) );

    //drugi tytuł
    $wp_customize->add_setting( 'sds_second_slider_header1' , array(
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default'       => 'Lorem ipsum 2'
    ) );

    $wp_customize->add_control( 'sds_second_slider_header1_control' , array(
        'type'          => 'text',
        'label'         => __('Dodaj pierwszy tytuł drugiego slajdu'),
        'section'       => 'sds_slider_section',
        'settings'      => 'sds_second_slider_header1'        
    ) );

    //drugi tytuł drugiego slajdu
    $wp_customize->add_setting( 'sds_second_slider_header2' , array(
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default'       => 'LOREM IPSUM DOLOR SIT AMET 2'
    ) );

    $wp_customize->add_control( 'sds_second_slider_header2_control' , array(
        'type'          => 'text',
        'label'         => __('Dodaj drugi tytuł drugiego slajdu'),
        'section'       => 'sds_slider_section',
        'settings'      => 'sds_second_slider_header2'        
    ) );

    //drugi podtytuł
    $wp_customize->add_setting( 'sds_second_slider_subtitle' , array(
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default'       => 'Lorem ipsum dolor sit amet, consectetur. Rem facere commodi omnis perspiciatis, corporis consequatur facilis natus.'
    ) );

    $wp_customize->add_control( 'sds_second_slider_subtitle_control' , array(
        'type'          => 'text',
        'label'         => __('Dodaj drugi podtytuł drugiego slajdu'),
        'section'       => 'sds_slider_section',
        'settings'      => 'sds_second_slider_subtitle'        
    ) );

    /*
        Trzeci slajd
    */


    //label do trzeciego slajdu
    $wp_customize->add_setting('sds_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new SDS_Info( $wp_customize, 's3', array(
        'label' => __('Trzeci slajd', 'sydney'),
        'section' => 'sds_slider_section',
        'settings' => 'sds_options[info]',
        'priority' => 10
        ) )
    ); 

    //trzeci slajd
    $wp_customize->add_setting( 'sds_third_slider_image' , array(
        'capability'    => 'edit_theme_options',
        'default'       => 'http://localhost/xampp/wordpress7/wp-content/uploads/2018/01/3.jpg'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'sds_third_slider_image_control' , array(
        'label'         => __('DODAJ TRZECIE ZDJĘCIE SLAJDERA'),
        'section'       => 'sds_slider_section',
        'settings'      => 'sds_third_slider_image'
    ) ) );

    //trzeci tytuł
    $wp_customize->add_setting( 'sds_third_slider_header1' , array(
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default'       => 'Lorem ipsum 3'
    ) );

    $wp_customize->add_control( 'sds_third_slider_header1_control' , array(
        'type'          => 'text',
        'label'         => __('Dodaj pierwszy tytuł trzeciego slajdu'),
        'section'       => 'sds_slider_section',
        'settings'      => 'sds_third_slider_header1'        
    ) );

    
    //drugi tytuł drugiego slajdu
    $wp_customize->add_setting( 'sds_third_slider_header2' , array(
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default'       => 'LOREM IPSUM DOLOR SIT AMET 3'
    ) );

    $wp_customize->add_control( 'sds_third_slider_header2_control' , array(
        'type'          => 'text',
        'label'         => __('Dodaj drugi tytuł trzeciego slajdu'),
        'section'       => 'sds_slider_section',
        'settings'      => 'sds_third_slider_header2'        
    ) );


    //trzeci podtytuł
    $wp_customize->add_setting( 'sds_third_slider_subtitle' , array(
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem facere commodi omnis perspiciatis quas modi, corporis consequatur facilis natus fuga, veritatis adipisci ducimus, dignissimos.'
    ) );

    $wp_customize->add_control( 'sds_third_slider_subtitle_control' , array(
        'type'          => 'text',
        'label'         => __('Dodaj trzeci podtytuł drugiego slajdu'),
        'section'       => 'sds_slider_section',
        'settings'      => 'sds_third_slider_subtitle'        
    ) );


    /* 
        Przycisk slidera
     */
    //link przycisku
    $wp_customize->add_setting( 'sds_first_slider_button_link' , array(
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default'       => __('http://localhost/xampp/wordpress7/'),
    ) );

    $wp_customize->add_control( new WP_Customize_control( $wp_customize , 'sds_first_slider_subtitle_control' , array(
        'label'         => __('Link przycisku'),
        'description'   => __('Dodaj link strony / postu, na które przekierowuje przycisk'),
        'section'       => 'sds_slider_section',
        'settings'      => 'sds_first_slider_button_link'
    ) ) );

    //napis przycisku
    $wp_customize->add_setting( 'sds_first_slider_button_text' , array(
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default'       => 'Wiecej'
    ) );

    $wp_customize->add_control( New WP_Customize_Control( $wp_customize , 'sds_first_slider_button_text_control' , array(
        'label'         => __('Tekst przycisku'),
        'description'   => __('Zmień teks przycisku przekierowani'),
        'section'       => 'sds_slider_section',
        'settings'      => 'sds_first_slider_button_text'
    ) ) );


    /*
        SEKCJA USTAWIEN ZDJĘCIA FRONT-PAG'U
    */

    //zdjęcie
    $wp_customize->add_section( 'sds_front_image' , array(
        'title'         => __('Obraz nagłówka'),
        'description'   => __('Zmień zdjęcie wyświetlane na stronie głównej'),
        'panel'         => 'sds_header_panel'
    ) );

    $wp_customize->add_setting( 'sds_front_image_setting' , array(
        'capabiltiy'    => 'edit_theme_options',
        'default'       => 'http://localhost/xampp/wordpress7/wp-content/uploads/2018/01/1.jpg'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'sds_front_image_control' , array( 
        'label'         => __('Dodaj zdjęcie nagłówka strony głównej'),
        'description'   => __('Możesz tutaj zmienić zdjęcie strony głównej. Upewnij się, że wybierasz miejsce wyświetlania zdjęcia w sekcji Typy Nagłówka powyżej.'),
        'section'       => 'sds_front_image',
        'settings'      => 'sds_front_image_setting'
    ) ) );

    //pierwszy tytuł zdjęcia
    $wp_customize->add_setting( 'sds_front_image_header1' , array( 
        'capability'    => 'edit_theme_options',
        'sanitize'      => 'sanitize_text_field',
        'default'       => 'LOREM IPSUM'
    ) );

    $wp_customize->add_control( 'sds_front_image_header1_control' , array(
        'type'          => 'text',
        'label'         => __('Zmień pierwszy tytuł'),
        'section'       => 'sds_front_image',
        'settings'      => 'sds_front_image_header1'
    ) );

    //drugi tytuł zdjęcia
    $wp_customize->add_setting( 'sds_front_image_header2' , array(
        'capability'    => 'edit_theme_options',
        'sanitize'      => 'sanitize_text_field',
        'default'       => 'LOREM IPSUM DOLOR SIT AMET'
    ) );

    $wp_customize->add_control( 'sds_image_header2_control' , array(
        'type'          => 'text',
        'label'         => __('Zmień drugi tytuł'),
        'section'       => 'sds_front_image',
        'settings'      => 'sds_front_image_header2'
    ) );

    //podtytuł zdjęcia
    $wp_customize->add_setting( 'sds_front_image_subtitle'  , array(
        'capability'    => 'edit_theme_options',
        'sanitize'      => 'sanitize_text_field',
        'default'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem facere commodi omnis perspiciatis quas modi, corporis consequatur facilis natus fuga, veritatis adipisci ducimus, dignissimos. Tenetur non quae ullam omnis illo.'
    ) );

    $wp_customize->add_control( 'sds_front_image_subtitle_control' , array(
        'type'          => 'text',
        'label'         => __('Zmień podtytuł'),
        'section'       => 'sds_front_image',
        'settings'      => 'sds_front_image_subtitle'
    ) );

    //przekierowanie przycisku zdjęcia
    $wp_customize->add_setting( 'sds_front_image_button' , array( 
        'capability'    => 'edit_theme_options',
        'sanitize'      => 'sanitize_text_field',
        'default'       => ''
    ) );

    $wp_customize->add_control( 'sds_front_image_button_control' , array( 
        'label'         => __('Link przycisku'),
        'description'   => __('Dodaj link strony / postu, na które przekierowuje przycisk'),
        'section'       => 'sds_front_image',
        'settings'      => 'sds_front_image_button'
    ) );

    //tekst przycisku zdjęcia
    $wp_customize->add_setting( 'sds_front_image_button_text' , array( 
        'capability'    => 'edit_theme_options',
        'sanitize'      => 'sanitize_text_field',
        'default'       => 'Więcej'
    ) );

    $wp_customize->add_control( 'sds_front_image_button_text_control' , array( 
        'label'         => __( 'Tekst przycisku' ),
        'description'   => __( 'Zmień tekst przycisku przekierowania' ),
        'section'       => 'sds_front_image',
        'settings'      => 'sds_front_image_button_text'
    ) );

}

add_action( 'customize_register', 'sds_slider_custom_section' );

//sanityzacja radiobuttona
function sds_slider_type_options_sanitize( $input, $setting ) {

  // Ensure input is a slug.
  $input = sanitize_key( $input );

  // Get list of choices from the control associated with the setting.
  $choices = $setting->manager->get_control( $setting->id )->choices;

  // If the input is a valid key, return it; otherwise, return the default.
  return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

//sanityzacja slider speed
function sds_sanitize_number( $number, $setting ) {
  // Ensure $number is an absolute integer (whole number, zero or greater).
  $number = absint( $number );

  // If the input is an absolute integer, return it; otherwise, return the default
  return ( $number ? $number : $setting->default );
}

//Zwracam slajdy w postaci tablicy
function return_slides() {
    $slides = array ();

    $slides[0] = array(
        'class'     => ' active',
        'url'       => get_theme_mod( 'sds_first_slider_image' ),
        'next_img'  => get_theme_mod( 'sds_second_slider_image' ),
        'prev_img'  => get_theme_mod( 'sds_third_slider_image' ),
        'first_title'  => get_theme_mod( 'sds_first_slider_header1' ),
        'second_title'  => get_theme_mod( 'sds_first_slider_header2' ),
        'subtitle'      => get_theme_mod( 'sds_first_slider_subtitle' ),
        'button_link'   => get_theme_mod( 'sds_first_slider_button_link' ),
        'button_text'   => get_theme_mod( 'sds_first_slider_button_text' ),
    );

    $slides[1] = array(
        'class'     => '',
        'url'       => get_theme_mod( 'sds_second_slider_image' ),
        'next_img'  => get_theme_mod( 'sds_third_slider_image' ),
        'prev_img'  => get_theme_mod( 'sds_first_slider_image' ),
        'first_title'  => get_theme_mod( 'sds_second_slider_header1' ),
        'second_title'  => get_theme_mod( 'sds_second_slider_header2' ),
        'subtitle'  => get_theme_mod( 'sds_second_slider_subtitle' ),
        'button_link'   => get_theme_mod( 'sds_first_slider_button_link' ),
        'button_text'   => get_theme_mod( 'sds_first_slider_button_text' ),
    );

    $slides[2] = array(
        'class'     => '',
        'url'       => get_theme_mod( 'sds_third_slider_image' ),
        'next_img'  => get_theme_mod( 'sds_first_slider_image' ),
        'prev_img'  => get_theme_mod( 'sds_second_slider_image' ),
        'first_title'  => get_theme_mod( 'sds_third_slider_header1' ),
        'second_title'  => get_theme_mod( 'sds_third_slider_header2' ),
        'subtitle'  => get_theme_mod( 'sds_third_slider_subtitle' ),
        'button_link'   => get_theme_mod( 'sds_first_slider_button_link' ),
        'button_text'   => get_theme_mod( 'sds_first_slider_button_text' ),
    );

    return $slides;
}