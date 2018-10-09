<?php
/*
    ==================================
        SECTION 4
    ==================================
*/
?>

<section class="custom-news-sds">
    <div class="container">

        <div class="heading-sds text-center">
            <h1><?php echo get_theme_mod( 'sds_front_section4_title' ); ?></h1>
        </div>

        <div class="row">

            <?php
                $args = array(
                    'category_name'     => get_theme_mod( 'sds_front_section4_blog_category' ),
                    'posts_per_page'    => 3
                );
                // $news_post = new WP_Query( array(
                //     'category_name'     => get_theme_mod( 'sds_front_section4_blog_category' ),
                //     'posts_per_page'    => 3
                // ) );
                query_posts( $args );
                if( have_posts() ) :
                    while( have_posts() ) : the_post();
                    ?>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="col-wrapper4-sds">
                            <a href="<?php the_permalink(); ?>">
                                <div class="ro-img">
                                    <img src="<?php the_post_thumbnail_url() ?>" alt="" >            
                                </div>
                                <div class="ro-title-news"><h1><?php the_title(); ?></h1></div>
                            </a>
                            <div class="ro-content-news">
                                <?php echo wp_trim_words( get_the_content(), 40, ' [...]' ); ?>
                            </div>
                        </div>
                    </div>

                <?php
                endwhile; else:
                
                        //no posts found
                    // wp_reset_postdata();
                    wp_reset_query();
                endif;
            ?>


        </div><!-- .row -->
        
            <div class="col-sm-12">
                <div class="ro-btn-news text-center">
                    <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><button class="btn-sds btn-lg"><?php echo get_theme_mod( 'sds_front_section4_btn_title' ); ?></button></a>
                </div>
            </div>

    </div><!-- .container -->
</section>