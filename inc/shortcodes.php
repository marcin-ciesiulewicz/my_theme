<?php 

/*
    ==================================
        SHORTCODES
    ==================================
*/

function sds_tooltip( $atts , $content= null ) {
    
    //pobieram atrybuty
    $atts = shortcode_atts( 
        array(
            'placement' => 'top',
            'title'     => ''        
        ),
        $atts,
        'tooltip'
    );

    $title = ( $atts['title'] == '' ? $content : $atts['title'] );

    // return html
    return '<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="' . $atts['placement'] . '" data-title="' . $title . '">' . $content . '</button>';
}

add_shortcode( 'tooltip', 'sds_tooltip' );


function sds_popover( $atts, $content ) {

    $atts = shortcode_atts( 
        array(
            'title'     => '',
            'content'   => '',
            'placement' => 'bottom',
            'trigger'   => 'click'
        ),
        $atts,
        'popover'
    );

    return '<a tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-placement="' . $atts['placement'] . '" data-trigger="' . $atts['trigger'] . '" title="' . $atts['title'] . '" data-content="' . $atts['content'] . '">' . $content . '</a>';
}

add_shortcode( 'popover', 'sds_popover' );