<nav class="comment-navigation" role="navigation">
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<div class="post-link-nav">
				<span class="fa fa-angle-left fa-2x" aria-hidden="true"></span> 
				<?php previous_comments_link( esc_html__( 'Starsze', 'SDStudio' ) ) ?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 text-right">
			<div class="post-link-nav">
				<?php next_comments_link( esc_html__( 'Nowsze', 'SDStudio' ) ) ?>
				<span class="fa fa-angle-right fa-2x" aria-hidden="true"></span>
			</div>
		</div>
	</div><!-- .row -->
</nav>