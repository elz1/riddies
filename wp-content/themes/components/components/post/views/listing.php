<main id="portfolio-wrapper">
	<div id="page">
		<div id="portfolio" class="container">
			<div class="row">
				<div class="col-12">
					<div class="title">
						<h3 style="margin: 0 auto; text-align: center;">Episodes</h3>
					</div>
				</div>
				<div class="col-12">
					<div class="container-fluid">
						<div class="row">

						<?php while ( have_posts() ) : the_post(); ?>

							<div class="col-12 col-md-4">
								<div class="py-3">
									<div class="episode">
										<div class="title">
											<h2><?php the_title(); ?></h2>
										</div>
										<a href="<?php the_permalink(); ?>" class="icon icon-plus-sign button">Read More</a> 
									</div>
								</div>
							</div>

						<?php endwhile; ?>
						</div>
					</div>


					<?php // Link Pages
					wp_link_pages();
					
					// Previous/next page navigation.
					the_posts_pagination(); ?>

				</div>
<!-- 				<div class="col-sm-4">

					<?php //Components\View::render('widget', 'sidebar-1'); ?>

				</div> -->
			</div>
		</div>
	</div>
</main>