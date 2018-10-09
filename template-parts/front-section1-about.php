<?php
/*
    ==================================
        SECTION 1 - ABOUT
    ==================================
*/
?>

<section class="about-sds">
    <div class="container">

        <?php if( get_theme_mod( 'sds_front_section1_options' ) == 'type1' || get_theme_mod( 'sds_front_section1_options' ) == 'type3' )  : ?>

            <div class="heading-sds text-center">
                <h1> <?php echo get_theme_mod( 'sds_front_section1_title' ); ?> </h1>
                <p class="subtitle-sds"> <?php echo get_theme_mod( 'sds_front_section1_subtitle' ); ?> </p>
            </div><!-- .heading-sds -->

        <?php endif; ?>

        <?php if( get_theme_mod( 'sds_front_section1_options' ) == 'type2' || get_theme_mod( 'sds_front_section1_options' ) == 'type3' ) : ?>

            <!--pierwsze 3 kafelki  -->
            <div class="row">

                <div class="col-md-4">
                    <div class="box-sds black-sds">
                        <h1><?php echo get_theme_mod( 'sds_front_section1_table1_title' ); ?></h1>
                        <p><?php echo get_theme_mod( 'sds_front_section1_table1_text' ); ?></p>
                        <a href="http://<?php echo get_theme_mod( 'sds_front_section1_table1_button_href' ); ?>" target="_blank"><?php echo get_theme_mod( 'sds_front_section1_table1_button_text' ); ?></a>
                    </div><!-- .box-sds -->
                </div><!-- .col-md-4 -->

                <div class="col-md-4">
                    <div class="box-sds white-sds">
                        <h1><?php echo get_theme_mod( 'sds_front_section1_table2_title' ); ?></h1>
                        <p><?php echo get_theme_mod( 'sds_front_section1_table2_text' ); ?></p>
                        <a href="http://<?php echo get_theme_mod( 'sds_front_section1_table2_button_href' ); ?>" target="_blank"><?php echo get_theme_mod( 'sds_front_section1_table2_button_text' ); ?></a>
                    </div><!-- .box-sds -->
                </div><!-- .col-md-4 -->

                <div class="col-md-4">
                    <div class="box-pic-sds" style="background: url(<?php echo get_theme_mod('sds_front_section1_table3_image'); ?>) center center no-repeat;">

                    </div><!-- .box-sds -->
                </div><!-- .col-md-4 -->

            </div><!-- .row -->

            <!--drugie 3 kafelki  -->
            <div class="row">

                <div class="col-md-4">
                    <div class="box-sds white-sds">
                        <h1><?php echo get_theme_mod( 'sds_front_section1_table4_title' ); ?></h1>
                        <p><?php echo get_theme_mod( 'sds_front_section1_table4_text' ); ?></p>
                        <a href="http://<?php echo get_theme_mod( 'sds_front_section1_table4_button_href' ); ?>" target="_blank"><?php echo get_theme_mod( 'sds_front_section1_table4_button_text' ); ?></a>
                    </div><!-- .box-sds -->
                </div><!-- .col-md-4 -->

                <div class="col-md-4">
                    <div class="box-pic-sds" style="background: url(<?php echo get_theme_mod('sds_front_section1_table5_image'); ?>) center center no-repeat;">

                    </div><!-- .box-pic-sds -->
                </div><!-- .col-md-4 -->

                <div class="col-md-4">
                    <div class="box-sds white-sds">
                        <h1><?php echo get_theme_mod( 'sds_front_section1_table6_title' ); ?></h1>
                        <p><?php echo get_theme_mod( 'sds_front_section1_table6_text' ); ?></p>
                        <a href="http://<?php echo get_theme_mod( 'sds_front_section1_table6_button_href' ); ?>" target="_blank"><?php echo get_theme_mod( 'sds_front_section1_table6_button_text' ); ?></a>
                    </div><!-- .box-sds -->
                </div><!-- .col-md-4 -->

            </div><!-- .row -->

        <?php endif; ?>

    </div>
</section><!-- .about-sds -->