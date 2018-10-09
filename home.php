<?php get_header(); ?>

<section class="main-blog-page">

            <?php 
                $posts_page = get_option( 'page_for_posts' );
                $post_thumbnail_id = get_post_thumbnail_id( $posts_page );
                $url = wp_get_attachment_image_src( $post_thumbnail_id, '' );
                $blog_pagetitle = get_the_title( $posts_page );
            ?>

        <div class="blog-header" style=" background: url(<?php echo $url[0]; ?>) no-repeat center center / cover; height:420px;">

            <div class="ro-heading-title">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12 heading-sds text-center">
                            <h1><?php echo $blog_pagetitle; ?></h1>
                        </div>
                    </div>
                </div>
                
            </div><!-- .ro-heading-title-blog -->            

        </div><!-- .blog-header -->

            <div class="main-blog-content">
                <div class="container">
                    <div class="row">

                        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="col-wrapper4-sds">
                                            <div class="ro-blog-item">
                                                <div class="ro-img"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></div>
                                                <div class="ro-content-blog">
                                                    <div class="ro-title-blog"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                                    <div class="ro-excerpt-blog"><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></div>
                                                    <div class="ro-meta">
                                                        <span><i class="fa fa-user"></i> Napisał: <?php the_author();?></span>
                                                        <span><i class="fa fa-calendar-check-o"></i><?php the_date(); ?></span>
                                                        <span><i class="fa fa-commenting-o"></i><?php echo get_comments_number();  ?></span>
                                                    </div><!-- .ro-meta -->
                                                </div>
                                            </div><!-- .ro-blog-item -->
                                        </div>
                                    </div><!-- .col-lg-4 --> 
                            
                        <?php endwhile; ?>
                            <div class="col-md-12 text-center">

                                <!-- <?php next_posts_link( '<div class="ro-btn-news text-center"><button class="btn btn-lg">Starsze <i class="fa fa-angle-double-right"></i></button></div>' ) ?>
                                <?php previous_posts_link( '<div class="ro-btn-news text-center"><button class="btn btn-lg"><i class="fa fa-angle-double-left"></i> Nowsze</button></div>' ) ?> -->
                                <?php /* echo 'Page '. ( get_query_var('paged') ? get_query_var('paged') : 1 ) . ' of ' . $wp_query->max_num_pages; */ ?>


                                <?php echo paginate_links(); ?>
                            </div><!-- .col-md-12 --> 
                        <?php else: endif; ?>

                    </div> <!-- .row -->
                </div><!-- .container -->
            </div><!-- .main-blog-content -->

 </section><!-- .section --> 



<?php get_footer(); ?>