<!-- wrapper-portfolio -->
<div class="wrapper-portfolio">
	<h2 class="title">Ваш сайт будет уникальным!</h2>
	<div class="portfolio-description">Примеры сайтов наших клиентов вы можете просмотреть далее.</div>
	<!-- portfolio -->
	<div class="portfolio">
		<ul class="portfolio-tabs portfolio-menu wrap">
			<li>
				<a href="http://www.evity.ru/portfolio/saytjy">Все сайты</a>
			</li>
			<li>
				<a href="http://www.evity.ru/portfolio/saytjy/vizitka">Визитка</a>
			</li>
			<li>
				<a href="http://www.evity.ru/portfolio/saytjy/korporativnjyy-sayt">Корпоративный сайт</a>
			</li>
			<li>
				<a href="http://www.evity.ru/portfolio/saytjy/magazin">Магазин</a>
			</li>
		</ul>
		<ul class="portfolio-tabs-block wrap">
			<li>
				<?php query_posts($query_string.'&showposts=8'); ?>
				<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
					<!-- portfolio-post -->
					<div class="portfolio-post">
						<div class="portfolio-img">
							<?php echo kama_thumb_img('w=300&h=225&q=100'); ?>
						</div>
						<div class="portfolio-title">
							<a href="<?php the_permalink(); ?>"><span><?php echo get_post_meta($post->ID, 'site-name', true); ?></span></a>
						</div>
					</div>
					<!-- portfolio-post -->
				<?php endwhile; ?>
				<?php endif; ?>	
				<?php wp_reset_query(); ?>
			</li>
		</ul>
	</div>
	<!-- portfolio -->
	<!--pagenavi-->
	<?php kama_pagenavi(); ?>
	<!--end pagenavi-->
</div>
<!-- wrapper-portfolio -->