<?php if ($_SERVER["REQUEST_URI"] == "/") { ?>
<!-- Sidebar-home -->
<div class="sidebar-home left">
	<!-- nav aside-menu -->
	<nav class="aside-menu">
		<h3 class="aside-menu-title">Как выглядит рабочий процесс:</h3>
		<ul class="menu">
			<li><span>
				<a href="/obratnjyy-zvonok.html">Оформление заявки</a>
			</span></li>
			<li><span>
				<a href="/tehnicheskoe-zadanie.html">Техническое задание</a>
			</span></li>
			<li><span>
				<a href="/predplata.html">Предоплата</a>
			</span></li>
			<li><span>
				<a href="/razrabotka-dizayna-sayta.html">Разработка дизайна</a>
			</span></li>
			<li><span>
				<a href="/zapusk-sayta.html">Запуск сайта</a>
			</span></li>
			<li><span>
				<a href="/polnaya-oplata.html">Полная оплата</a>
			</span></li>
		</ul>
	</nav>
	<!-- nav aside-menu -->
</div>
<!-- Sidebar-home -->
<?php } else { ?>
<!-- Sidebar -->
<div class="sidebar left">
	<!-- widgets  aside-article 
	<li class="widgets wrapper-aside-article">
		<h2 class="aside-main-article-title  widgets-title">
			Статьи
		</h2>
		<div class="aside-article">
			<?php if(have_posts()):
			query_posts('cat=9&showposts=5');
			while(have_posts()): the_post(); ?>
			<div class="aside-article-post">
				<div class="aside-article-img">
					<?php echo kama_thumb_img('w=60&h=60&q=100'); ?>
				</div>
				<div class="aside-article-content">
					<div class="aside-article-title">
						<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
						</a>
					</div>
					<div class="aside-article-text">
						<?php kama_excerpt('maxchar=67'); ?>
					</div>
				</div>
			</div>
			<?php endwhile; wp_reset_query(); endif; ?>
		</div>
	</li>
	end widgets  aside-article -->
	<!-- widgets  aside-page-menu
	<li class="widgets wrapper-aside-page-menu">
		<h2 class="aside-main-page-menu-title  widgets-title">
			Список/Меню
		</h2>
		<div class="aside-page-menu">
			<?php wp_nav_menu( array( 'theme_location' => 's-menu' ) ); ?>
		</div>
	</li>
	end widgets  aside-page-menu -->
	<!-- widgets  aside-news -->
	<li class="widgets wrapper-aside-news">
		<h2 class="aside-main-news-title  widgets-title">
			Новости
		</h2>
		<div class="aside-news">
			<?php
			global $post;
			$args = array( 'posts_per_page' => 5, 'category' => 2 );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); ?>
			<!-- aside-news-post -->
			<div class="aside-news-post">
				<div class="aside-news-img">
					<?php echo kama_thumb_img('w=80&h=60&q=100'); ?>
				</div>
				<div class="aside-news-content">
					<div class="aside-news-title">
						<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
						</a>
					</div>
					<div class="aside-news-date date">
						<span><?php the_time('d'); ?></span> <?php the_time('F'); ?>
					</div>
				</div>
			</div>
			<!-- aside-news-post -->
			<?php endforeach; ?>
		</div>
	</li>
	<!-- end widgets  aside-news -->
	<!-- widgets  aside-ico-menu -->
	<li class="widgets wrapper-aside-ico-menu">
		<h2 class="aside-main-ico-menu-title  widgets-title">
			Наши услуги
		</h2>
		<div class="aside-ico-menu">
			<ul class="menu">
				<li><a href="/veb-razrabotka.html">Веб-разработка</a></li>
				<li><a href="/apgreyd-sayta.html">Доп. услуги веб-разработки</a></li>
				<li><a href="/sozdanie-firmennogo-stilya-aydentika.html">Фирменный стиль</a></li>
				<li><a href="/prodvizhenie-saytov.html">Оптимизация и маркетинг</a></li>
				<li><a href="/kopirayting.html">Копирайтинг и наполнение</a></li>
				<li><a href="/fotosqemka.html">Другие услуги</a></li>
			</ul>
		</div>
	</li>
	<!-- end widgets  aside-ico-menu -->
	<!-- widgets  aside-slider -->
	<li class="widgets wrapper-aside-slider">
		<h2 class="aside-main-slider-title  widgets-title">
			Наши работы
		</h2>
		<div class="liquid-slider"  id="slider-id">
		<?php
		global $post;
		$args = array( 'posts_per_page' => 4, 'category' => 4 );
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) :	setup_postdata($post); ?>
		    <div class="aside-slider-block">
		    	<a href="<?php the_permalink(); ?>" class="aside-slider-title"><?php echo get_post_meta($post->ID, 'site-name', true); ?></a>
		    	<?php echo kama_thumb_img('w=245&h=185&q=100'); ?>
		    </div>
		<?php endforeach; ?>
		</div>
	</li>
	<!-- end widgets  aside-slider -->
</div>
<!-- Sidebar -->
<?php } ?>