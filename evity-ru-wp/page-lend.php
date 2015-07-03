<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title><?php wp_title();?></title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,700italic,400,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400italic,100,700italic,700,100italic,400&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo('template_directory'); ?>/lend/css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<?php wp_head();?>
	 <script src="<?php bloginfo('template_directory'); ?>/lend/js/jquery.jcarousel.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/lend/js/jquery.backstretch.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/lend/js/script.js"></script>

</head>
<body>
	<div id="wrapper">
    	<header>
        	<div class="top_line">
                <div class="center">
                    <ul class="header_phones">
                        <li>8 800 200-51-56</li>
                        <li>+7 499 677-63-00</li>
                        <li>Skype: evity_ru</li>
                    </ul>
                    <a href="#" id="order-call" class="yellow-btn2 callback-btn"><span>Заказать звонок</span></a>
                </div>
            </div>
            <div id="nav">
                <div class="nav_border">
                    <div class="center">
                        <ul class="main_menu">
                                     <!--                            <li><a href="/portfolio">Портфолио</a></li>
                            <li><a href="/novosti">БЛОГ</a></li>
                            <li><a href="/uslugi.html">Услуги</a></li>
                            <li><a href="/zakaz-uslugi.html">Заказать сайт</a></li>
                            <li><a href="/kontaktjy.html">Контакты</a></li>
				-->
                        </ul>
                        <div id="nav-mobile">
                        	<span class="mobilebutton"></span>
                            <div class="navmobile-block">
                                <ul class="navmobile-menu">
                                    <!-- <li><a href="/portfolio">Портфолио</a></li>
                                    <li><a href="/novosti">БЛОГ</a></li>
                                    <li><a href="/uslugi.html">Услуги</a></li>
                                    <li><a href="/zakaz-uslugi.html">Заказать сайт</a></li>
                                    <li><a href="/kontaktjy.html">Контакты</a></li>
				-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="center">
            	<div class="head_block">
                	<a href="#" id="logo"><img src="<?php bloginfo('template_directory'); ?>/lend/images/logo.png" width="188" height="50" alt=""></a>
                    <div class="head_info">
                    	<h2><span>Включаем бизнес</span></h2>
                       <p>Веб-агентство эффективных решений</p>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
				jQuery(document).ready(function($){
					$('header').backstretch("<?php bloginfo('template_directory'); ?>/lend/images/header.jpg");
					jQuery(window).resize(function(){
						$('header').backstretch("<?php bloginfo('template_directory'); ?>/lend/images/header.jpg");
					});
				})
			</script>
        </header>
        <section id="order-btn_section" class="section">
        	<div class="center">
            	<a href="#" class="yellow-btn order-top-btn" id="ordernow"><span>Закажите сейчас!</span></a>
            </div>
        </section>
        <section id="profit_section" class="section">
        	<div class="profit_top"></div>
            <div class="center">
            	<div class="profit_inner">
                    <h2 class="collapse_title"><span>Увеличение <br>вашей прибыли</span></h2>
                    <div class="collapse_box">
                        <div class="profit_img"><img src="<?php bloginfo('template_directory'); ?>/lend/images/profit.jpg" width="331" height="162" alt=""></div>
                        <ul class="profit_list">
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/media/profit-1.jpg" width="140" height="110" alt=""></div>
                                <p>Продающие сайты</p>
                            </li>
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/media/profit-2.jpg" width="140" height="110" alt=""></div>
                                <p>Контент-маркетинг</p>
                            </li>
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/media/profit-3.jpg" width="140" height="110" alt=""></div>
                                <p>Лидогенерация</p>
                            </li>
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/media/profit-4.jpg" width="140" height="110" alt=""></div>
                                <p>Поисковое продвижение</p>
                            </li>
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/media/profit-5.jpg" width="140" height="110" alt=""></div>
                                <p>Контекстная реклама</p>
                            </li>
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/media/profit-6.jpg" width="140" height="110" alt=""></div>
                                <p>Комплексный маркетинг</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- profit_section -->
        <section id="benefits_section" class="section">
        	<div class="profit_bottom"></div>
            <div class="center">
           	  	<div class="benefits_inner">
                    <h2 class="collapse_title"><span>Наши преимущества</span></h2>
                    <div class="collapse_box">
                        <ul class="benefits_list">
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/benefits_icon.png" width="85" height="113" alt=""></div>
                                <h5>Работа на результат</h5>
                                <p>Мы заинтересованы в длительном сотрудничестве и понимаем, что мы зарабатываем, только если зарабатываете вы</p>
                            </li>
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/benefits_icon.png" width="85" height="113" alt=""></div>
                                <h5>Комплексный подход</h5>
                                <p>Мы предлагаем широкий спектр услуг и решений для любого бизнеса</p>
                            </li>
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/benefits_icon.png" width="85" height="113" alt=""></div>
                                <h5>Кратчайшие сроки</h5>
                                <p>Мы не затягиваем сроки и не откладываем вашу прибыль «на потом»</p>
                            </li>
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/benefits_icon.png" width="85" height="113" alt=""></div>
                                <h5>Разумные цены</h5>
                                <p>Мы адекватно оцениваем рынок и предлагаем оптимальное соотношение цены и качества</p>
                            </li>
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/benefits_icon.png" width="85" height="113" alt=""></div>
                                <h5>Современные технологии</h5>
                                <p>Мы выбираем только проверенные и трендовые решения для своих клиентов</p>
                            </li>
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/benefits_icon.png" width="85" height="113" alt=""></div>
                                <h5>Индивидуальное обслуживание</h5>
                                <p>Мы знаем, что нет одного «рецепта успеха» и анализируем каждый кейс для достижения наилучшего </p>
                            </li>
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/benefits_icon.png" width="85" height="113" alt=""></div>
                                <h5>Гарантии <br>результата</h5>
                                <p>Мы даем гарантии на все время работы созданного нами сайта</p>
                            </li>
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/benefits_icon.png" width="85" height="113" alt=""></div>
                                <h5>Поэтапная <br>оплата</h5>
                                <p>Мы берем оплату по мере реализации каждого из запланированных частей </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
				jQuery(document).ready(function($){
					$('#benefits_section').backstretch("<?php bloginfo('template_directory'); ?>/lend/images/benefits.jpg");
					jQuery(window).resize(function(){
						$('#benefits_section').backstretch("<?php bloginfo('template_directory'); ?>/lend/images/benefits.jpg");
					});
				})
			</script>
        </section><!-- benefits_section -->

        <div class="business_verh"></div>
        <section id="business_section" class="section">
        <!-- <div class="business_osnova"></div> -->

              
        	<div class="center">
            	<h2><span>Сайты для бизнеса</span></h2>
                <div class="business_box clearfix">
                	<div class="business_right"><img src="<?php bloginfo('template_directory'); ?>/lend/images/business_img.png" width="426" height="397" alt=""></div>
                    <div class="business_left">
                    	<h3>Сайт может и должен приносить вам прибыль</h3>
