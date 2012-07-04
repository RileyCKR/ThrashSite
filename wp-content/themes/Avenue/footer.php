
		</div>
		<!-- END WRAPPER-CONTENT -->
		
		<!-- BEGIN WRAPPER -->
		<div id="wrapper-footer">
		
			<div id="footer">

				<?php
				if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 1')): 
				endif;
				?>
				
				<?php
				if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 2')): 
				endif;
				?>
				
				<?php
				if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 3')): 
				endif;
				?>
			
				<?php if(get_option('pyre_footer_left') || get_option('pyre_footer_right')): ?>
				<div id="footer-bottom">
				
					<?php if(get_option('pyre_footer_left')): ?>
					<p class="left"><?php echo get_option('pyre_footer_left'); ?></p>
					<?php endif; ?>
					<?php if(get_option('pyre_footer_right')): ?>
					<p class="right"><?php echo get_option('pyre_footer_right'); ?><a href='#top' class='backToTop'><?php _e('Back to Top', 'Avenue'); ?></a></p>
					<?php endif; ?>
				
				</div>
				<?php endif; ?>
					
			</div>
		
		</div>

	</div>
	<!-- END WRAPPER -->
	
	<?php
	if(get_option('pyre_analytics')) {
		echo get_option('pyre_analytics');
	}
	?>
	
	<?php wp_footer(); ?>
</body>

</html>