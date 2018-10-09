<?php
/*
    ==================================
        THEME SUPPORT OPTIONS
    ==================================
*/

//dodajemy opcję featured image
add_theme_support( 'post-thumbnails' );

//rejestracja menu
function sds_register_nav_menu() {
    register_nav_menu( 'primary', __( 'Header Menu', 'blank' ) );
}

add_action( 'after_setup_theme', 'sds_register_nav_menu' );

/* Aktywacja HTML5 */
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

//nawigacja komentarzy
function sds_get_post_navigation()
{
    if (get_comment_pages_count() > 1 && get_option('page_comments')):

        require get_template_directory().'/template-parts/comment-nav.php';

    endif;
}