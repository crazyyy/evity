<?php get_header(); // header.php ?>
<?php  if ((is_category('4')) || (is_category('9')) || (is_category('7')) || (is_category('8'))) { ?>
<?php include (TEMPLATEPATH . "/loop-portfolio-category.php"); ?>
<?php } else if (is_category('10')) {  ?>
<!-- wrapper-category -->
<div class="wrapper-category">
	<h2 class="title"><?php single_cat_title(); ?></h2>
	<!-- category -->
	<div class="category">
	<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
		<!-- category-post -->
		<div class="category-post">
			<div class="category-img">
				<?php echo kama_thumb_img('w=280&h=210&q=100'); ?>
			</div>
			<div class="category-content">
				<div class="category-title">
					<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
					</a>
				</div>
				<div class="category-text">
					<?php kama_excerpt('maxchar=180'); ?>
				</div>
			</div>
		</div>
		<!-- category-post -->
	<?php endwhile; ?>
	<?php endif; ?>
	</div>
	<!-- category -->
	<!--pagenavi-->
	<?php kama_pagenavi(); ?>
	<!--end pagenavi-->
</div>
<!-- wrapper-category -->
<?php } else if (is_category('11')) {  ?>
<!-- wrapper-category -->
<div class="wrapper-category">
	<h2 class="title"><?php single_cat_title(); ?></h2>
	<!-- category -->
	<div class="category">
	<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
		<!-- category-post -->
		<div class="category-post pl15 pb15">

				<div class="category-title ">
					<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
					</a>
				</div>
				<div class="category-text">
					<?php kama_excerpt('maxchar=112'); ?>
				</div>

		</div>
		<!-- category-post -->
	<?php endwhile; ?>
	<?php endif; ?>
	</div>
	<!-- category -->
	<!--pagenavi-->
	<?php kama_pagenavi(); ?>
	<!--end pagenavi-->
</div>
<!-- wrapper-category -->
<?php } else {  ?>
<!-- wrapper-category -->
<div class="wrapper-category">
	<h2 class="title"><?php single_cat_title(); ?></h2>
	<!-- category -->
	<div class="category">
	<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
		<!-- category-post -->
		<div class="category-post">
			<div class="category-img">
				<?php echo kama_thumb_img('w=280&h=210&q=100'); ?>
			</div>
			<div class="category-content">
				<div class="category-title">
					<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
					</a>
				</div>
				<div class="category-date">
					<span><?php the_time('d'); ?></span> <?php the_time('F'); ?>
				</div>
				<div class="category-text">
					<?php kama_excerpt('maxchar=112'); ?>
				</div>
			</div>
		</div>
		<!-- category-post -->
	<?php endwhile; ?>
	<?php endif; ?>
	</div>
	<!-- category -->
	<!--pagenavi-->
	<?php kama_pagenavi(); ?>
	<!--end pagenavi-->
</div>
<!-- wrapper-category -->
<?php } ?>
<?php get_footer(); // footer.php ?>