<p>Сайт, который создан для бизнеса, работает на своих владельцев круглосуточно и без выходных, превращая посетителей в клиентов. Удобный, красивый и технически совершенный сайт отличает успешный бизнес от неконкурентоспособного.</p>
<p>Чем качественнее разработан и реализован сайт – тем меньше требуется дальнейших вложений в рекламу и в продвижение. Тем больше и быстрее он начнет зарабатывать. Это правило работает в 100% случаев, исключений не бывает.</p>
<p>Ваш сайт может и должен работать на вас 24/7, а не быть набором букв на визитках сотрудников компании.</p>
<p>Мы знаем, как этого добиться. И наши клиенты теперь тоже это знают. Звоните!</p>

                    </div>
                </div>
            </div>
        </section><!-- business_section -->
        <div class="business_niz"></div>  

        <section id="specialize_section" class="section">
        	<div class="center">
            	<h2 class="collapse_title"><span>Секреты продаж</span></h2>
                <div class="collapse_box">
                    <div class="specialize_box clearfix">
                        <div class="specialize_top">
                            <h3>Мы специализируемся на достижении конкретного практического результата – максимума продаж</h3>
                        </div>
                        <div class="specialize_table_box">
                            <table class="specialize_table">
                                <tr>
                                    <th class="a-right">&nbsp;</th>
                                    <th class="red">Продающий сайт</th>
                                    <th>Типовой сайт</th>
                                </tr>
                                <tr>
                                    <td class="a-right">Затраты на рекламу</td>
                                    <td class="red">10000 руб.</td>
                                    <td>10000 руб.</td>
                                </tr>
                                <tr>
                                    <td class="a-right">Получено клиентов</td>
                                    <td class="red">10</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td class="a-right">Заработано</td>
                                    <td class="red">15000 руб.</td>
                                    <td>9000 руб.</td>
                                </tr>
                                <tr>
                                    <td class="a-right">Результат</td>
                                    <td class="red">Долгосрочная прибыль. Стабильное сотрудничество. Возможности для расширения.</td>
                                    <td>Сайт «кладётся на полку». Сотрудничество останавливается.</td>
                                </tr>
                            </table>
                            <p class="table_note">Сравните типовой сайт и сайт клиента «Эвити»</p>
                        </div>
                        <div class="specialize_text">
                            <p>Сайт, который приносит реальный доход – это всегда больше, чем просто «красивая картинка». Именно поэтому, помимо отличного дизайна, требуется экспертная проработка каждой детали для получения идеальной машины продаж. Да, такой подход отличается от типовых шаблонных проектов по себестоимости. Но главное - он кардинально отличается от них по эффективности!</p>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
				jQuery(document).ready(function($){
					$('#specialize_section').backstretch("<?php bloginfo('template_directory'); ?>/lend/images/specialize.jpg");
					jQuery(window).resize(function(){
						$('#specialize_section').backstretch("<?php bloginfo('template_directory'); ?>/lend/images/specialize.jpg");
					});
				})
			</script>
        </section><!-- specialize_section -->
        
        <div class="sites_verh"></div>
        <section id="sites_section" class="section">
        
            <div class="center">
            	<h2><span>Выберите себе сайт</span></h2>
                <div class="sites_text">

                </div>
                <div class="sites_list clearfix">
				
                	<div class="item">
                    	<div class="sites_box" style="height: 100%">
                        	<div class="box_title"><span class="cell">Лендинг</span></div>
                          	<div class="box_entry">
                            	<div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/media/sites-1.png" width="130" height="130" alt=""></div>
                                <p>Продающая «страница захвата» - концентрирует внимание посетителя на конкретном товаре или услуге и побуждает к незамедлительной покупке. Самый высокорентабельный способ привлечения клиентов с помощью контекстной рекламы.</p>
                                <ul class="icon-list">
                                	<li>Низкая стоимость!</li>
                                    <li>Максимальная конверсия!</li>
                                    <li>Разработка от 3 дней!</li>
                                    <li>Яндекс.Директ в подарок!</li>
                                </ul>
                                <div class="price_box">от 19 999 руб.</div>
                                <!-- <a href="#" class="more-btn">Подробнее</a> -->
                          	</div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="sites_box">
                        	<div class="box_title"><span class="cell">Корпоративный<br>сайт</span></div>
                            <div class="box_entry">
                            	<div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/media/sites-2.png" width="130" height="130" alt=""></div>
                                <p>Лицо компании. Наиболее эффективно представляет бизнес в онлайн-среде. Позволяет интенсифицировать взаимодействие с существующими клиентами и партнёрами, а также найти новых с помощью методов комплексного маркетинга.</p>
                                <ul class="icon-list">
                                <li>Имиджевый продукт!</li>
                                    <li>Интерактивные продажи!</li>
                                    <li>Получение обратной связи!</li>
                                    <li>Максимальный SEO-эффект!</li>

                                </ul>
                                <div class="price_box">от 25 000 руб.</div>
                                <!-- <a href="#" class="more-btn">Подробнее</a> -->
                          	</div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="sites_box">
                        	<div class="box_title"><span class="cell">Интернет-магазин</span></div>
                            <div class="box_entry">
                            	<div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/media/sites-3.png" width="130" height="130" alt=""></div>
                                <p>Специализированное решение для реализации широкого спектра товаров. Сочетает в себе множество методик и технических разработок, увеличивающих средний чек и количество заказов, а также автоматизирующих бизнес-процессы.</p>
                                <ul class="icon-list">
                                <li>Upsale-технологии!</li>
                                    <li>Интеграция с 1С!</li>
                                    <li>SMS уведомления!</li>
                                    <li>Онлайн-оплата!</li>
                                </ul>
                                <div class="price_box">от 24 999руб.</div>
                                <!-- <a href="#" class="more-btn">Подробнее</a> -->
                          	</div>
                        </div>
                    </div>
                </div>
            </div>
           
        </section><!-- sites_section -->
        <div class="sites_niz"></div>

        <section id="marketing_section" class="section">
        	<div class="center">
            	<h2><span>Комплексный маркетинг</span></h2>
                <div class="marketing_text">
                	                	<p>Максимально рентабельные способы привлечения клиентов всегда индивидуальны - общего правила здесь нет. Чтобы добиться оптимального результата именно для вас – мы начинаем с анализа реалий вашего бизнеса. Это полностью оправдывает наш подход – мы зарабатываем, только если наши клиенты зарабатывают. Поэтому мы заинтересованы только в реальном практическом эффекте в максимально сжатые сроки.</p><p>Мы предлагаем только те методы и решения, которые повысят именно ваши продажи и будут работать именно на ваш бренд.
