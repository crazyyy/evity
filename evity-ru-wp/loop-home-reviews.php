<!-- Reviews -->
<div class="wrapper-reviews">
	<h2 class="title">Отзывы</h2>
	<div class="reviews">
		<ul>
			<?php if(have_posts()):
			query_posts('cat=11&showposts=10');
			while(have_posts()): the_post(); ?>
			<li>
				<div class="reviews-post">
					<div class="wrap">
						<div class="reviews-img">
						<?php if (get_post_meta($post->ID, 'photo', true)): ?>
							<img src="<?php echo get_post_meta($post->ID, 'photo', true); ?>">
						<?php else: ?>
							<img class="alignleft1" src="<?php echo kama_thumb_src('w=60&h=60&zc=1&q=100'); ?>" alt="<?php the_title(); ?>" border="0"/>
						<?php endif ?>
							
						</div>
						<div class="reviews-name">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
							<div class="reviews-organization">
								<?php echo get_post_meta($post->ID, 'organization', true); ?>
							</div>
						</div>
					</div>
					<div class="reviews-text">
						<?php kama_excerpt('maxchar=150'); ?>
					</div>
				</div>
			</li>
			<?php endwhile; wp_reset_query(); endif; ?>
		</ul>
	</div>
	<div class="reviews-more">
		<a href="/otzjyvjy">Читать все отзывы →</a>
	</div>
</div>
<!-- Reviews -->