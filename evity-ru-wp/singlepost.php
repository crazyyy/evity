<?php get_header(); // header.php ?>
					<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
					<!-- single -->
					<div class="single line">
						<h1 class="title wrap"><span class="single-title"><?php the_title(); ?></span> <span class="single-date"><span class="day"><?php the_time('d'); ?></span> <?php the_time('F'); ?></span></h1>
						<div class="single-text">
							<?php the_content(); ?>
						</div>
					</div>
					<!-- single -->
					<?php endwhile; ?>
					<?php endif; ?>
					<?php include (TEMPLATEPATH . "/loop-similar.php"); ?>
<?php get_footer(); // footer.php ?>