</p>
                </div>
                <div class="marketing_list clearfix">
                	<div class="item">
                    	<div class="marketing_box">
                        	<div class="box_title"><span class="cell">Контекстная реклама</span></div>
                          	<div class="box_entry">
                            	<div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/media/marketing-1.png" height="106" alt=""></div>
                                <p>Классическое и высокоэффективное решение! Показываем ваши объявления в поисковых системах только потенциальным клиентам, интересующимся непосредственно вашими товарами и услугами.</p>
                                <ul class="icon-list">
                                	<li>Быстрый старт!</li>
                                    <li>Новые клиенты за 1 день!</li>
                                    <li>Минимальные риски!</li>
                                    <li>Оплата за целевых посетителей!</li>
                                </ul>
                                <div class="price_box">от 9 999 руб.</div>
                                <!-- <a href="#" class="more-btn">Подробнее</a> -->
                          	</div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="marketing_box">
                        	<div class="box_title"><span class="cell">Комплексное <br>поисковое продвижение</span></div>
                            <div class="box_entry">
                            	<div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/media/marketing-2.png" height="106" alt=""></div>
                                <p>Высокие позиции в поисковых системах - источник очень качественных клиентов с повышенным уровнем доверия. Мы комлпексно развиваем ваш сайт по многим параметрам и обеспечиваем стабильные результаты на долгий срок.</p>
                                <ul class="icon-list">
                                	<li>Высокая рентабельность!</li>
                                    <li>Имиджевый эффект!</li>
                                    <li>Низкая стоимость клиента!</li>
                                    <li>Синергия с другими методами!</li>
                                </ul>
                                <div class="price_box">от 14 999 руб.</div>
                                <!-- <a href="#" class="more-btn">Подробнее</a> -->
                          	</div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="marketing_box">
                        	<div class="box_title"><span class="cell">Контент-маркетинг</span></div>
                            <div class="box_entry">
                            	<div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/media/marketing-3.png" height="106" alt=""></div>
                                <p>Инновационная методика! Идеальное сочетание поискового и непоискового маркетинга. Мы создаём и публикуем на вашем сайте качественный, полезный контент экспертного уровня, интересный вашей целевой аудитории.</p>
                                <ul class="icon-list">
                                	<li>Долговременный эффект!</li>
                                    <li>Рост доверия клиентов!</li>
                                    <li>Максимум отдачи от SEO!</li>
                                    <li>Расширение аудитории!</li>
                                </ul>
                                <div class="price_box">от 4 999 руб.</div>
                                <!-- <a href="#" class="more-btn">Подробнее</a> -->
                          	</div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="marketing_box">
                        	<div class="box_title"><span class="cell">Лидогенерация</span></div>
                            <div class="box_entry">
                            	<div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/media/marketing-4.png" height="106" alt=""></div>
                                <p>Вы не платите за рекламу. Вы платите только фиксированный тариф за каждого реально обратившегося клиента. Мы полностью берём на себя всю сферу маркетинга и привлекаем клиентов всеми доступными способами.</p>
                                <ul class="icon-list">
                                <li>Полное отсутствие рисков!</li>
                                    <li>Максимум клиентов!</li>
                                    <li>Масштабируемые бюджет!</li>
                                    <li>Простая аналитика!</li>
                                </ul>
                                <div class="price_box">от 0 руб.</div>
                                <!-- <a href="#" class="more-btn">Подробнее</a> -->
                          	</div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
				jQuery(document).ready(function($){
					$('#marketing_section').backstretch("<?php bloginfo('template_directory'); ?>/lend/images/marketing.jpg");
					jQuery(window).resize(function(){
						$('#marketing_section').backstretch("<?php bloginfo('template_directory'); ?>/lend/images/marketing.jpg");
					});
				})
			</script>
        </section><!-- marketing_section -->
        <div class="portfolio_verh"></div>
        <section id="portfolio_section" class="section">
        	<div class="center">
            	<h2 class="collapse_title"><span>Портфолио</span></h2>
                <div class="collapse_box">
                    <div class="portfolio_carousel">
                        <div class="jcarousel">
                            <ul class="portfolio_list">
                                <li>
                                    <div class="portfolio_item"><a href="<?php bloginfo('template_directory'); ?>/lend/slider/1.jpg" class="lbp_primary" rel="lightbox[secondary-demo]" title="<a href='http://kruazh.com/' target='_blank'>Круаж - ресторан русской кухни на Пречистенке</a>"><img src="<?php bloginfo('template_directory'); ?>/lend/slider/1-thumb.jpg"></a></div>

                                    <div class="portfolio_item"><a href="<?php bloginfo('template_directory'); ?>/lend/slider/7.jpg" class="lbp_primary" rel="lightbox[secondary-demo]" title=""><img src="<?php bloginfo('template_directory'); ?>/lend/slider/7-thumb.jpg"></a></div>

                                    <div class="portfolio_item"><a href="<?php bloginfo('template_directory'); ?>/lend/slider/9.jpg" class="lbp_primary" rel="lightbox[secondary-demo]" title=""><img src="<?php bloginfo('template_directory'); ?>/lend/slider/9-thumb.jpg"></a></div>

									<div class="portfolio_item"><a href="<?php bloginfo('template_directory'); ?>/lend/slider/3.jpg" class="lbp_primary" rel="lightbox[secondary-demo]" title="<a href='http://varvara-help.ru/' target='_blank'>Варвара хелп - проведение банкетов в ресторане</a> "><img src="<?php bloginfo('template_directory'); ?>/lend/slider/3-thumb.jpg"></a></div>
                                </li>

                                <li>
                                    <div class="portfolio_item"><a href="<?php bloginfo('template_directory'); ?>/lend/slider/6.jpg" class="lbp_primary" rel="lightbox[secondary-demo]" title="<a href='http://arbolit.net/' target='_blank'>АРБОЛИТ (деревобетон) - уникальный легкий бетон</a>"><img src="<?php bloginfo('template_directory'); ?>/lend/slider/6-thumb.jpg"></a></div>

                                    <div class="portfolio_item"><a href="<?php bloginfo('template_directory'); ?>/lend/slider/2.jpg" class="lbp_primary" rel="lightbox[secondary-demo]" title="<a href='http://metr-x.ru/' target='_blank'>МЕТРИКС - риэлторские услуги</a>"><img src="<?php bloginfo('template_directory'); ?>/lend/slider/2-thumb.jpg"></a></div>

                                    <div class="portfolio_item"><a href="<?php bloginfo('template_directory'); ?>/lend/slider/4.jpg" class="lbp_primary" rel="lightbox[secondary-demo]" title="<a href='http://ivankokorin.ru/' target='_blank'>Театр сказок Ивана Кокорина</a>"><img src="<?php bloginfo('template_directory'); ?>/lend/slider/4-thumb.jpg"></a></div>

                                    <div class="portfolio_item"><a href="<?php bloginfo('template_directory'); ?>/lend/slider/8.jpg" class="lbp_primary" rel="lightbox[secondary-demo]" title=""><img src="<?php bloginfo('template_directory'); ?>/lend/slider/8-thumb.jpg"></a></div>
                                </li>
                                <li>
                                    <div class="portfolio_item"><a href="<?php bloginfo('template_directory'); ?>/lend/slider/5.jpg" class="lbp_primary" rel="lightbox[secondary-demo]" title="<a href='http://foodtehnic.ru/' target='_blank'>FoodTehnic - оборудование для ресторанов</a>"><img src="<?php bloginfo('template_directory'); ?>/lend/slider/5-thumb.jpg"></a></div>

                                    <div class="portfolio_item"><a href="<?php bloginfo('template_directory'); ?>/lend/slider/10.jpg" class="lbp_primary" rel="lightbox[secondary-demo]" title="<a href='http://www.liftreklama.com/' target='_blank'>Агентство 'Лифтреклама' — Реклама в лифтах </a>"><img src="<?php bloginfo('template_directory'); ?>/lend/slider/10-thumb.jpg"></a></div>

                                    <div class="portfolio_item"><a href="<?php bloginfo('template_directory'); ?>/lend/slider/11.jpg" class="lbp_primary" rel="lightbox[secondary-demo]" title="<a href='http://malider.ru/' target='_blank'>Интернет-магазин игрушек Челябинск</a>"><img src="<?php bloginfo('template_directory'); ?>/lend/slider/11-thumb.jpg"></a></div>

                                    <div class="portfolio_item"><a href="<?php bloginfo('template_directory'); ?>/lend/slider/12.jpg" class="lbp_primary" rel="lightbox[secondary-demo]" title="<a href='http://brutalgym.ru/' target='_blank'>BrutalGym - Сеть спортивных клубов</a>"><img src="<?php bloginfo('template_directory'); ?>/lend/slider/12-thumb.jpg"></a></div>
                                </li>
                               
                               
                              
                            </ul>
                        </div>
                        <div class="jcarousel_controls">
                            <span class="jcarousel-control-prev"></span>
                            <div class="jcarousel-pagination"></div>
                            <span class="jcarousel-control-next"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- portfolio_section -->
