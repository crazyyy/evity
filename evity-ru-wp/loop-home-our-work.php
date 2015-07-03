<?php if ($_SERVER["REQUEST_URI"] == "/") { ?>
<!-- Our work -->
<div class="our-work">
	<!-- Our work text -->
	<div class="our-work-block left">
		<h2 class="our-work-text-title">Наши работы</h2>
		<div class="our-work-text-content">
			<p>
				Мы создаем удобные,
				современные и коммерчески-
				эффективные сайты. Мы
				повышаем прибыльность
				ваших интернет-ресурсов.
			</p>
		</div>
		<div class="our-work-text-more submit-style">
			<a href="http://www.evity.ru/portfolio"><span>Портфолио</span></a>
		</div>
	</div>
	<!-- Our work text -->
	<!-- Our work tabs -->
	<div class="our-work-tabs right">
		<ul class="work-tabs wrap">
			<li>
				<a href="http://www.evity.ru/portfolio/saytjy">Все сайты</a>
			</li>
			<li>
				<a href="http://www.evity.ru/portfolio/saytjy/korporativnjyy-sayt">Корпоративный сайт</a>
			</li>
			<li>
				<a href="http://www.evity.ru/portfolio/saytjy/magazin">Магазин</a>
			</li>
			<li>
				<a href="http://www.evity.ru/portfolio/saytjy/vizitka">Визитка</a>
			</li>
		</ul>
		<ul class="work-tabs-block">
			<li>
				<div class="slider">
					<ul>		
						<?php if(have_posts()):
						query_posts('cat=5&showposts=4');
						while(have_posts()): the_post(); ?>
						<li>
							<!-- Work tabs post -->
							<div class="work-tabs-post">
								<div class="work-tabs-img">
									<?php echo kama_thumb_img('w=280&h=210&q=100'); ?>
								</div>
								<div class="work-tabs-text">
									<a href="<?php the_permalink(); ?>"><?php echo get_post_meta($post->ID, 'site-name', true); ?></a>
									<p>
										<?php kama_excerpt('maxchar=67'); ?>
									</p>
								</div>
							</div>
							<!-- Work tabs post -->
						</li>
						<?php endwhile; wp_reset_query(); endif; ?>
					</ul>
				</div>
			</li>
			<li>
				<div class="slider2">
					<ul>				
						<?php if(have_posts()):
						query_posts('cat=7&showposts=4');
						while(have_posts()): the_post(); ?>
						<li>
							<!-- Work tabs post -->
							<div class="work-tabs-post">
								<div class="work-tabs-img">
									<?php echo kama_thumb_img('w=280&h=210&q=100'); ?>
								</div>
								<div class="work-tabs-text">
									<a href="<?php the_permalink(); ?>"><?php echo get_post_meta($post->ID, 'site-name', true); ?></a>
									<p>
										<?php kama_excerpt('maxchar=67'); ?>
									</p>
								</div>
							</div>
							<!-- Work tabs post -->
						</li>
						<?php endwhile; wp_reset_query(); endif; ?>
					</ul>
				</div>
			</li>
			<li>
				<div class="slider3">
					<ul>				
						<?php if(have_posts()):
						query_posts('cat=8&showposts=4');
						while(have_posts()): the_post(); ?>
						<li>
							<!-- Work tabs post -->
							<div class="work-tabs-post">
								<div class="work-tabs-img">
									<?php echo kama_thumb_img('w=280&h=210&q=100'); ?>
								</div>
								<div class="work-tabs-text">
									<a href="<?php the_permalink(); ?>"><?php echo get_post_meta($post->ID, 'site-name', true); ?></a>
									<p>
										<?php kama_excerpt('maxchar=67'); ?>
									</p>
								</div>
							</div>
							<!-- Work tabs post -->
						</li>
						<?php endwhile; wp_reset_query(); endif; ?>
					</ul>
				</div>
			</li>
			<li>
				<div class="slider4">
					<ul>				
						<?php if(have_posts()):
						query_posts('cat=9&showposts=4');
						while(have_posts()): the_post(); ?>
						<li>
							<!-- Work tabs post -->
							<div class="work-tabs-post">
								<div class="work-tabs-img">
									<?php echo kama_thumb_img('w=280&h=210&q=100'); ?>
								</div>
								<div class="work-tabs-text">
									<a href="<?php the_permalink(); ?>"><?php echo get_post_meta($post->ID, 'site-name', true); ?></a>
									<p>
										<?php kama_excerpt('maxchar=67'); ?>
									</p>
								</div>
							</div>
							<!-- Work tabs post -->
						</li>
						<?php endwhile; wp_reset_query(); endif; ?>
					</ul>
				</div>
			</li>
		</ul>
	</div>
	<!-- Our work tabs -->
</div>
<!-- Our work -->
<?php } else { ?>
<?php } ?>
