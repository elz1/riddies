<?php
/**
 * The component that handles the post loop.
 */
if(is_singular('riddle')) : 

		Components\View::render('riddles', 'single');

	else : ?>

<?php 
$omp = get_field('old_man_puzzles');
if($omp == 'Adal Rifai') : 
	$twitter = get_field('adal', 'option');
elseif($omp == 'JPC') : 
	$twitter = get_field('jpc', 'option');
elseif($omp == 'Erin Keif') :
	$twitter = get_field('erin', 'option');
else : 
	$twitter = false;
endif; 
?>
	
	<article <?php post_class(); ?> id="content" >
		<div class="title">
			<h2><?php the_title(); ?></h2>
			<h5 class="mt-2"><span class="byline">Old Man Puzzles: <?php if($twitter) : ?><a href="<?php echo $twitter; ?>" target="_blank"><?php endif; ?><?php echo $omp; ?><?php if($twitter) : ?></a><?php endif; ?></span></h5>
		</div>

		<?php the_content(); ?>

		<?php
			$episode = wp_get_post_tags(get_the_ID())[0]->slug;
			$types = ['warm-up', 'main', 'listener-submitted'];
			foreach($types as $type) :

				$args = array(
					'post_type' => 'riddle',
					'tax_query' => array(
						'relation' => 'AND',
						array(
							'taxonomy' => 'episodes',
							'field' => 'slug',
							'terms' => array( $episode ),
						),
						array(
							'taxonomy' => 'riddle_types',
							'field' => 'slug',
							'terms' => array( $type ),
						),
					),
					'posts_per_page' => -1,
					'order'			 => 'ASC'
				);

				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) : ?>
					<div class="riddle-section">
						<div class="title">
							<h4><?php echo ucwords(str_replace('-', ' ', $type)); ?> Riddles</h4>
						</div>
						<hr>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
							setup_postdata(get_the_ID()); ?>
							<div class="riddle-holder mb-4">
								<div class="riddle"><p><?php the_field('riddle'); ?></p></div>
								<p class="show-answer">Show Answer</p>
								<p class="hide-answer">Hide Answer</p>
								<div class="answer"><p><?php the_field('answer'); ?></p></div>
								
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif;
				wp_reset_postdata();
			endforeach;
			?>
		
	</article>
<?php endif; ?>