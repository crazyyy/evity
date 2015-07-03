				</div>
				<!-- Content -->
			</div>
			<!-- Main block -->
			<?php if ($_SERVER["REQUEST_URI"] == "/") { ?>
			<?php include (TEMPLATEPATH . "/loop-home-reviews.php"); ?>
			<?php } else { ?>
			<?php } ?>
		</div>
		<!-- Section -->
		<?php if ($_SERVER["REQUEST_URI"] == "/") { ?>
		<?php include (TEMPLATEPATH . "/loop-customers.php"); ?>
		<?php } else { ?>
		<?php } ?>
		<!-- Footer -->
		<div class="empty"></div>
		<div id="footer">
			<div class="foot-block">
				<!-- Foot phone -->
				<div class="foot-phone left">
					<div class="foot-title">Телефоны</div>
					<ul>
						<li>+7(499)677-63-00</li>
						<li> 8-800-200-51-56</li>
						<li> 8-910-422-56-50</li>
						<li> manager@evity.ru</li>
						<li>Skype: <a href="skype:evity_ru" title="Позвонить нам">evity_ru</a></li>
					</ul>
				</div>
				<!-- Foot phone -->
				<!-- Foot adress -->
				<div class="foot-adress left">
					<div class="foot-title">Адрес</div>
					<p>г. Москва, <br>Волгоградский пр-т, 47,<br> БЦ "КУБ"</p>
					<div class="map-img">
						<a href="/kontaktjy.html">
							<img src ="<?php bloginfo('template_directory'); ?>/images/map.jpg" alt="">
						</a>
					</div>
				</div>
				<!-- Foot adress -->
				<?php if(have_posts()):
				query_posts('cat=4&showposts=1');
				while(have_posts()): the_post(); ?>
				<!-- Vacancy -->
				<div class="vacancy left">
					<div class="foot-title"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></div>
					<div class="vacancy-title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
					<p>
						<?php kama_excerpt('maxchar=120'); ?>
					</p>
				</div>
				<!-- Vacancy -->
				<?php endwhile; wp_reset_query(); endif; ?>
				<!-- nav foot-menu -->
				<nav class="foot-menu right">
					<div class="foot-title">Сайт</div>
					<?php wp_nav_menu( array( 'theme_location' => 'f-menu' ) ); ?>
				</nav>
				<!-- nav foot-menu -->
				<!-- Copy and Li -->
				<div class="copy-and-li wrap">
					<div class="copy left">© ООО "АЛИНТОС", 2013-<?php echo date('Y', current_time('timestamp', 0));?></div>
					<div class="li right">
						<!--LiveInternet counter--><script type="text/javascript"><!--
						document.write("<a href='http://www.liveinternet.ru/click' "+
						"target=_blank><img src='//counter.yadro.ru/hit?t25.1;r"+
						escape(document.referrer)+((typeof(screen)=="undefined")?"":
						";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
						screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
						";"+Math.random()+
						"' alt='' title='' "+
						"border='0' width='88' height='15'><\/a>")
						//--></script><!--/LiveInternet-->
						
						<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ua/stat/?id=29471215&amp;from=informer"
target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/29471215/3_1_FFFFFCFF_F5F5DCFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:29471215,lang:'ru'});return false}catch(e){}" /></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>
<script type="text/javascript">
try {
    var yaCounter29471215 = new Ya.Metrika({
        id:29471215
    });
} catch(e) { }
</script>
<noscript><div><img src="//mc.yandex.ru/watch/29471215" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
					</div>
				</div>
				<!-- Copy and Li -->
			</div>
		</div>
		<!-- Footer -->
	</div>
	<!-- Main -->
	<!-- Scripts -->
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/rotator.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/aside-slider.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.touchSwipe.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/placeholder.js"></script>
	<!-- Scripts -->
<?php wp_footer(); // API Hook ?> 
</body> 
</html>