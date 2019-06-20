<div class="off-canvas position-left" id="off-canvas" data-off-canvas data-position="left">

	<!-- pull in the products search from magento -->
	
		<?php //the_block('top.wpsearch'); ?>
	
	<!-- <ul id="mobile-menu" class="vertical menu" data-drilldown> -->
	<ul id="mobile-menu" class="vertical menu accordion-menu" data-accordion-menu>
	
		<?php echo m2i_get_block_html( 'topnavwp' ); ?>
		
		<?php //joints_off_canvas_nav_getleft(); ?>
		 
		 <li>
			<a href="capacitacion-pregel/">Capacitación</a>
		</li>
		
		<?php joints_off_canvas_nav_getright(); ?>
		
	    <?php joints_off_canvas_nav(); ?>
	</ul>
	
</div>