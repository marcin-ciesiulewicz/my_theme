<?php
/*
    ==================================
        CUSTOM SECTION 1 - ABOUT
    ==================================
*/

function sds_custom_about_section( $wp_customize ) {


    //panel obsługi sekcji about
    $wp_customize->add_panel('sds_front_section1_panel', array(
        'title'         => __('Sekcja 1 - O nas'),
        'priority'      => 28
    ) );

    /*
        opcje sekcji sekcja1-about
    */

    $wp_customize->add_section('sds_front_section1_section' , array(
        'title'         => __('Opcje Sekcji 1'),
        'description'   => __('Tutaj możesz wybrać sposób wyśiwtlania sekcji 1. Masz do wyboru 4 opcje ( 1 - sam tytuł i tekst, 2-sama tabelka, 3-tytuł i tabelka, 4 - sekcja wyłączona)'),
        'panel'         => 'sds_front_section1_panel'
    ) );

    $wp_customize->add_setting('sds_front_section1_options', array(
        'capability'    => 'edit_theme_options',
        'default'       => 'type1'
    ) );

    $wp_customize->add_control('sds_front_section1_options', array(
        'type'          => 'radio',
        'section'       => 'sds_front_section1_section',
        'label'         => __('Opcje wyświetlania'),
        'description'   => __('Wybierz opcje wyświetlania pierwszej sekcji'),
        'choices'       => array(
            'type1'     => __('Tytuł i napisy'), 
            'type2'     => __('Tabela'),
            'type3'     => __('Oba razem'),
            'type4'     => __('Wyłącz sekcję')
        )
    ) );

    /*
        ustawienia sekcji sekcja1-about
    */

    $wp_customize->add_section('sds_front_section1_title_subtitle_section', array(
        'title'         => __('Tytuł i podtytuł'),
        'description'   => __('Tutaj możesz zmienić treść tytułu i podtutylu pierwszej sekcji'),
        'panel'         => 'sds_front_section1_panel'
    ) );

    //tytuł
    $wp_customize->add_setting('sds_front_section1_title', array(
        'capability'    => 'edit_theme_options',
        'default'       => __('CO NAS WYRÓŻNIA'),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control('sds_front_section1_title', array(
        'type'          => 'text',
        'label'         => __('Wprowadz tytuł'),
        'section'       => 'sds_front_section1_title_subtitle_section'
    ) ); 

    //podtytuł
    $wp_customize->add_setting('sds_front_section1_subtitle', array(
        'capability'    => 'edit_theme_options',
        'default'       => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque cumque saepe voluptatem laboriosam, tempora iusto qui aspernatur fugiat. Rem amet reiciendis aut vel quod doloremque mollitia labore modi voluptate quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti omnis eveniet molestias, vero. Dolores animi voluptatum enim necessitatibus soluta quidem harum, ipsum unde, possimus, tempore quasi illum culpa nemo omnis.'),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( new WP_Customize_control( $wp_customize, 'sds_front_section1_subtitle', array( 
        'label'         => __('Wprowadz podtytuł'),
        'section'       => 'sds_front_section1_title_subtitle_section'
    ) ) );

    /*
        pierwsze 3 kafelki sekcji sekcja1-about
    */

    $wp_customize->add_section('sds_front_section1_first3_tables', array(
        'title'         => __('Pierwsze 3 Kafeli tabeli'),
        'description'   => __('Edytuj pierwsze 3 kafelki tabeli sekcji o nas'),
        'panel'         => 'sds_front_section1_panel'
    ) );


    //label do pierwszebo kafelka
    $wp_customize->add_setting('sds_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new SDS_Info( $wp_customize, 'k1', array(
        'label' => __('Pierwszy kafelek', 'sydney'),
        'section' => 'sds_front_section1_first3_tables',
        'settings' => 'sds_options[info]',
        'priority' => 10
        ) )
    ); 

    //pierwszy( od lewej ) kafelek
    //tytuł
    $wp_customize->add_setting('sds_front_section1_table1_title', array(
        'capability'    => 'edit_theme_options',
        'default'       => __('Wieloletnie doświadczenie'),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control('sds_front_section1_table1_title', array(
        'type'          => 'text',
        'label'         => 'Dodaj tytuł pierwszego kafelka',
        'section'       => 'sds_front_section1_first3_tables'
    ) );

    //podtytuł/tekst
    $wp_customize->add_setting('sds_front_section1_table1_text', array(
        'capability'    => 'edit_theme_options',
        'default'       => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam quo quam accusantium veniam praesentium repudiandae dolores, autem error ipsum. Dolores aut deserunt sit consequuntur aliquam, velit repellat autem quae quam.'),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control('sds_front_section1_table1_text', array(
        'type'          => 'text',
        'label'         => 'Dodaj tekst pierwszego kafelka',
        'section'       => 'sds_front_section1_first3_tables'
    ) );

    //tekst przycisku
    $wp_customize->add_setting('sds_front_section1_table1_button_text', array(
        'default'       => __('Dowiedz się więcej'),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'sds_front_section1_table1_button_text', array(
        'label'         => __('Dodaje tekst przycisku z pierwszego kafelka'),
        'section'       => 'sds_front_section1_first3_tables'
    ) ) );

    //odnośnik przycisku
    $wp_customize->add_setting('sds_front_section1_table1_button_href', array(
        'default'       => '',
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control('sds_front_section1_table1_button_href', array(
        'type'          => 'text',
        'label'         => 'Zmień link przekierowania dla przycisku pierwszego kafelka. Adress wpisz bez http:// , np. facebook.pl',
        'section'       => 'sds_front_section1_first3_tables'
    ) );

    //kolor tła kafelka
    $wp_customize->add_setting('sds_front_section1_table1_background', array(
        'capability'    => 'edit_theme_options',
        'default'       => '#2d3745'
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'sds_front_section1_table1_background', array(
        'label'         => __('Zmień kolor tła pierwszego kafelka'),
        'section'       => 'sds_front_section1_first3_tables'
    ) ) );


    //label do drugiego kafelka
    $wp_customize->add_setting('sds_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new SDS_Info( $wp_customize, 'k2', array(
        'label' => __('Drugi kafelek', 'sydney'),
        'section' => 'sds_front_section1_first3_tables',
        'settings' => 'sds_options[info]',
        'priority' => 10
        ) )
    ); 

    //drugi( srodkowy ) kafelek
    //tytuł
    $wp_customize->add_setting('sds_front_section1_table2_title', array(
        'capability'    => 'edit_theme_options',
        'default'       => __('Nasze działanie opieramy na…'),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control('sds_front_section1_table2_title', array(
        'type'          => 'text',
        'label'         => 'Dodaj tytuł drugiego kafelka',
        'section'       => 'sds_front_section1_first3_tables'
    ) );

    //podtytuł/tekst
    $wp_customize->add_setting('sds_front_section1_table2_text', array(
        'capability'    => 'edit_theme_options',
        'default'       => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam quo quam accusantium veniam praesentium repudiandae dolores, autem error ipsum. Dolores aut deserunt sit consequuntur aliquam, velit repellat autem quae quam.'),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control('sds_front_section1_table2_text', array(
        'type'          => 'text',
        'label'         => 'Dodaj tekst drugiego kafelka',
        'section'       => 'sds_front_section1_first3_tables'
    ) );

    //tekst przycisku
    $wp_customize->add_setting('sds_front_section1_table2_button_text', array(
        'default'       => __('Dowiedz się więcej'),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'sds_front_section1_table2_button_text', array(
        'label'         => __('Dodaje tekst przycisku z drugiego kafelka'),
        'section'       => 'sds_front_section1_first3_tables'
    ) ) );

    //odnośnik przycisku
    $wp_customize->add_setting('sds_front_section1_table2_button_href', array(
        'default'       => '',
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control('sds_front_section1_table2_button_href', array(
        'type'          => 'text',
        'label'         => 'Zmień link przekierowania dla przycisku drugiego kafelka. Adress wpisz bez http:// , np. facebook.pl',
        'section'       => 'sds_front_section1_first3_tables'
    ) );

    //kolor tła kafelka
    $wp_customize->add_setting('sds_front_section1_table2_background', array(
        'capability'    => 'edit_theme_options',
        'default'       => '#ffffff'
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'sds_front_section1_table2_background', array(
        'label'         => __('Zmień kolor tła pierwszego drugiego'),
        'section'       => 'sds_front_section1_first3_tables'
    ) ) );


    //label do trzeciego kafelka
    $wp_customize->add_setting('sds_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new SDS_Info( $wp_customize, 'k3', array(
        'label' => __('Trzeci kafelek', 'sydney'),
        'section' => 'sds_front_section1_first3_tables',
        'settings' => 'sds_options[info]',
        'priority' => 10
        ) )
    ); 

    //trzeci kafelek ze zdjęciem
    $wp_customize->add_setting('sds_front_section1_table3_image', array(
        'default'       => 'http://localhost/xampp/wordpress7/wp-content/uploads/2017/11/cropped-top_banner.jpg'
    ) );

    $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'sds_front_section1_table3_image', array(
        'label'         => __('Zmień zdjęcie 3 kafelka'),
        'section'       => 'sds_front_section1_first3_tables'
    ) ) );

    /*
        drugie 3 kafelki sekcji sekcja1-about
    */

    $wp_customize->add_section('sds_front_section1_second3_tables', array(
        'title'         => __('Drugie 3 Kafeli tabeli'),
        'description'   => __('Edytuj drugie 3 kafelki tabeli sekcji o nas'),
        'panel'         => 'sds_front_section1_panel'
    ) );


    //label do czwartego kafelka
    $wp_customize->add_setting('sds_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new SDS_Info( $wp_customize, 'k4', array(
        'label' => __('Czwarty kafelek', 'sydney'),
        'section' => 'sds_front_section1_second3_tables',
        'settings' => 'sds_options[info]',
        'priority' => 10
        ) )
    ); 

    //pierwszy( od lewej ) kafelek
    //tytuł
    $wp_customize->add_setting('sds_front_section1_table4_title', array(
        'capability'    => 'edit_theme_options',
        'default'       => __('Profesjonalne zaplecze logistyczne'),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control('sds_front_section1_table4_title', array(
        'type'          => 'text',
        'label'         => 'Dodaj tytuł czwartego kafelka',
        'section'       => 'sds_front_section1_second3_tables'
    ) );

    //podtytuł/tekst
    $wp_customize->add_setting('sds_front_section1_table4_text', array(
        'capability'    => 'edit_theme_options',
        'default'       => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam quo quam accusantium veniam praesentium repudiandae dolores, autem error ipsum. Dolores aut deserunt sit consequuntur aliquam, velit repellat autem quae quam.'),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control('sds_front_section1_table4_text', array(
        'type'          => 'text',
        'label'         => 'Dodaj tekst czwartego kafelka',
        'section'       => 'sds_front_section1_second3_tables'
    ) );

    //tekst przycisku
    $wp_customize->add_setting('sds_front_section1_table4_button_text', array(
        'default'       => __('Dowiedz się więcej'),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'sds_front_section1_table4_button_text', array(
        'label'         => __('Dodaje tekst przycisku z czwartego kafelka'),
        'section'       => 'sds_front_section1_second3_tables'
    ) ) );

    //odnośnik przycisku
    $wp_customize->add_setting('sds_front_section1_table4_button_href', array(
        'default'       => '',
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control('sds_front_section1_table4_button_href', array(
        'type'          => 'text',
        'label'         => 'Zmień link przekierowania dla przycisku czwartego kafelka. Adress wpisz bez http:// , np. facebook.pl',
        'section'       => 'sds_front_section1_second3_tables'
    ) );

    //kolor tła kafelka
    $wp_customize->add_setting('sds_front_section1_table4_background', array(
        'capability'    => 'edit_theme_options',
        'default'       => '#2d3745'
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'sds_front_section1_table4_background', array(
        'label'         => __('Zmień kolor tła czwartego kafelka'),
        'section'       => 'sds_front_section1_second3_tables'
    ) ) );


    //label do piątego kafelka
    $wp_customize->add_setting('sds_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new SDS_Info( $wp_customize, 'k5', array(
        'label' => __('Piąty kafelek', 'sydney'),
        'section' => 'sds_front_section1_second3_tables',
        'settings' => 'sds_options[info]',
        'priority' => 10
        ) )
    ); 

    //piąty kafelek ze zdjęciem
    $wp_customize->add_setting('sds_front_section1_table5_image', array(
        'default'       => 'http://localhost/xampp/wordpress7/wp-content/uploads/2018/01/lg.jpg'
    ) );

    $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'sds_front_section1_table5_image', array(
        'label'         => __('Zmień zdjęcie 5 kafelka'),
        'section'       => 'sds_front_section1_second3_tables'
    ) ) );


    //label do szóstego kafelka
    $wp_customize->add_setting('sds_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new SDS_Info( $wp_customize, 'k6', array(
        'label' => __('Szósty kafelek', 'sydney'),
        'section' => 'sds_front_section1_second3_tables',
        'settings' => 'sds_options[info]',
        'priority' => 10
        ) )
    ); 

    //ostatni kafelek
    //tytuł
    $wp_customize->add_setting('sds_front_section1_table6_title', array(
        'capability'    => 'edit_theme_options',
        'default'       => __('Dołącz do nas!'),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control('sds_front_section1_table6_title', array(
        'type'          => 'text',
        'label'         => 'Dodaj tytuł ostatniego kafelka',
        'section'       => 'sds_front_section1_second3_tables'
    ) );

    //podtytuł/tekst
    $wp_customize->add_setting('sds_front_section1_table6_text', array(
        'capability'    => 'edit_theme_options',
        'default'       => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam quo quam accusantium veniam praesentium repudiandae dolores, autem error ipsum. Dolores aut deserunt sit consequuntur aliquam, velit repellat autem quae quam.'),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control('sds_front_section1_table6_text', array(
        'type'          => 'text',
        'label'         => 'Dodaj tekst ostatniego kafelka',
        'section'       => 'sds_front_section1_second3_tables'
    ) );

    //tekst przycisku
    $wp_customize->add_setting('sds_front_section1_table6_button_text', array(
        'default'       => __('Dowiedz się więcej'),
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'sds_front_section1_table6_button_text', array(
        'label'         => __('Dodaje tekst przycisku z ostatniego kafelka'),
        'section'       => 'sds_front_section1_second3_tables'
    ) ) );

    //odnośnik przycisku
    $wp_customize->add_setting('sds_front_section1_table6_button_href', array(
        'default'       => '',
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control('sds_front_section1_table6_button_href', array(
        'type'          => 'text',
        'label'         => 'Zmień link przekierowania dla przycisku ostatniego kafelka. Adress wpisz bez http:// , np. facebook.pl',
        'section'       => 'sds_front_section1_second3_tables'
    ) );

    //kolor tła kafelka
    $wp_customize->add_setting('sds_front_section1_table6_background', array(
        'capability'    => 'edit_theme_options',
        'default'       => '#2d3745'
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'sds_front_section1_table6_background', array(
        'label'         => __('Zmień kolor tła ostatniego kafelka'),
        'section'       => 'sds_front_section1_second3_tables'
    ) ) );

}

add_action( 'customize_register', 'sds_custom_about_section' );

/*
    FUNKCJA ZMIANY USTAWIEŃ CSS
*/

function sds_custom_about_css() {

    ?>

    <style type="text/css">
        /*zmiana koloru tła pierwszego kafelka*/
        .about-sds .row .box-sds.black-sds { background-color: <?php echo get_theme_mod( 'sds_front_section1_table1_background' ); ?>; }
        .about-sds .row .box-sds.white-sds { background-color: <?php echo get_theme_mod( 'sds_front_section1_table2_background' ); ?>; }
    </style>

    <?php 

}

add_action( 'wp_head', 'sds_custom_about_css' );