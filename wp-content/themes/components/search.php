<?php
/**
 * The template for displaying search results pages
*/
get_header(); ?>
	<section id="primary" class="search-content">
		<main id="main" class="site-main" role="main">
			<div class="container">
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( 'Search Results for: %s', '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
				</header><!-- .page-header -->

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post(); ?>
					<?php if (get_post_type() == 'riddle') : ?>
					<div style="padding: 15px;">Episode: <?php echo intval(get_the_title()); ?></div>
					<div class="riddle-holder mb-4">
						<div class="riddle"><p><?php the_field('riddle'); ?></p></div>
						<p class="show-answer">Show Answer</p>
						<p class="hide-answer">Hide Answer</p>
						<div class="answer"><p><?php the_field('answer'); ?></p></div>
					</div>
					<?php else : ?>
					<div class="col-12 col-md-4">
						<div class="py-3">
							<div class="title">
								<h2><?php the_title(); ?></h2>
							</div>
							<a href="<?php the_excerpt(); ?>" class="icon icon-plus-sign button">Read More</a> 
						</div>
					</div>
					<?php endif; ?>
				<?php
				// End the loop.
				endwhile;

				// Previous/next page navigation.
				the_posts_pagination( array(
					'prev_text'          => 'Previous page',
					'next_text'          => 'Next page',
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . 'Page' . ' </span>',
				) );

			// If no content, include the "No posts found" template.
			else :
				?>
				<div class="col-12 col-md-4">
					<div class="py-3">
						<div class="title">
							<h2>No results found.</h2>
						</div>
					</div>
				</div>
				<?php

			endif;
			?>
			</div>
		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php get_footer(); ?>