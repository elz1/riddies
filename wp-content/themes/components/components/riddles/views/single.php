<?php
/**
 * The component that handles the post loop.
 */
?>
<article <?php post_class(); ?> id="content" >

	<h1>Riddie <?php the_title(); ?></h1>

	<?php Components\View::render('post', 'share'); ?>

	<div class="riddle-holder mb-4">
		<div class="riddle"><p><?php the_field('riddle'); ?></p></div>
		<p class="show-answer">Show Answer</p>
		<p class="hide-answer">Hide Answer</p>
		<div class="answer"><p><?php the_field('answer'); ?></p></div>
		
	</div>
	
</article>