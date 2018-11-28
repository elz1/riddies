<?php if( get_the_post_thumbnail() ) : ?>
<div class="hero" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
</div>
<?php endif; ?>
<section class="wrapper py-5">
	<div class="container">
		
		<div class="row">
			<div class="col-12">
				<?php 
				
				Components\View::render('post', get_post_format()); 
				
				the_post_navigation(array(
		            'prev_text'                  => __( '<i class="fas fa-chevron-left"></i> Previous Episode' ),
		            'next_text'                  => __( 'Next Episode <i class="fas fa-chevron-right"></i>' ),
		            'screen_reader_text' => __( 'Continue Reading' ),
		        ));

				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

				?>
			</div>
		</div>

	</div>
</section>