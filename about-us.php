<?php
/*
Template Name: O Nas
*/
?>

<?php get_header(); ?>

<section class="custom-single-page-about">

    <div class="blog-header" style="background: url(<?php the_field( 'header_image' ) ?>) no-repeat center center / cover; height:420px;">
    
        <div class="ro-heading-title">

            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-sds text-center">
                        <h1><?php the_field( 'header_title' ); ?></h1>
                    </div>
                </div>
            </div>

        </div><!-- .ro-heading-title-blog -->
    </div><!-- .blog-header -->

    <div class="custom-single-page-content">

        <div class="container">

            <div class="row">

                <div class="col-md-7">
                    <div class="descRight">
                        <h1><?php the_field( 'ro-1-title' ); ?></h1>
                        <p><?php the_field( 'ro-1-subtitle' ); ?></p>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="ro-pickRight"><img src="<?php the_field( 'pick_right' ); ?>" alt=""></div>
                </div>

                <div class="col-md-12">
                    <div class="ro-box-grey">
                        <h4><?php the_field( 'ro-1-quote' ); ?></h4>
                    </div>
                </div>

            </div><!-- .row -->

            <div class="row">

                <div class="col-md-5">
                    <div class="ro-pickLeft"><img src="<?php the_field( 'pick_left' ); ?>" style="width:100%;" alt=""></div>
                </div>
                <div class="col-md-6">
                    <div class="descLeft">
                        <h1><?php the_field( 'ro-2-title' ); ?></h1>
                        <p><?php the_field( 'ro-2-subtitle' ); ?></p>
                    </div>
                </div>

            </div><!-- .row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="ro-box-black">
                        <div class="row">
                            <div class="col-md-6">
                                <h1><?php the_field( 'ro-3-title' ); ?></h1>
                                <p><?php the_field( 'ro-3-subtitle' ); ?></p>
                                <a href="<?php the_field( 'ro-3-btn-link' ); ?>" class="ro-btn-link"><?php the_field( 'ro-3-btn-title' ); ?></a>
                            </div>
                            <div class="col-md-6">
                                <div class="img-outer"><img src="<?php the_field( 'pick_outer' ); ?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- .container -->

    </div><!-- .custom-single-page-content -->

</section><!-- .custom-single-page-about -->

<?php get_footer(); ?>