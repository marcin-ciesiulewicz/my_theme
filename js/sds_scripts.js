jQuery(document).ready(function($){

        //funkcja zmieniająca klasę navbar po scrollowaniu
        $(window).scroll( function() {
                var scroll = $(window).scrollTop();

                if (scroll >= 40) {
                        $('.navbar-container').addClass('fixed-active');
                        $('.logo-img').addClass('img-active');
                        // console.log('zxc');
                }
                if ( scroll < 40 ) {
                        $('.fixed-active').removeClass('fixed-active');
                        $('.img-active').removeClass('img-active');
                        // console.log('zxc < 40');                        
                }
                // console.log(scroll);
        });


        //funkcja podglądu w zdjęć next i prev slidera

	/* carousel functions,  slid.bs.carousel - klasa bootstrapp, oznacza stan zakończenia slidowania z jednego zdjęcia na drugie */
        $(document).on('click' , '.sds-carousel-thumb', function(){
                var id = $("#" + $(this).attr("id"));
                $(id).on('slid.bs.carousel', function(){
                        sds_get_bs_thumb(id);
                });
        });

        $(document).on('mouseenter', '.sds-carousel-thumb', function(){
                var id = $( "#" + $(this).attr("id") );
                sds_get_bs_thumb(id);
        });

        function sds_get_bs_thumb( id ) {
                var nextThumb = $(id).find('.item.active').find('.next-image-preview').data('image');
                var prevThumb = $(id).find('.item.active').find('.prev-image-preview').data('image');
                $(id).find('.right.carousel-control').find('.thumbnail-container').css({"background-image" : "url("+nextThumb+")"});
                $(id).find('.left.carousel-control').find('.thumbnail-container').css({"background-image" : "url("+prevThumb+")"});

        }

        //aktywascja shortcodów
        $('[data-toggle="tooltip"]').tooltip();

        $('[data-toggle="popover"]').popover();

});