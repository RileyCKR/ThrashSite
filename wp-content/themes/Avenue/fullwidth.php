<?php
	/* Template Name: Full width */
?>
<?php get_header(); ?>

			<!-- BEGIN MAIN -->
			<div id="fullwidth">
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<div class="post-heading fullwidth">
					<h1><?php the_title(); ?></h1>
				</div>
				
				<div class="post-entry">
					<?php the_content(); ?>
				</div>
				
				<?php endwhile; endif; ?>
			
			</div>
			<!-- END MAIN -->
			
<?php get_footer(); ?>