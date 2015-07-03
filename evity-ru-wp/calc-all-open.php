<?php
/*
Template Name: calc all open
*/
?>
<?php get_header(); // header.php ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
	<!-- single -->
	<div class="single calc_page_all_open">
		<h1 class="title"><?php the_title(); ?></h1>
		<div class="calc-text">
			<p>				
			</p>
			<form class="calc" action="/zakaz-uslugi.html" method="post" enctype="texr/plain">
				<h2>Веб-разработка</h2>
				<ul class="services-list">
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left cutaway"><a href="/razrabotka-sayta-vizitki.html">Визитка</a></div>
							<div class="service-info right">
								<div class="service-price"><span style="color:#f00">10 000 рублей</span> <s><span style="font-size: 90%;">15 000 рублей</span></s></div>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-fields service-item-dop-js">
							<h2>До 5 страниц + Дополнительные модули</h2>							
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left corporate"><a href="/razrabotka-korporativnogo-sayta.html">Корпоративный сайт</a></div>
							<div class="service-info right">
								<div class="service-price"><span style="color:#f00">25 000 рублей</span> <s><span style="font-size: 90%;">40 000 рублей</span></s></div>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-fields service-item-dop-js">
							<h2>До 20 функциональных страниц + Дополнительные модули</h2>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left corporate"><a href="/razrabotka-internet-magazina.html">Интернет-магазин</a></div>
							<div class="service-info right">
								<div class="service-price"><span style="color:#f00">20 000 рублей</span> <s><span style="font-size: 90%;">33 000 рублей</span></s></div>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-fields service-item-dop-js">
							<h2>Полный функционал магазина + Дополнительные модули</h2>
						</div>
					</li>
					<li class="all-service">
					</li>
				</ul>
				
				<h2>Дополнительные услуги веб-разработки</h2>
				<ul class="services-list">
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left upgrade"><a href="/apgreyd-sayta.html">Апгрейд</a></div>
							<div class="service-info right">
								<div class="service-price"><span style="color:#f00">14 000 рублей</span> <s><span style="font-size: 90%;">20 000 рублей</span></s></div>
								<label class="check fake-check-js" for="id4">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Апгрейд" id="id4" data-price="14000">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-fields service-item-dop-js">
							<p>
								<strong>Реструктуризация сайта, разработанного ранее в нашей компании.</strong>
							</p>
						</div>
					</li>
				</ul>
				<!---->
				<h2>Фирменный стиль</h2>
				<ul class="services-list">					
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left full"><a href="/sozdanie-firmennogo-stilya.html">Айдентика</a></div>
							<div class="service-info right">
								<div class="service-price">20 000 рублей</div>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-js">
							<h2>Стиль в рамках деловой документации и сувенирной продукции</h2>
						</div>
					</li>
				</ul>
				<h2>Оптимизация, маркетинг и продвижение</h2>
				<ul class="services-list">
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left seo"><a href="/prodvizhenie-saytov.html">Продвижение сайтов в поисковиках</a></div>
							<div class="service-info right">
								<div class="service-price"><span style="color:#f00">20 000 р./месяц</span> <s><span style="font-size: 90%;">30 000 р./месяц</span></s></div>
								<label class="check fake-check-js" for="id9">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Продвижение сайтов в поисковиках" id="id9" data-price="20000">
								</label>
							</div>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left yandex"><a href="/kontekstnaya-reklama.html">Контекстная реклама Яндекс.Директ</a></div>
							<div class="service-info right">
								<div class="service-price" data-price="5000"><span style="color:#f00">5 000 р./месяц</span> <s><span style="font-size: 90%;">7 500 р./месяц</span></s></div>
								<label class="check fake-check-js" for="id10">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Контекстная реклама Яндекс.Директ" id="id10" data-price="5000">
								</label>
							</div>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left smm"><a href="/smm-i-smo.html">SMM и SMO</a></div>
							<div class="service-info right">
								<div class="service-price"></div>
								<label class="check fake-check-js" for="id11">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="SMM и SMO" id="id11" data-price="0">
								</label>
							</div>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left mail-icon"><a href="/formirovanie-i-rassjylka-kommercheskih-predlozheniy.html">Формирование и рассылка коммерческих предложений</a></div>
							<div class="service-info right">
								<div class="service-price"></div>
								<label class="check fake-check-js" for="id12">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Формирование и рассылка коммерческих предложений" id="id12" data-price="0">
								</label>
							</div>
						</div>
					</li>
				</ul>
				<!---->
				<h2>Копирайтинг и наполнение текстами</h2>
				<ul class="services-list">
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left naming"><a href="/neyming.html">Нейминг</a></div>
							<div class="service-info right">
								<div class="service-price">30 000 рублей</div>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-js service-item-dop-multiplication">
							<h2>Профессиональный подбор названия и описания компании</h2>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left editing_texts"><a href="/redaktorskaya-pravka-tekstov.html">Редакторская правка текстов</a></div>
							<div class="service-info right">
								<div class="service-price"><span style="color:#f00">90 рублей / 1000 зн.</span> <s><span style="font-size: 90%;">150 рублей / 1000 зн.</span></s></div>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-js service-item-dop-multiplication">
							<h2>Поиск и редактирование пунктуационных, грамматических, стилистических ошибок</h2>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left desc_goods"><a href="/napisanie-i-napolnenie-sayta-novostyami-statjyami-opisaniyami-tovarov.html">Новости, статьи, описания товаров</a></div>
							<div class="service-info right">
								<div class="service-price"><span style="color:#f00">140 рублей / 1000 зн.</span> <s><span style="font-size: 90%;">200 рублей / 1000 зн.</span></s></div>

							</div>
						</div>
						<div class="service-item-dop service-item-dop-js service-item-dop-multiplication">
							<h2>Поиск и написание тематических и актуальных текстов</h2>
						</div>
					</li>
				</ul>
				<!---->
				<h2>Другие услуги</h2>
				<ul class="services-list">
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left photography"><a href="/fotosqemka.html">Фотосъемка</a></div>
							<div class="service-info right">
								<div class="service-price">6 000 р.</div>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-fields service-item-dop-js">
						<h2>Интерьерная, предметная, предметная</h2>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left tracking_sites"><a href="/soprovozhdenie-saytov.html">Техническое сопровождение сайта</a></div>
							<div class="service-info right">
								<div class="service-price">3000 р./месяц</div>								
							</div>
						</div>
						<div class="service-item-dop service-item-dop-js service-item-dop-multiplication">
							<h2>Оказание своевременной технической поддержки в необходимых объемах.</h2>
						</div>
					</li>					
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left ui"><a href="/yuzabiliti-audit.html">Юзабилити-аудит существующих сайтов</a></div>
							<div class="service-info right">
								<div class="service-price"><span style="color:#f00">3 000 р./сайт</span> <s><span style="font-size: 90%;">4 500 р./сайт</span></s></div>
								
							</div>
						</div>
						<div class="service-item-dop service-item-dop-fields service-item-dop-js">
						<h2>Экспресс-аудит, выявление грубейших ошибок.</h2>
						</div>
					</li>
				</ul> 
			</form>
			
	</div>
	<!-- single -->
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); // footer.php ?>