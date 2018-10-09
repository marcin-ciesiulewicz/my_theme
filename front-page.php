<?php get_header(); ?>


<?php

if ( have_posts() ) : while ( have_posts() ) : the_post();

        if ( is_front_page() ) {

            //sekcje slajdera lub zdjęcia na stronie głównej
            if( get_theme_mod( 'sds_front_slider_type_options' ) == 'slider' ) {
                 require get_template_directory() . '/template-parts/front-slider.php';
            } else {
                require get_template_directory() . '/template-parts/front-img.php';
            }

            // pierwsza sekcja 'o nas'
            if ( get_theme_mod('sds_front_section1_options') == 'type1' || get_theme_mod('sds_front_section1_options') == 'type3' || get_theme_mod('sds_front_section1_options') == 'type2' ) :
                require get_template_directory() . '/template-parts/front-section1-about.php';
            endif;

            //druga sekcja, z ikonkami
            if ( get_theme_mod( 'sds_front_section2_options') == 'type1' ) :
                require get_template_directory() . '/template-parts/front-section2-ikonki.php';
            endif;

            //trzecia sekcja
            if ( get_theme_mod( 'sds_front_section3_options') == 'type1' ) :
                require get_template_directory() . '/template-parts/front-section3-parallax.php';
            endif;

            //czwarta sekcja
            if( get_theme_mod( 'sds_front_section4_options' ) == 'type1' ) :
                require get_template_directory() . '/template-parts/front-section4-blog.php';
            endif;
        }
        
endwhile; else:
    // no posts found
endif;

?>

<?php get_footer(); ?>