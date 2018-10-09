<?php 
/*
==================================
Footer Widgets
==================================
*/


//footer widgets
function sds_widgets() {

    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar Widget' ),
        'id'            => 'sds-sidebar',
        'description'   => 'Prawy sidebar na podstronach',
        'before_widget' => '<section id="%1$s" class="sds-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="wg_title">',
        'after_title'   => '</h3>'
    ) );
    
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 1' ),
        'id'            => 'footer_widget1',
        'before_widget' => '<aside>',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="wg-title">',
        'after_title'   => '</h3>'
    ) );
    
    register_sidebar( array(
        'name'          => 'Footer Widget 2',
        'id'            => 'footer_widget2',
        'before_widget' => '<aside>',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="wg-title">',
        'after_title'   => '</h3>'
    ) );
    
    register_sidebar( array(
        'name'          => 'Footer Widget 3',
        'id'            => 'footer_widget3',
        'before_widget' => '<aside>',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="wg-title">',
        'after_title'   => '</h3>'
    ) );
    
    register_sidebar( array(
        'name'          => 'Footer Widget 4',
        'id'            => 'footer_widget4',
        'before_widget' => '<aside>',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="wg-title">',
        'after_title'   => '</h3>'
    ) );


}

add_action( 'widgets_init', 'sds_widgets' );
