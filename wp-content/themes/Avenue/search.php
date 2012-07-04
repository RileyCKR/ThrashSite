<?php get_header(); ?>

			<!-- BEGIN MAIN -->
			<div id="main">
				
				<div class="block archive">
				
					<h3>
						<?php _e('Search results for', 'Avenue'); ?> "<?php echo get_search_query(); ?>" 
						<span class="arrows">&raquo;</span>
					</h3>
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
						<span class="block-meta"><?php the_time('F j, Y'); ?>, <?php comments_popup_link(); ?></span>
						<p><?php echo string_limit_words(get_the_excerpt(), 54); ?> <a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>'><span class="block-arrows">&raquo;</span></a></p>
					</div>
					<?php endwhile; endif; ?>
					
					<?php kriesi_pagination($pages = '', $range = 2); ?>
				
				</div>
			
			</div>
			<!-- END MAIN -->
			
<?php get_sidebar(); ?>
			
<?php get_footer(); ?>