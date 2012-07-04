<?php
	/* Template Name: Contact */
?>
<?php get_header(); ?>

			<!-- BEGIN MAIN -->
			<div id="main">
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<div class="post-heading page">
					<h1><?php the_title(); ?></h1>
				</div>
				
				<div class="post-entry">
					<?php the_content(); ?>
				</div>
				
				<form action='' method='post' class='postForm' id='contactForm'>
					<p class='email_sent'><?php _e('Email sent!', 'Avenue'); ?></p>
					
					<div>
						<label for='pyre_name'><?php _e('Name', 'Avenue'); ?> <span><?php _e('(required)', 'Avenue'); ?></span></label>
						<input class='text' type='text' name='pyre_name' id='pyre_name' value='' />
						<p class='error_msg'><?php _e('Please enter a name.', 'Avenue'); ?></p>
					</div>
					<div>
						<label for='pyre_email'><?php _e('Email', 'Avenue'); ?> <span><?php _e('(required)', 'Avenue'); ?></span></label>
						<input class='text' type='text' name='pyre_email' id='pyre_email' value='' />
						<p class='error_msg'><?php _e('Please enter a valid email address.', 'Avenue'); ?></p>
					</div>
					<div>
						<label for='pyre_message'><?php _e('Your Message', 'Avenue'); ?> <span><?php _e('(required)', 'Avenue'); ?></span></label>
						<textarea name='pyre_message' id='pyre_message'></textarea>
						<p class='error_msg'><?php _e('Please enter a message.', 'Avenue'); ?></p>
					</div>
					<input type='submit' name='submit' class='submit' value='<?php _e('Send', 'Avenue'); ?>' />
				</form>
				<?php endwhile; endif; ?>
			
			</div>
			<!-- END MAIN -->
			
<?php get_sidebar(); ?>
			
<?php get_footer(); ?>