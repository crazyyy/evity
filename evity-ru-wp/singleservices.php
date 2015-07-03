<?php get_header(); // header.php ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<!-- single -->
<div class="single">
	<h1 class="title"><?php the_title(); ?></h1>
	<div class="single-text">
		<?php the_content(); ?>
		<h2>Что входит в пакет услуг?</h2>
		<!-- package-of-services -->
		<div class="package-of-services wrap">
			<!-- package-of-services-post -->
			<div class="package-of-services-post">
				<div class="package-of-services-img">
					<img src ="<?php bloginfo('template_directory'); ?>/images/img-151.png" alt="">
				</div>
				<div class="package-of-services-content">
					<div class="package-of-services-title">
						<?php echo get_post_meta($post->ID, 'first-package-title', true); ?>
					</div>
					<div class="package-of-services-text">
						<?php echo get_post_meta($post->ID, 'first-package-text', true); ?>
					</div>
				</div>
			</div>
			<!-- package-of-services-post -->
			<!-- package-of-services-post -->
			<div class="package-of-services-post">
				<div class="package-of-services-img">
					<img src ="<?php bloginfo('template_directory'); ?>/images/img-152.png" alt="">
				</div>
				<div class="package-of-services-content">
					<div class="package-of-services-title">
						<?php echo get_post_meta($post->ID, 'second-package-title', true); ?>
					</div>
					<div class="package-of-services-text">
						<?php echo get_post_meta($post->ID, 'second-package-text', true); ?>
					</div>
				</div>
			</div>
			<!-- package-of-services-post -->
			<!-- package-of-services-post -->
			<div class="package-of-services-post">
				<div class="package-of-services-img">
					<img src ="<?php bloginfo('template_directory'); ?>/images/img-153.png" alt="">
				</div>
				<div class="package-of-services-content">
					<div class="package-of-services-title">
						<?php echo get_post_meta($post->ID, 'third-package-title', true); ?>
					</div>
					<div class="package-of-services-text">
						<?php echo get_post_meta($post->ID, 'third-package-text', true); ?>
					</div>
				</div>
			</div>
			<!-- package-of-services-post -->
		</div>
		<!-- package-of-services -->
		<h2>Сколько это стоит?</h2>
		<!-- cost -->
		<div class="cost wrap">
			<!-- cost-post -->
			<div class="cost-post left">
				<div class="cost-post-price robbc">
					<span><?php echo get_post_meta($post->ID, 'package-price', true); ?></span>
				</div>
			</div>
			<!-- cost-post -->
			<!-- cost-post -->
			<div class="cost-post left">
				<?php echo get_post_meta($post->ID, 'first-package-list', true); ?>
			</div>
			<!-- cost-post -->
			<!-- cost-post -->
			<div class="cost-post left">
				<?php echo get_post_meta($post->ID, 'second-package-list', true); ?>
			</div>
			<!-- cost-post -->
		</div>
		<!-- cost -->
	</div>
</div>
<!-- single -->
<?php endwhile; ?>
<?php endif; ?>
<!-- buy_serv callback_serv blocks -->
<div class="buy_serv_callback_serv_blocks">
	<!-- buy_serv block -->
	<div class="wrapper_buy_serv left">
		<a href="/zakaz-uslugi.html"></a>
	</div>
	<!-- End buy_serv block -->
	<!-- callback_serv block -->
	<div class="wrapper_callback_serv right">
		<a href="http://www.evity.ru/obratnjyy-zvonok.html"></a>
	</div>
	<!-- End callback_serv block -->
</div>
<!-- End buy_serv callback_serv blocks -->
<!-- wrapper-portfolio
<div class="wrapper-portfolio services-portfolio line">
	<h2 class="title">Ваш сайт будет уникальным!</h2>
	<div class="portfolio">
		<?php if(have_posts()):
		query_posts('cat=7,8,9&showposts=4');
		while(have_posts()): the_post(); ?>
		<div class="portfolio-post">
			<div class="portfolio-img">
				<?php echo kama_thumb_img('w=280&h=210&q=100'); ?>
			</div>
			<div class="portfolio-title">
				<a href="<?php echo get_post_meta($post->ID, 'site-link', true); ?>"><span><?php echo get_post_meta($post->ID, 'site-name', true); ?></span></a>
			</div>
		</div>
		<?php endwhile; wp_reset_query(); endif; ?>
	</div>
</div>
wrapper-portfolio -->
<!-- wrapper-similar -->
<div class="wrapper-similar">
	<h2 class="title">Другие услуги</h2>
	<?php
	$li = 3; // сколько ссылок показывать в списке
	$postID = $post->ID;
	$postDate1 = get_the_time('YmdHis','','',false);
	$cat = get_the_category(); $cat = $cat[0]; $cat = $cat->cat_ID;
	$catQuery = new WP_Query('showposts=-1&cat='.$cat);
	$i = 0;
	if ($catQuery->have_posts() && $catQuery->post_count > 1) :
	?>
	<!-- similar -->
	<ul class="similar wrap">
	<?php
	 while ($catQuery->have_posts()) : $catQuery->the_post();
	 $postDate2 = get_the_time('YmdHis','','',false);
	 if ($postDate2 < $postDate1 && $post->ID != $postID) {
	 $i++;
	 if ($i <= $li) {
	?>
		<!-- similar-post -->
		<li class="similar-post">
			<a href="<?php the_permalink(); ?>">
				<span class="similar-img">
					<?php echo kama_thumb_img('w=180&h=135&q=100'); ?>
				</span>
				<span class="similar-content">
					<span class="similar-title mbn">
						<?php the_title(); ?>
					</span>
					<span class="similar-content-show"></span>
				</span>
			</a>
		</li>
		<!-- similar-post -->
		<?php
		 }
		 }
		 endwhile;
		?>
		<?php
		 $posts = $li - $i;
		 $cat_count = get_category($cat)->category_count;
		?>
		<?php
		 if (($cat_count - 1) > $i) {
		 if ($posts > 0) {
		 $temp_query = $wp_query;
		 if (($cat_count - 1) < $li) $posts = $cat_count - 1 - $i;
		 query_posts('showposts='.$posts.'&cat='.$cat);
		 if (have_posts()) : while (have_posts()) : the_post();
		?>
		<!-- similar-post -->
		<li class="similar-post">
			<a href="<?php the_permalink(); ?>">
				<span class="similar-img">
					<?php echo kama_thumb_img('w=180&h=135&q=100'); ?>
				</span>
				<span class="similar-content">
					<span class="similar-title mbn">
						<?php the_title(); ?>
					</span>
					<span class="similar-content-show"></span>
				</span>
			</a>
		</li>
		<!-- similar-post -->
		<?php
		 endwhile; endif;
		 $wp_query = $temp_query;
		 }
		 }
		?>
	</ul>
	<!-- similar -->
	<?php endif; wp_reset_query(); ?>
</div>
<!-- wrapper-similar -->
<?php get_footer(); // footer.php ?>