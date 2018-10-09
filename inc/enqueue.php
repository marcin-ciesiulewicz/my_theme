<?php 

/*
    ==================================
        FRONT-END ENQUEUE FUNCTIONS
    ==================================
*/

function sds_load_scripts() {

    /*style css*/
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'fontawsome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), 'all' );
    wp_enqueue_style( 'raleway', 'https://fonts.googleapis.com/css?family=Raleway:200,300,400' );
    wp_enqueue_style( 'lato', 'https://fonts.googleapis.com/css?family=Lato:400,700' );
    
    /*ikonki wordpressa*/
    wp_enqueue_style( 'dashicons' );

    /*skrypty js*/

    //odrejestrowuje skrypt, w tym  przypadku jquery, żeby dodac go ponownie w stopce
    wp_deregister_script( 'jquery' );

    //rejestrujemy i dodajemy jquery w stopce
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', FALSE, '1.11.3' ,true );
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.7' ,true );
    wp_enqueue_script( 'sds_scripts', get_template_directory_uri() . '/js/sds_scripts.js', array('jquery'), '1.0.0' ,true );

}

add_action( 'wp_enqueue_scripts' , 'sds_load_scripts' );