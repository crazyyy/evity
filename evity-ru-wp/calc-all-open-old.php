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
				Удобная форма заказа поможет вам подобрать весь необходимій функционал будующего сайта. Для
				начала выберите тип сайта (визитка, магазин и т.д.), определите какие модули вам могу 
				понадобиться, и узнайте стоимость разработки проекта.
			</p>
			<form class="calc" action="/oformlenie-zakaza.html" method="post" enctype="texr/plain">
				<h2>Веб-разработка</h2>
				<ul class="services-list">
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left cutaway">Визитка</div>
							<div class="service-info right">
								<div class="service-price">от 10 000 рублей</div>
								<label class="check" for="id1">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Визитка" id="id1" data-price="10000">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-fields service-item-dop-js">
							<h2>До 5 страниц</h2>
							<p> Список страниц: главная, "о компании", "услуги", обратная связь, новости. </p> <h2>Дополнительные модули:</h2>
							<ul class="services-list2">
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">Вопрос-ответ</div>
										<div class="service-info right">
											<div class="service-price">1000 руб.</div>
											<label class="check" for="id1_1">
												<input type="checkbox" class="checkbox checkbox-js" value="Вопрос-ответ" id="id1_1" data-price="1000">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">Фотогалерея</div>
										<div class="service-info right">
											<div class="service-price">1800 руб.</div>
											<label class="check" for="id1_2">
												<input type="checkbox" class="checkbox checkbox-js" value="Фотогалерея" id="id1_2" data-price="1800">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">Социальные кнопки</div>
										<div class="service-info right">
											<div class="service-price">700 руб.</div>
											<label class="check" for="id1_3">
												<input type="checkbox" class="checkbox checkbox-js" value="Социальные кнопки" id="id1_3" data-price="700">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">Подписка на новости</div>
										<div class="service-info right">
											<div class="service-price" data-price="1500">1500 руб.</div>
											<label class="check" for="id1_4">
												<input type="checkbox" class="checkbox checkbox-js" value="Подписка на новости" id="id1_4" data-price="1500">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">Защита от копирования</div>
										<div class="service-info right">
											<div class="service-price" data-price="600">600 руб.</div>
											<label class="check" for="id1_5">
												<input type="checkbox" class="checkbox checkbox-js" value="Защита от копирования" id="id1_5" data-price="600">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">Онлайн-консультант</div>
										<div class="service-info right">
											<div class="service-price">500 руб.</div>
											<label class="check" for="id1_6">
												<input type="checkbox" class="checkbox checkbox-js" value="Онлайн-консультант" id="id1_6" data-price="500">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">Защита сайта от злоумышленников</div>
										<div class="service-info right">
											<div class="service-price">бесплатно</div>
											<label class="check" for="id1_7">
												<input type="checkbox" class="checkbox checkbox-js" value="Защита сайта от злоумышленников" id="id1_7" data-price="0">
											</label>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left corporate">Корпоративный сайт</div>
							<div class="service-info right">
								<div class="service-price">от 25 000 рублей</div>
								<label class="check fake-check-js" for="id2">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Корпоративный сайт" id="id2"  data-price="25000">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-fields service-item-dop-js">
							<h2>До 20 функциональных страниц</h2>
							<p>
								Список страниц: главная, о компании (возможна вкладка "наша команда" с фото/описанием
								сотрудников), услуги (с подробным описанием всех услуг или товаров), фотогалерея,
								новостная лента, статейный раздел, модуль отзывов, форма заказа, прайс-листы, контакты,
								онлайн-консультант, сертификаты и т.д.
							</p>
							<h2>Дополнительные модули:</h2>
							<ul class="services-list2">
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">Защита от копирования</div>
										<div class="service-info right">
											<div class="service-price">600 руб.</div>
											<label class="check" for="id2_1">
												<input type="checkbox" class="checkbox checkbox-js" value="Защита от копирования" id="id2_1" data-price="600">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">Защита сайта от злоумышленников</div>
										<div class="service-info right">
											<div class="service-price">бесплатно</div>
											<label class="check" for="id2_2">
												<input type="checkbox" class="checkbox checkbox-js" value="Защита сайта от злоумышленников" id="id2_2" data-price="0">
											</label>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left shop">Интернет-магазин</div>
							<div class="service-info right">
								<div class="service-price">от 20 000 рублей</div>
								<label class="check fake-check-js" for="id3">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Интернет-магазин" id="id3" data-price="20000">
								</label>
							</div>
						</div>
					</li>
					<li class="all-service">
						<div class="all-service-title left">Общая сумма веб-разработки</div>
						<div class="all-service-sum right"><span class="all-service-sum-js">0</span> рублей</div>
					</li>
				</ul>
				<h2>Дополнительные услуги веб-разработки</h2>
				<ul class="services-list">
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left upgrade">Апгрейд</div>
							<div class="service-info right">
								<div class="service-price">от 14 000 рублей</div>
								<label class="check fake-check-js" for="id4">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Апгрейд" id="id4" data-price="14000">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-fields service-item-dop-js">
							<p>
								<strong>"Апгрейд"</strong> - включает в себя реструктуризацию сайта, разработанного ранее в нашей компании.<br />
								Предложение действительно только для сайтов, изготовленных нашими специалистами.
							</p>
							<ul class="services-list2">
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">ИЗ Визитки ДО корпоративного сайта</div>
										<div class="service-info right">
											<div class="service-price">14000 руб.</div>
											<label class="check" for="id4_1">
												<input type="checkbox" class="checkbox checkbox-js" value="ИЗ Визитки ДО корпоративного сайта" id="id4_1" data-price="14000">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">ИЗ корпоративного сайта ДО интернет-магазина</div>
										<div class="service-info right">
											<div class="service-price">15000</div>
											<label class="check" for="id4_2">
												<input type="checkbox" class="checkbox checkbox-js" value="ИЗ корпоративного сайта ДО интернет-магазина" id="id4_2" data-price="15000">
											</label>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</li>
					<li class="all-service">
						<div class="all-service-title left">Общая сумма дополнительных услуг</div>
						<div class="all-service-sum right"><span class="all-service-sum-js">0</span> рублей</div>
					</li>
				</ul>
				<!---->
				<h2>Фирменный стиль (айдентика)</h2>
				<ul class="services-list">
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left home-icon">Для своих</div>
							<div class="service-info right">
								<div class="service-price">от 20 000 рублей</div>
								<label class="check fake-check-js" for="id5">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Для своих" id="id5" data-price="20000">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-fields service-item-dop-js">
							<p>
								Подготовка логотипа для использования вне web-пространства, для клиентов, заказавших раработку сайта у нас
							</p>
							<ul class="list-b">
								<li>Разработка логотипа.</li>
								<li>Выбор цветовой гаммы.</li>
							</ul>
							<h2>На выходе:</h2>
							<p class="last">
								Заказчик получает логотип в векторном формате (.eps) в том виде, в котором он будет представлен на сайте без проработки его для использования в ч\б, вывороткой и однокрасочном вариантах, горизонтального и вертикального форматов.
							</p>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left base">Базовый</div>
							<div class="service-info right">
								<div class="service-price" data-price="60000">от 60 000 рублей</div>
								<label class="check fake-check-js" for="id6">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Базовый" id="id6" data-price="60000">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-js">
							<h2>Cтиль в рамках деловой документации</h2>
							<ul class="list-b">
								<li>Разработка логотипа</li>
								<li>Подбор шрифта для набора текстовой информации из базы существующих шрифтов.</li>
								<li>Выбор цветовой гаммы (основной и дополнительные цвета).</li>
								<li>Макетирование деловой документации.</li>
								<li>Разрабатываемые носители стиля: Визитка, бланк, конверт «евростандарт»</li>
							</ul>
							<h2>На выходе:</h2>
							<p class="last">
								Заказчик получает логотип в векторном формате (.eps) проработанный для использования в
								ч\б, вывороткой и однокрасочном вариантах, разных масштабов, горизонтального и
								вертикального форматов и макеты малого набора деловой документации. Заказчик не
								получает набора инструментариев достаточного для создания полноценной системы
								визуальной идентификации своей компании в пространстве.
							</p>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left stn">Стандарт</div>
							<div class="service-info right">
								<div class="service-price">от 100 000 рублей</div>
								<label class="check fake-check-js" for="id7">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Стандарт" id="id7" data-price="100000">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-js">
							<h2>Стиль в рамках деловой документации и сувенирной продукции</h2>
							<ul class="list-b">
								<li>Разработка логотипа</li>
								<li>Подбор шрифта для набора текстовой информации из базы существующих шрифтов.</li>
								<li>Выбор цветовой гаммы (основной и дополнительные цвета).</li>
								<li>Макетирование деловой документации и сувенирки</li>
								<li>Разработка дополнительных графических стилеобразующих элементов, правил их использования и развитие стиля на различных носителях</li>
								<li>Разрабатываемые носители стиля: Визитка, бланк, конверт «евростандарт», конверт А4, папка, ручка, пакет, кружка, зонтик</li>
							</ul>
							<h2>На выходе:</h2>
							<p class="last">
								Заказчик получает логотип в векторном формате (.eps) проработанный для использования в ч\б, вывороткой и однокрасочном вариантах, разных масштабов, горизонтального и вертикального форматов, макеты полного набора деловой документации и ряда сувенирной продукции, а так же достаточный набор инструментариев для создания системы визуальной идентификации своей компании в пространстве для привлечения внимания и запоминаемости у потребителей.
							</p>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left full">Полный</div>
							<div class="service-info right">
								<div class="service-price">от 200 000 рублей</div>
								<label class="check fake-check-js" for="id8">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Полный" id="id8" data-price="200000">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-js">
							<h2>Стиль в рамках деловой документации и сувенирной продукции</h2>
							<ul class="list-b">
								<li>Разработка логотипа</li>
								<li>Подбор шрифта для набора текстовой информации из базы существующих шрифтов.</li>
								<li>Выбор цветовой гаммы (основной и дополнительные цвета).</li>
								<li>Макетирование деловой документации, сувенирки, пространства и рекламных носителей.</li>
								<li>Разработка дополнительных графических стилеобразующих элементов, правил их использования и развитие стиля на различных носителях</li>
								<li>Разработка модульной сетки и правил работы с типографикой для применения в верстке рекламной продукции</li>
								<li>Разрабатываемые носители стиля: Визитка, бланк, конверт «евростандарт», конверт А4, папка, ручка, пакет, кружка, зонтик</li>
								<li>Сувенирная продукция: майка, бейсболка, зонтик, кружка, зажигалка, часы</li>
								<li>Пространство: входная группа, оформление интерьра, навигация по офису, униформа сотрудников</li>
								<li>Рекламная продукция: макеты листовок (формат А4), постеров (формат А2) и баннеров (формат 6х3 метра) (без разработки рекламного сообщения и идеи)</li>
								<li>+ проработка возможных тематических носителей стиля</li>
							</ul>
							<h2>На выходе:</h2>
							<p class="last">
								Заказчик получает логотип в векторном формате (.eps) проработанный для использования в ч\б, вывороткой и однокрасочном вариантах, разных масштабов, горизонтального и вертикального форматов, макеты полного набора деловой документации и сувенирной продукции, вариант оформления пространства, варианты оформления раздаточной и наружной рекламной продукции и полный набор инструментариев для создания системы визуальной идентификации своей компании в пространстве для привлечения внимания, возможности выделится на фоне конкурентов и запоминаемости в умах потребителей.
							</p>
						</div>
					</li>
					<li class="all-service">
						<div class="all-service-title left">Общая сумма фирменного стиля</div>
						<div class="all-service-sum right"><span class="all-service-sum-js">0</span> рублей</div>
					</li>
				</ul>
				<h2>Оптимизация, маркетинг и продвижение</h2>
				<ul class="services-list">
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left seo">Продвижение сайтов в поисковиках</div>
							<div class="service-info right">
								<div class="service-price">от 20 000 р./месяц</div>
								<label class="check fake-check-js" for="id9">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Продвижение сайтов в поисковиках" id="id9" data-price="20000">
								</label>
							</div>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left yandex">Контекстная реклама Яндекс.Директ</div>
							<div class="service-info right">
								<div class="service-price" data-price="5000">от 5 000 р./месяц</div>
								<label class="check fake-check-js" for="id10">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Контекстная реклама Яндекс.Директ" id="id10" data-price="5000">
								</label>
							</div>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left smm">SMM и SMO</div>
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
							<div class="service-title left mail-icon">Формирование и рассылка коммерческих предложений</div>
							<div class="service-info right">
								<div class="service-price"></div>
								<label class="check fake-check-js" for="id12">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Формирование и рассылка коммерческих предложений" id="id12" data-price="0">
								</label>
							</div>
						</div>
					</li>
					<li class="all-service">
						<div class="all-service-title left">Общая сумма</div>
						<div class="all-service-sum right"><span class="all-service-sum-js">0</span> рублей</div>
					</li>
				</ul>
				<!---->
				<h2>Копирайтинг и наполнение текстами</h2>
				<ul class="services-list">
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left naming">Нейминг</div>
							<div class="service-info right">
								<div class="service-price">от 30 000 рублей</div>
								<label class="check fake-check-js" for="id13">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Нейминг" id="id13" data-price="30000">
								</label>
							</div>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left editing_texts">Редакторская правка текстов</div>
							<div class="service-info right">
								<div class="service-price">от 90 рублей / 1000 зн.</div>
								<label class="check fake-check-js" for="id14">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Редакторская правка текстов" id="id14" data-price="0">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-js service-item-dop-multiplication">
							<h2>Какой объем текста вам нужен?</h2>
							<p class="last number_characters">
								Укажите количество символов (тыс.) <input type="text" name="number" class ="field num-field" value="0" data-number="90"> <strong class="num-number">х 90 рублей</strong> <span>=</span> <strong class="num-sum color_363f48"><span class="num-sum-js">0</span>рублей</strong>
							</p>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left desc_goods">Новости, статьи, описания товаров</div>
							<div class="service-info right">
								<div class="service-price">от 140 рублей / 1000 зн.</div>
								<label class="check fake-check-js" for="id15">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Новости, статьи, описания товаров" id="id15" data-price="0">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-js service-item-dop-multiplication">
							<h2>Какой объем текста вам нужен?</h2>
							<p class="last number_characters">
								Укажите количество символов (тыс.) <input type="text" name="number" class ="field num-field" value="0" data-number="140"> <strong class="num-number">х 140 рублей</strong> <span>=</span> <strong class="num-sum color_363f48"><span class="num-sum-js">0</span>рублей</strong>
							</p>
						</div>
					</li>
					<li class="all-service">
						<div class="all-service-title left">Общая стоимость контента</div>
						<div class="all-service-sum right"><span class="all-service-sum-js">0</span> рублей</div>
					</li>
				</ul>
				<!---->
				<h2>Другие услуги</h2>
				<ul class="services-list">
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left photography">Фотосъемка</div>
							<div class="service-info right">
								<div class="service-price"></div>
								<label class="check fake-check-js" for="id16">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Фотосъемка" id="id16" data-price="0">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-fields service-item-dop-js">
							<ul class="services-list2">
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">Интерьерная</div>
										<div class="service-info right">
											<div class="service-price">6000 руб.</div>
											<label class="check" for="id16_1">
												<input type="checkbox" class="checkbox checkbox-js" value="Интерьерная" id="id16_1" data-price="6000">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">Предметная (с выездом к заказчику)</div>
										<div class="service-info right">
											<div class="service-price">от 9 000 р.</div>
											<label class="check" for="id16_2">
												<input type="checkbox" class="checkbox checkbox-js" value="Предметная (с выездом к заказчику)" id="id16_2"  data-price="9000">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">Предметная (без выезда)</div>
										<div class="service-info right">
											<div class="service-price" data-price="7000">от 7 000 р.</div>
											<label class="check" for="id16_3">
												<input type="checkbox" class="checkbox checkbox-js" value="Предметная (без выезда)" id="id16_3" data-price="7000">
											</label>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left tracking_sites">Техническое сопровождение сайта</div>
							<div class="service-info right">
								<div class="service-price">3000 р./месяц</div>
								<label class="check fake-check-js" for="id17">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Техническое сопровождение сайта" id="id17" data-price="0">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-js service-item-dop-multiplication">
							<h2>Сколько месяцев?</h2>
							<p class="last number_characters">
								Укажите количество месяцев <input type="text" name="number" class ="field num-field" value="0" data-number="3000"> <strong class="num-number">х 3000 рублей</strong> <span>=</span> <strong class="num-sum color_363f48"><span class="num-sum-js">0</span>рублей</strong>
							</p>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left tracking_sites_con">Контентное сопровождение сайта</div>
							<div class="service-info right">
								<div class="service-price">200 р./1 статья</div>
								<label class="check fake-check-js" for="id19">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Контентное сопровождение сайта" id="id19" data-price="0">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-js service-item-dop-multiplication">
							<h2>Какой объем статей вам нужен?</h2>
							<p class="last number_characters">
								Укажите количество статей (шт.) <input type="text" name="number" class ="field num-field" value="0" data-number="200"> <strong class="num-number">х 200 рублей</strong> <span>=</span> <strong class="num-sum color_363f48"><span class="num-sum-js">0</span>рублей</strong>
							</p>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left ui">Юзабилити-аудит существующих сайтов</div>
							<div class="service-info right">
								<div class="service-price"></div>
								<label class="check fake-check-js" for="id18">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="Юзабилити-аудит существующих сайтов" id="id18" data-price="0">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-fields service-item-dop-js">
							<ul class="services-list2">
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">Экспресс-аудит, выявляющий грубые ошибки</div>
										<div class="service-info right">
											<div class="service-price">3 000 р./сайт</div>
											<label class="check" for="id18_1">
												<input type="checkbox" class="checkbox checkbox-js" value="Экспресс-аудит, выявляющий грубые ошибки" id="id18_1" data-price="3000">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">Подробный аудит сайта с готовыми рекомендациями</div>
										<div class="service-info right">
											<div class="service-price">от 15 000 р.</div>
											<label class="check" for="id18_2">
												<input type="checkbox" class="checkbox checkbox-js" value="Подробный аудит сайта с готовыми рекомендациями" id="id18_2" data-price="15000">
											</label>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</li>
					<li class="all-service">
						<div class="all-service-title left">Общая сумма</div>
						<div class="all-service-sum right"><span class="all-service-sum-js">0</span> рублей</div>
					</li>
				</ul> 
				<input type="hidden" name="htmlData" class="htmlData">
				<input type="hidden" name="sumData" class="sumData">
				<div class="calc-button">
					<button class="button button-sumbit-js">Оформить заказ</button>
				</div>
			</form>
			<div class="float-calc-window float-calc-window-js">
				<div class="float-calc-title">Ваш заказ:</div>
				<div class="float-calc-list-wind">
					<ul class="float-calc-list"></ul>
				</div>
				<div class="float-calc-item-sum">
					<div class="float-calc-item-name left">Всего:</div>
					<div class="float-calc-item-info right"><span class="all-sum-js">0</span> р.</div>
				</div>
				<form class="float-calc-buttons" action="">
					<button class="float-calc-button float-calc-reset left">Очистить</button>
					<button class="float-calc-button float-calc-submit right">Оформить заказ</button>
				</form>
			</div>
			<div class="float-calc-block float-calc-block-js">
				<div class="float-calc-block-bg">
					<div class="float-calc-block-rt">
						<div class="float-calc-block-title">общая сумма:</div>
						<div class="float-calc-block-sum"><span class="all-sum-js">0</span> <span>руб.</span></div>
					</div>
				</div>
			</div>
	</div>
	<!-- single -->
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); // footer.php ?>