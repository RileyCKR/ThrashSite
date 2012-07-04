<?php get_header(); ?>

			<!-- BEGIN MAIN -->
			<div id="main">
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<div class="post-heading page">
					<h1><?php the_title(); ?></h1>
				</div>
				
				<div class="post-entry">
					<?php the_content(); ?>
					<?php wp_link_pages(); ?>
				</div>
				
				<?php endwhile; endif; ?>
			
			</div>
			<!-- END MAIN -->
			
<?php get_sidebar(); ?>
			
<?php get_footer(); ?>