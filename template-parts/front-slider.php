<?php
/*
    ==================================
        FRONT-SLIDER
    ==================================
*/
?>
<section class="carousel-container-sds">
    <!--start carousel  -->
        <div id="front-slider-<?php the_ID(); ?>" class="carousel slide carousel-fade sds-carousel-thumb" data-ride="carousel" data-interval="<?php echo get_theme_mod( 'sds_slider_speed' ) ?>">
    
            <!--animated mouse scroll  -->
    
                <div class="scroll-downs">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                </div>
    
    
            <!--wrapper for slider  -->
            <div class="carousel-inner" role="listbox">

                <?php 
                    //funkcja z pliku custom-slider-section , zwracam wszystkie dane w tablicy
                    $slides = return_slides();  
                    foreach( $slides as $slide ) {
                ?>

                    <div class="item<?php echo $slide['class']; ?>">
                        <!--ukryte zdjęcia next i prev do podglądu  -->
                        <div class="hide next-image-preview" data-image="<?php echo $slide['next_img']; ?>"></div>
                        <div class="hide prev-image-preview" data-image="<?php echo $slide['prev_img']; ?>"></div>

                        <img src="<?php echo $slide['url']; ?>" alt="">
                        <!-- <div class="carousel-caption "></div> -->
                        <div class="sds-caption">
                            <h3><?php echo $slide['first_title']; ?></h3>
                            <h1><?php echo $slide['second_title']; ?></h1>
                            <p><?php echo $slide['subtitle']; ?></p>
                            <a href="<?php echo $slide['button_link']; ?>" target="_blank"><button class="btn-sds btn-lg"><?php echo $slide['button_text']; ?></button></a>
                        </div>
                    </div>
        
                <?php } ?>
            </div><!-- .carousel-inner -->
    
            <!--controls  -->
            <a  class="left carousel-control" href="#front-slider-<?php the_ID(); ?>" role="button" data-slide="prev">
                <div class="table">
                    <div class="table-cell">
                        <div class="preview-container">
                            <span class="thumbnail-container background-image"></span>
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </div>
                    </div><!--.table-cell  -->
                </div><!--.table  -->
            </a>
    
            <a  class="right carousel-control" href="#front-slider-<?php the_ID(); ?>" role="button" data-slide="next">
                <div class="table">
                    <div class="table-cell">
                        <div class="preview-container">
                            <span class="thumbnail-container background-image"></span>
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </div>
                    </div><!--.table-cell  -->
                </div><!--.table  -->
            </a>
    
        </div><!--.carousel .slide  -->

</section>