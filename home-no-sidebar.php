<?php
/*
 * Template Name: No sidebar
 * Template Post Type: post
 */
?>

<?php get_header(); ?>

<section class="no-sidebar-blog-page">

    <div class="blog-header" style=" background:url(<?php the_post_thumbnail_url(''); ?>) no-repeat center center / cover; height:420px;">
    
        <div class="ro-heading-title">
            <div class="container">
                <div class="row">
                    <div class="heading-sds text-center">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-blog-content">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-xs-12">
                    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                        <div id="post-<?php the_ID(); ?>" <?php post_class( 'ro-blog-post-item' ); ?>>
                            <div class="ro-blog-post-header">
                                <div class="ro-date ">
                                    <span><?php the_date( ' d ' ); ?></span><br>
                                    <?php echo get_the_date( ' M ' ); ?>
                                </div>
                                <h4><?php the_title(); ?></h4>
                                <div class="ro-meta">
                                    <span><i class="fa fa-user"></i> Napisał: <?php the_author();?></span>
                                    <span><i class="fa fa-commenting-o"></i><?php echo get_comments_number(); ?></span>
                                    <span><?php edit_post_link( 'Edytuj Post' ); ?></span>
                                </div>
                            </div>

                            <div class="ro-blog-post-img"><img src="<?php the_post_thumbnail_url(); ?>" alt="" width="100%" height="508"></div>
                            
                            <div class="ro-blog-post-content">
                                
                                <?php the_content(); ?>
                                
                                <div class="ro-meta">
                                    <h4 class="post-blog-tag">Tagi: </h4>
                                    <?php the_tags( '<div class="tag-list">', ' ', '</div>' ); ?>
                                </div>

                                 <div class="blog-post-pagination">
                                    <!-- <div class="pull-right"><?php next_post_link( '<div class="ro-btn-news"><button class="btn btn-lg"><i class="fa fa-angle-double-right"></i></button></div>' ) ?></div>
                                    <div clas="pull-left"><?php previous_post_link( '<div class="ro-btn-news"><button class="btn btn-lg"><i class="fa fa-angle-double-left"></i></button></div>' ) ?></div> -->

                                    <div class="pull-left pagination-next"><?php next_post_link( '%link','<i class="fa fa-angle-double-left"></i> %title' ); ?></div>
                                    <div class="pull-right pagination-previous"><?php previous_post_link( '%link','%title <i class="fa fa-angle-double-right"></i>' ); ?></div>  

                                </div> 

                                

                            </div>

                        </div><!-- .ro-blog-post-item -->

                        <?php endwhile; ?>

                    <?php else: endif; ?>
                </div><!-- .col-md-12 -->

                <div class="col-md-12 col-xs-12">
                    <div class="ro-blog-post-item">
                        <?php if( comments_open() ) : comments_template(); endif;  ?>
                    </div>
                </div>

            </div>
        </div><!-- .container -->
    </div>

 </section><!-- .section --> 

<?php get_footer(); ?>