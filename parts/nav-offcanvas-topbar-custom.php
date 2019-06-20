<div data-sticky-container class="show-for-large">
	<div class="top-bar sticky" id="top-bar-menu" data-sticky data-sticky-on="large" data-anchor="content" data-margin-top="0">		
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell">
					<div class="top-bar-left">
						<div class="nav-table">
							<div class="nav-table-row">
								<ul id="menu-main-left-1" class="dropdown menu float-left" data-dropdown-menu>
									<li>
										<a href="/">Inicio</a>
									</li>
									<?php echo m2i_get_block_html( 'topnavwp' ); ?>
									<li>
										<a href="https://pregelperu.com/capacitacion-pregel/">Capacitación</a>
									</li>
								</ul>
								<?php joints_top_nav_right(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="grid-container">
	<div class="grid-x hide-for-large">	
	     <div class="m-menu-icon"><button class="menu-icon" type="button" data-toggle="off-canvas"></button></div>	
		<div class="cell text-center mobile-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pregel-logo.png" alt="PreGel"></div>	
	</div>
</div>