<?php
/*
    ==================================
        HEADER
    ==================================
*/
?>

 <!DOCTYPE html>
 <html <?= language_attributes(); ?> >
<head>
    <title><?php bloginfo('name'); ?> <?php wp_title();?></title>

    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php if(is_singular() && pings_open( get_queried_object() )): ?>
    <link rel="pingback" href="<?php bloginfo( "pingback_url" ); ?>">
    <?php endif; ?>

    <?php wp_head(); ?>
</head>
<body <?php body_class( ); ?>>

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