<?php get_header(); ?>

			<!-- BEGIN MAIN -->
			<div id="main">
				
				<div class="block archive">
				
					<?php if (have_posts()): the_post(); ?>
					<h3>
						<?php _e('All posts by', 'Avenue'); ?> <?php echo get_the_author(); ?>
						<span class="arrows">&raquo;</span>
					</h3>
					
					<?php rewind_posts(); ?>
					
					<?php while (have_posts()) : the_post(); ?>
					
					<div id="post-<?php the_ID(); ?>" <?php post_class('block-item-big'); ?>>
						<?php
						if(has_post_format('video') || has_post_format('audio') || has_post_format('gallery')) {
							$icon = '<span class="' . get_post_format($post->ID) . '-icon"></span>';
						} else {
							$icon = '';
						}
						?>
						<?php if(has_post_thumbnail()): ?>
						<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'widget-image'); ?>
						<div class="block-image"><a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>'><img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" width='290' height='160' /></a><?php echo $icon; ?></div>
						<?php endif; ?>
						<h2><a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>'><?php the_title(); ?></a></h2>
						<span class="block-meta">
							<span class="heading-author"><?php the_author(); ?></span> 
							<span class="heading-date"><?php the_time('F j, Y'); ?></span>
							<span class="heading-comments"><?php comments_popup_link('0','1','%'); ?></span>
						</span>
						<p><?php echo string_limit_words(get_the_excerpt(), 34); ?></p><a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>' class="readmore"><?php _e('Read More', 'Avenue'); ?> <span class="block-arrows">&raquo;</span></a>
					</div>
					<?php endwhile; endif; ?>
					
					<?php kriesi_pagination($pages = '', $range = 2); ?>
				
				</div>
			
			</div>
			<!-- END MAIN -->
			
<?php get_sidebar(); ?>
			
<?php get_footer(); ?>