<?php get_header(); // header.php ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<!-- single -->
<div class="single">
	<h1 class="title"><?php the_title(); ?></h1>
	<div class="single-text">
		<?php the_content(); ?>
		<p class="portfolio-link">
			<a href="<?php echo get_post_meta($post->ID, 'site-link', true); ?>"><?php echo get_post_meta($post->ID, 'site-name', true); ?></a>
		</p>
	</div>
</div>
<!-- single -->
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); // footer.php ?>