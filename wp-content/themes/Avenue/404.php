<?php get_header(); ?>

			<!-- BEGIN MAIN -->
			<div id="main">
				
				<div class="post-heading page">
					<h1><?php _e('Page Not Found', 'Avenue'); ?></h1>
				</div>
				
				<div class="entry404">
					<img src="<?php bloginfo('template_directory'); ?>/images/404.png" alt="404" />
					<div class="text404">
						<p><?php _e('Sorry, the page you are looking for could not be found. Try using the search box below!', 'Avenue'); ?></p>
						<?php get_search_form(); ?>
					</div>
				</div>
			
			</div>
			<!-- END MAIN -->
			
<?php get_sidebar(); ?>
			
<?php get_footer(); ?>