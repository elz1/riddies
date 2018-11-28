

<?php if ( has_nav_menu( 'primary' )) : ?>
		<nav role="navigation" class="nav-desktop">

			<?php
				wp_nav_menu( array(
					'theme_location' 	=> 'primary',
					'menu_class'     	=> 'primary-menu'
				 ) );
			?>
			<div class="site-search">
				<i class="fas fa-search open-search text-white"></i>
				<div id="search-form">
					<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<label>
							<input type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" />
						</label>
						<button type="submit" class="search-submit"><i class="fas fa-search"></i></button>
					</form>
				</div>
			</div>


		</nav>

		<nav class="nav-mobile">

			<div id="mobile-menu">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>

		</nav>		

		<div class="mobile-menu">
		
			<?php
				wp_nav_menu( array(
					'theme_location' 	=> 'primary',
					'menu_class'     	=> 'primary-menu'
				 ) );
			?>

		</div>

<?php endif; ?>