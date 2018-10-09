<?php
/*
Template Name: Full Width
*/
?>

<?php get_header(); ?>

<section class="full-width">

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

            <div class="container">
               <?php the_content(); ?>
            </div>
			
<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>