<div class="portfolio_niz"></div>

        <section id="how-work_section" class="section">
        	<div class="center">
            	<h2 class="collapse_title"><span>Как мы работаем</span></h2>
                <div class="collapse_box">
                    <ul class="how-work_list">
                        <li>
                            <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/media/lamp-1.png" height="199" alt=""></div>
                            <p>Анализ задач клиента и поиск оптимального решения</p>
                        </li>
                        <li>
                            <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/media/lamp-2.png" height="199" alt=""></div>
                            <p>Согласование технического задания и сроков</p>
                        </li>
                        <li>
                            <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/media/lamp-3.png" height="199" alt=""></div>
                            <p>Подписание договора с поэтапной детализацией всех работ</p>
                        </li>
                        <li>
                            <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/media/lamp-4.png" height="199" alt=""></div>
                            <p>Персональный менеджер контролирует весь процесс и держит вас в курсе</p>
                        </li>
                        <li>
                            <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/media/lamp-5.png" height="199" alt=""></div>
                            <p>Включаем бизнес!!!</p>
                        </li>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
				jQuery(document).ready(function($){
					$('#how-work_section').backstretch("<?php bloginfo('template_directory'); ?>/lend/images/how-work.jpg");
					jQuery(window).resize(function(){
						$('#how-work_section').backstretch("<?php bloginfo('template_directory'); ?>/lend/images/how-work.jpg");
					});
				})
			</script>
        </section><!-- how-work_section -->
        <div class="action_verh"></div>
        <section id="action_section" class="section">
        	<div class="center top">
            	<h2 class="collapse_title"><span>Спецпредложение</span></h2>
                <div class="collapse_box">
                    <div class="action_box">
			<!-- <p>Мы хотим, чтобы ваш сайт начал приносить прибыль как можно скорее!</p> -->
                        <p>Закажите любой сайт <br>по тарифу <a href="#">«Активные продажи»</a> и получите 50% скидки на создание рекламной компании в любой контекстной сети!</p>
                        <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/percent.png" width="239" height="234" alt=""></div>
                    </div>
                    <div class="serv-btn_wrap">
