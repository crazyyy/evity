<!-- wrapper-similar -->
<div class="wrapper-similar">
	<?php
	   $category = get_the_category();
	   $catcat = $category[0]->cat_ID;
	   if ($catcat==2) {echo '<h2 class="title">Другие новости</h2>';}
	   elseif ($catcat==3) {echo '<h2 class="title">Другие статьи</h2>';}
	   elseif ($catcat==11) {echo '<h2 class="title">Другие отзывы</h2>';}
	   else {echo '<h2 class="title">Другие материалы</h2>';}
	 ?>
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
				<?php if (in_category(11)): ?>
				<?php else: ?>
					<span class="similar-img">
						<?php echo kama_thumb_img('w=180&h=135&q=100'); ?>
					</span>
				<?php endif ?>
				<span class="similar-content">
					<span class="similar-title">
						<?php the_title(); ?>
					</span>
					<span class="similar-date date">
						<span><?php the_time('d'); ?></span> <?php the_time('F'); ?>
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
				<?php if (in_category(11)): ?>
				<?php else: ?>
					<span class="similar-img">
						<?php echo kama_thumb_img('w=180&h=135&q=100'); ?>
					</span>
				<?php endif ?>
				<span class="similar-content">
					<span class="similar-title">
						<?php the_title(); ?>
					</span>
					<span class="similar-date date">
						<span><?php the_time('d'); ?></span> <?php the_time('F'); ?>
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