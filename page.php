<?php get_header(); ?>

<section class="default-page">

    <?php 
        $single_page = get_the_ID();
        $post_thumbnail_id = get_post_thumbnail_id( $posts_page );
        $url = wp_get_attachment_image_src( $post_thumbnail_id, '');
        $blog_pagetitle = get_the_title( $posts_page );
    ?>

<div class="blog-header" style=" background: url(<?php echo $url[0]; ?>) no-repeat scroll center center / cover; height:420px;">

    <div class="ro-heading-title">

        <div class="container">
            <div class="row">
                <div class="col-md-12 heading-sds text-center">
                    <h1><?php echo $blog_pagetitle; ?></h1>
                </div>
            </div>
        </div>

    </div><!-- .ro-heading-title-blog -->            
</div><!-- .main-blog-header -->


    <div class="main-single-page">
        <div class="container">
            <div class="row">
    
                <div class="col-md-8 col-xs-12">
    
                    <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
                        <div id="page-<?php the_ID(); ?>">

                            <?php the_content(); ?>
                                    
                        </div>
                    <?php endwhile; endif; ?>
    
                </div><!-- .col-md-8 col-xs-12 -->
    
                <div class="col-md-4 col-sx-12">
                    <div class="ro-blog-post-sidebar">
                        <?php if( dynamic_sidebar( 'sds-sidebar' ) ) : endif; ?>
                    </div>
                </div><!-- .col-md-4 -->
    
            </div><!-- .row -->
    
        </div><!-- .container -->
    </div>

</section><!-- .section -->


<?php get_footer(); ?>
