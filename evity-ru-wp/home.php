<?php get_header(); // header.php ?>
<!-- About and useful -->
<div class="about-and-useful ">
	<!-- about -->
	<?php if(have_posts()):
	query_posts('page_id=173');
	while(have_posts()): the_post(); ?>
	<div class="about left">
		<h1 class="about-title title"><?php the_title(); ?></h1>
		<?php kama_excerpt('maxchar=280'); ?>
		<div class="about-more">
			<a href="<?php the_permalink(); ?>">Подробнее о компании →</a>
		</div>
	</div>
	<?php endwhile; wp_reset_query(); endif; ?>
	<!-- about -->
	<!-- useful -->
	<div class="wrapper-useful right">
		<h2 class="useful-main-title title wrap"><span class="left">Полезно знать</span> <a href="/stati" class="all robc right">читать все <span>статьи</span></a></h2>
		<div class="useful">
			<?php if(have_posts()):
			query_posts('cat=3&showposts=2');
			while(have_posts()): the_post(); ?>
			<!-- useful post -->
			<div class="useful-post wrap">
				<div class="useful-img left">
					<script type="text/javascript">document.write('<a href="<?php the_permalink(); ?>">');</script><?php echo kama_thumb_img('w=60&h=60&q=100'); ?><script type="text/javascript">document.write('</a>');</script>
				</div>
				<div class="useful-content">
					<div class="useful-title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
					<div class="useful-text">
						<?php kama_excerpt('maxchar=67'); ?>
					</div>
				</div>
			</div>
			<!-- useful post -->
			<?php endwhile; wp_reset_query(); endif; ?>
		</div>
	</div>
	<!-- useful -->
</div>
<!-- About and useful -->
<!-- wrapper-cat-news -->
<div class="wrapper-cat-news">
	<h2 class="title wrap"><span>Новости</span><a href="/novosti" class="all robc right">читать все <span>новости</span></a></h2>
	<!-- cat-news -->
	<ul class="cat-news wrap">
		<?php if(have_posts()):
		query_posts('cat=2&showposts=3');
		while(have_posts()): the_post(); ?>
		<!-- cat-news-post -->
		<li class="cat-news-post">
			<div class="cat-news-img">
				<script type="text/javascript">document.write('<a href="<?php the_permalink(); ?>">');</script><?php echo kama_thumb_img('w=180&h=135&q=100'); ?><script type="text/javascript">document.write('</a>');</script>
			</div>
			<div class="cat-news-content">
				<div class="cat-news-date">
					<?php the_time('d'); ?> <span><?php the_time('F'); ?></span>
				</div>
				<div class="cat-news-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
				<div class="cat-news-text">
					<?php kama_excerpt('maxchar=126'); ?>
				</div>
			</div>
		</li>
		<!-- cat-news-post -->
		<?php endwhile; wp_reset_query(); endif; ?>
	</ul>
	<!-- cat-news -->
</div>
<!-- wrapper-cat-news -->
<?php get_footer(); // footer.php ?>