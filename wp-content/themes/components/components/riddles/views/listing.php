<main id="wrapper">
	<div id="page">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="title">
						<h2>Riddles</h2>
					</div>
				</div>
				<div class="col-12">

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="riddle-holder mb-4">
							<div class="riddle"><p><?php the_field('riddle'); ?></p></div>
							<p class="show-answer">Show Answer</p>
							<p class="hide-answer">Hide Answer</p>
							<div class="answer"><p><?php the_field('answer'); ?></p></div>
							
						</div>

					<?php endwhile; ?>


					<?php // Link Pages
					wp_link_pages();
					
					// Previous/next page navigation.
					the_posts_pagination(); ?>

				</div>
			</div>
		</div>
	</div>
</main>