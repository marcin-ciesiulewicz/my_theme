<header>

    <div class="navbar-container navbar-fixed-top">
        <div class="container">
                    <div class="row">

                        <div class="col-sm-12">
                            <div role="navigation" class="navbar navbar-default navbar-sds">
    
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sds-nav-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle Navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <?php if( !empty(get_theme_mod('sds_logo')) ) : ?>
                                        <a class="navbar-brand logo-img" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_theme_mod('sds_logo'); ?>" alt=""></a> 
                                     <?php else : ?>
                                        <a class="navbar-brand logo-img" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> 
                                     <?php  endif; ?>
                                </div><!--.navbar-header -->
    
                                <div class="navbar-collapse collapse collapse-sds navbar-right" id="sds-nav-collapse-1">
                                    <?php wp_nav_menu( array(
                                        'theme_location'    => 'primary',
                                        'container'         => false,
                                        'menu_class'        => 'nav navbar-nav',
                                        'walker'            => new SDS_Walker_Nav_Primary()
                                    ) ); ?>
                                </div>
    
                            </div><!--.navbar-default -->
                        </div>

                    </div><!--.row -->
        </div><!--.container -->
    </div><!--.navabr-container -->
    
</header><!--header -->