<!--                        <div class="center"><a href="/uslugi.html" class="yellow-btn"><span>Посмотреть все услуги</span></a></div> -->
                    </div>
                </div>
        	</div>
        </section><!-- action section -->
        <div class="action_niz"></div>

        <section id="order_section" class="section">
        	<div class="center">
            	<h2><span>Не упустите ни дня своей прибыли!</span></h2>
                <div class="order_text">
                	<p>Оставьте заявку сейчас и получите бесплатную аналитику возможностей продвижения вашего бизнеса!</p>
                </div>
                
                	<ul class="order_benefits">
                    	<li>Индивидуальный подход!</li>
                        <li>Реализация любых идей!</li>
                        <li>Гибкая система тарифов!</li>
                        <li>Моментальная обратная связь!</li>
                    </ul>

                        <?php echo do_shortcode( '[contact-form-7 id="1279" title="Оставить заявку"]' ); ?>


            </div>
            <script type="text/javascript">
				jQuery(document).ready(function($){
					$('#order_section').backstretch("<?php bloginfo('template_directory'); ?>/lend/images/order_bg.jpg");
					jQuery(window).resize(function(){
						$('#order_section').backstretch("<?php bloginfo('template_directory'); ?>/lend/images/order_bg.jpg");
					});
				})
			</script>
        </section><!-- order section -->
        <div id="map_section" class="section">
        	<div class="map_info">
            	<div class="icon-box"></div>
                <div class="map_triangle"></div>
                <p>г. Москва<br>
