<?php wp_footer(); ?>

<footer class="custom-footer">
    <div class="container">
        <!--4 kolumny widgetów  -->
        <div class="col-lg-3 col-md-6 col-sm-6"><?php if( dynamic_sidebar( 'footer_widget1' ) ) : else: endif; ?></div>
        <div class="col-lg-3 col-md-6 col-sm-6"><?php if( dynamic_sidebar( 'footer_widget2' ) ) : else: endif; ?></div>
        <div class="col-lg-3 col-md-6 col-sm-6"><?php if( dynamic_sidebar( 'footer_widget3' ) ) : else: endif; ?></div>
        <div class="col-lg-3 col-md-6 col-sm-6"><?php if( dynamic_sidebar( 'footer_widget4' ) ) : else: endif; ?></div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

            <div class="social-wrap">
                <?php if( get_theme_mod( 'sds_footer_ico1' ) != '' ) :?>
                    <a href="https://<?php echo get_theme_mod( 'sds_footer_ico1_href' ); ?>" target="__blank">
                        <i class="<?php echo get_theme_mod( 'sds_footer_ico1' ); ?>"></i>
                    </a>
                <?php endif; ?>
                <?php if( get_theme_mod( 'sds_footer_ico2' ) != '' ) :?>
                    <a href="https://<?php echo get_theme_mod( 'sds_footer_ico2_href' ); ?>" target="__blank">
                        <i class="<?php echo get_theme_mod( 'sds_footer_ico2' ); ?>"></i>
                    </a>
                <?php endif; ?>
                <?php if( get_theme_mod( 'sds_footer_ico3' ) != '' ) :?>
                    <a href="https://<?php echo get_theme_mod( 'sds_footer_ico3_href' ); ?>" target="__blank">
                        <i class="<?php echo get_theme_mod( 'sds_footer_ico3' ); ?>"></i>
                    </a>
                <?php endif; ?>
                <?php if( get_theme_mod( 'sds_footer_ico4' ) != '' ) :?>
                    <a href="https://<?php echo get_theme_mod( 'sds_footer_ico4_href' ); ?>" target="__blank">
                        <i class="<?php echo get_theme_mod( 'sds_footer_ico4' ); ?>"></i>
                    </a>
                <?php endif; ?>
                <?php if( get_theme_mod( 'sds_footer_ico5' ) != '' ) :?>
                    <a href="https://<?php echo get_theme_mod( 'sds_footer_ico5_href' ); ?>" target="__blank">
                        <i class="<?php echo get_theme_mod( 'sds_footer_ico5' ); ?>"></i>
                    </a>
                <?php endif; ?>
            </div><!-- .social-wrap -->

            <div class="ro-coppyright">
                <?php echo get_theme_mod( 'sds_footer_copyright' ); ?>
            </div>

        </div><!-- .col-lg-12 col-md-12 col-sm-12 col-xs-12 -->


    </div><!-- .container -->
</footer><!-- .footer -->


</body>
</html>