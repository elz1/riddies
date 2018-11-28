<section id="wrapper">
	<div id="page">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="title">
						<h2>Riddles</h2>
					</div>
				</div>
				<div class="col-sm-12">
					<?php
					$args = array(
						'post_type' => 'riddle',
						'posts_per_page' => 5,
						'orderby' => 'rand'
					);
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) : ?>

					<?php while ( $the_query->have_posts() ) : $the_query->the_post();
						setup_postdata(get_the_ID()); ?>
						<div class="riddle-holder mb-4">
							<div class="riddle"><p><?php the_field('riddle'); ?></p></div>
							<p class="show-answer">Show Answer</p>
							<p class="hide-answer">Hide Answer</p>
							<div class="answer"><p><?php the_field('answer'); ?></p></div>
						</div>

					<?php endwhile; 
					endif;
					?>
					<?php wp_reset_postdata(); ?>

				</div>
			</div>
		</div>
	</div>
</section>