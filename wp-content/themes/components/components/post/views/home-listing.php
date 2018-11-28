<?php
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 3,
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) : 
?>

<main id="portfolio-wrapper">
	<div id="page">
		<div id="portfolio" class="container">
			<div class="row">
				<div class="col-12">
					<div class="title">
						<h3 style="margin: 0 auto; text-align: center;">Latest Episodes</h3>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="container-fluid">
						<div class="row">

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
							setup_postdata(get_the_ID());
							?>


							<div class="col-12 col-md-4">
								<div class="py-3">
									<div class="title">
										<h2><?php the_title(); ?></h2>
									</div>
									<a href="<?php the_permalink(); ?>" class="icon icon-plus-sign button">Read More</a> 
								</div>
							</div>

						<?php endwhile; ?>
						</div>
					</div>


					<?php 
					wp_reset_postdata(); ?>

				</div>
			</div>
		</div>
	</div>
</main>
<?php endif; ?>