<?php

if( post_password_required() ){
    return;
}

 ?>
<!--id="comments" standardowe id sekcji komentarzy  -->
 <div id="comments" class="comments-area">

    <?php
        if( have_comments() ) :
        //mamy dostępne komentarze
    ?>

    <!-- dynamiczny tytuł, ldquo; = jest to otwierający znak " rdquo; = zamykający " , %1$s = funkcja uzyskująca dostęp do wartośći pierwszej zmiennej ( get_comments_number() ), %2$s = funkcja uzyskująca dostęp do wartośći drugiej zmiennej ( 'comments title' ) -->
    <h2 class="comments-title">
        <?php 
            printf(
                esc_html( _nx( 'Jeden komentarz do wpisu &ldquo;%2$s&rdquo;', '%1$s komentarze/y do wpisu &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'SDStudio' ) ),
                number_format_i18n( get_comments_number() ),
                '<span>'. get_the_title() .'</span>'
            );
        ?>

    </h2>

    <?php sds_get_post_navigation(); ?>

    <!-- lista komentarzy z własnymi ustawieniami -->
    <ol class="comments-list">
        <?php 
        
        $args = array(
            'style'             => 'ol',
            'type'              => 'all',
            'reply_text'        => 'Odpisz',
            'avatar_size'         => 64,
            'format'            => 'html5',
            'echo'              => true
        );
        
        wp_list_comments( $args );
        
        ?>
    </ol>
    
    <?php sds_get_post_navigation(); ?>


    <!-- sprawdzamy czy komentarze są wyłączone jednocześnie czy są już jakieś komentarze -->
    <?php if( !comments_open() && get_comments_number() ) : ?>

    <p class="no-comments"><?php esc_attr_e( 'Komentarze są wyłączone', 'SDStudio' ) ?></p>

    <?php endif; ?>

    <?php endif; ?>

    <!-- wyświetla formularz do komentarzy -->
    <?php 

        //pola inputów
        $fields = array(
			
			'author' =>
				'<div class="col-md-6 comments-input"><label for="author">' . __( 'Imię i Nazwisko', 'domainreference' ) . '</label> <span class="required">*</span> <input id="author" name="author" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) . '" required="required" /></div>',
				
			'email' =>
				'<div class="col-md-6 comments-input"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> <span class="required">*</span><input id="email" name="email" class="form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" required="required" /></div>',
				
			'url' =>
				'<div class="col-md-12 form-group last-field comments-input"><label for="url">' . __( 'Strona WWW', 'domainreference' ) . '</label><input id="url" name="url" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" /></div>'
				
		);

        //zestaw argumentów do stylizacji formulaza
        $args = array(
            'class_submit'  => 'btn-submit',
            'label_submit'  =>  'Dodaj komentarz',
            'comment_field' =>
            '<div class="form-group comments-input"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label> <span class="required">*</span><textarea id="comment" class="form-control" style="border-radious:20px;" name="comment" rows="6" required="required"></textarea></p>',
            'fields' => apply_filters( 'comment_form_default_fields', $fields )
        );

        comment_form( $args ); 
    ?>
 </div><!-- .comments-area -->