Волгоградский пр-т, 47<br>
БЦ "КУБ"</p>
            </div>
            <div class="appointment-btn"><div class="center"><a id="meeting" href="#" class="yellow-btn"><span>Назначить встречу</span></a></div></div>
        </div>
        <footer>
        	<div class="center">
            	<a href="#" class="footer_logo"><img src="<?php bloginfo('template_directory'); ?>/lend/images/logo.png" width="188" height="50" alt=""></a>
                <ul class="footer_phones">
                    <li>8 800 200-51-56</li>
                  	<li>+7 499 677-63-00</li>
                    <li>Skype: evity_ru</li>

                    <li>E-mail: <a style="color:#fff" href="mailto:manager@evity.ru">manager@evity.ru</a></li>
                </ul>
                
            </div>
        </footer>
    </div><!-- end wrapper -->
	<?php wp_footer()?>
    <!--[if lt IE 9]><div class="popup__overlay popup__overlay_ie"></div><![endif]-->
    <div class="popup__overlay">
        <div class="popup ordernow">
            <a href="#" class="popup__close">X</a>
            <h2><span>Не упустите ни дня своей прибыли!</span></h2>
            <div class="order_text">
                <p>Оставьте заявку сейчас и получите бесплатную аналитику возможностей продвижения вашего бизнеса!</p>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="1280" title="Закажите сейчас"]' ); ?>
        </div>
        <div class="popup ordercall">
            <a href="#" class="popup__close">X</a>
            <h2><span>Не упустите ни дня своей прибыли!</span></h2>
            <div class="order_text">
                <p>Оставьте заявку сейчас и получите бесплатную аналитику возможностей продвижения вашего бизнеса!</p>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="1281" title="Заказать звонок"]' ); ?>
        </div>
        <div class="popup meeting">
            <a href="#" class="popup__close">X</a>
            <h2><span>Не упустите ни дня своей прибыли!</span></h2>
            <div class="order_text">
                <p>Оставьте заявку сейчас и получите бесплатную аналитику возможностей продвижения вашего бизнеса!</p>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="1282" title="Назначить встречу"]' ); ?>
        </div>
        <!--[if lt IE 9]><div class="popup__valignfix"></div><![endif]-->
    </div>


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter29540845 = new Ya.Metrika({id:29540845,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/29540845" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>