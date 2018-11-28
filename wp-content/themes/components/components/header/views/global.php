<header id="header-wrapper">

	<div id="header" class="container-fluid">
		<div class="row">
			<div class="col-12 clearfix">
				
				<div id="logo" class="branding">

					<h1 class="title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p>The Unofficial Companion to the Hey Riddle Riddle Podcast</p>
					<div class="riddle-count"><p class="text-white"><?php echo wp_count_posts('riddle')->publish; ?> riddles and counting</p></div>
				</div>

			</div>
		</div>
	</div>

	<!-- <div id="banner"> <a href="#" class="image"><img src="images/pic01.jpg" alt=""></a> </div> -->

</header>
<div id="menu-wrapper">
	<div class="container" id="menu">
		<div class="row">
			<?php Components\View::render( 'header', 'navigation' ); ?>
		</div>
	</div>
</div>