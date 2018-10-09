<?php
/*
    ==================================
        FRONT-IMAGE
    ==================================
*/
?>

<section class="carousel-container-sds">
            <div class="carousel-inner" role="listbox">

                <!--animated mouse scroll  -->
    
                <div class="scroll-downs">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                </div>
    
                <div class="item active">
                    <img src="<?php echo get_theme_mod( 'sds_front_image_setting' ); ?>" alt="">
                    <!-- <div class="carousel-caption "></div> -->
                    <div class="sds-caption">
                        <h3><?php echo get_theme_mod('sds_front_image_header1'); ?></h3>
                        <h1><?php echo get_theme_mod( 'sds_front_image_header2' ); ?></h1>
                        <p><?php echo get_theme_mod( 'sds_front_image_subtitle' ); ?></p>
                        <a href="<?php echo get_theme_mod('sds_front_image_button'); ?>" target="_blank"><button class="btn btn-lg"><?php echo get_theme_mod('sds_front_image_button_text'); ?></button></a>
                    </div>
                </div>
</section>