<?php
// Template Name: Blog
get_header(); ?>

			<!-- BEGIN MAIN -->
			<div id="main">
			
					<div class="block archive">
					
						<h3>
							<?php _e('Recent Posts', 'Avenue'); ?>
							<span class="arrows">&raquo;</span>
						</h3>
						
						<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
						<?php $blog = new WP_Query('showposts=5'.'&paged='.$paged); ?>
						<?php if ($blog->have_posts()) : while ($blog->have_posts()) : $blog->the_post(); ?>
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
							<?php else: ?>
							<div class="block-image"><a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>'><img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php bloginfo('template_directory'); ?>/images/thumbnail.png&w=290&h=160" alt="<?php the_title(); ?>" width='290' height='160' /></a><?php echo $icon; ?></div>
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
						
						<?php kriesi_pagination($blog->max_num_pages, $range = 2); ?>
					</div>
			
			</div>
			<!-- END MAIN -->
			
<?php get_sidebar(); ?>
			
<?php get_footer(); ?>