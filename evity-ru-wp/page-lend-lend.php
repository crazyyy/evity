<?php
/*
Template Name: Landing
*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title><?php 
//if(isset($_GET['mode'])) $mode = $_GET['mode'];
if(isset($_GET['title'])) 
{
$title= $_GET['title']; 
if(mb_detect_encoding($title, array('windows-1251','utf-8')) != 'UTF-8') $title = iconv('windows-1251', 'utf-8', $_GET['title']);
}
else $title = 'Продающий лендинг';
if(isset($_GET['caption'])) 
{
$caption= $_GET['caption']; 
if(mb_detect_encoding($caption, array('windows-1251','utf-8')) != 'UTF-8') $caption= iconv('windows-1251', 'utf-8', $_GET['caption']);
}
else $caption = 'Все лучшие технологии увеличения продаж, совершенное юзабилити и полный комплекс маркетинга под ключ';
echo $title;
/*if(!isset($title)) if(!isset($mode)) $title = "";
else switch($mode)
{
case im: $title = ""; break;
case land: $title = ""; break;
case corp: $title = ""; break;
case site: $title = ""; break;
default: $title = "";
}
wp_title();
*/
?></title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,700italic,400,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400italic,100,700italic,700,100italic,400&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo('template_directory'); ?>/lend/css/style-lend.css" rel="stylesheet">
    <!--[if lt IE 9]>
    	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<?php wp_head();?>
	
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
             <!--   <div class="nav_border">
                    <div class="center">
                        <ul class="main_menu">
                                                                 <li><a href="/portfolio">Портфолио</a></li>
                            <li><a href="/novosti">БЛОГ</a></li>
                            <li><a href="/uslugi.html">Услуги</a></li>
                            <li><a href="/zakaz-uslugi.html">Заказать сайт</a></li>
                            <li><a href="/kontaktjy.html">Контакты</a></li>
				
                        </ul>
                        <div id="nav-mobile">
                        	<span class="mobilebutton"></span>
                            <div class="navmobile-block">
                                <ul class="navmobile-menu">
                                     <li><a href="/portfolio">Портфолио</a></li>
                                    <li><a href="/novosti">БЛОГ</a></li>
                                    <li><a href="/uslugi.html">Услуги</a></li>
                                    <li><a href="/zakaz-uslugi.html">Заказать сайт</a></li>
                                    <li><a href="/kontaktjy.html">Контакты</a></li>
				
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
            <div class="center">
            	<div class="head_block">
                	<a href="#" id="logo"><img src="<?php bloginfo('template_directory'); ?>/lend/images/logo.png" width="188" height="50" alt=""></a>
                    <div class="head_info">
                    	<h2 class="middle no-mar-btm"><span><? echo $title; ?></span></h2>
                       <p><? echo $caption; ?></p>
                        <br /><br />
                        <p><strong>Стоимость лендинга <strike>40 000 рублей</strike> 19990 рублей!</strong></p>
                        <p>Только при оплате до 30 июня!</p>
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
        <div class="business_verh"></div>      
        <section id="business_section" class="section">
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
                                    <th class="red">Продающий лендинг</th>
                                    <th>Типовой лендинг</th>
                                </tr>
                                <tr>
                                    <td class="a-right">Затраты на рекламу</td>
                                    <td class="red">100000 руб.</td>
                                    <td>100000 руб.</td>
                                </tr>
                                <tr>
                                    <td class="a-right">Получено клиентов</td>
                                    <td class="red">100</td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                    <td class="a-right">Заработано</td>
                                    <td class="red">150000 руб.</td>
                                    <td>90000 руб.</td>
                                </tr>
                                <tr>
                                    <td class="a-right">Результат</td>
                                    <td class="red">Долгосрочная прибыль. Стабильное сотрудничество. Возможности для расширения.</td>
                                    <td>Сайт «кладётся на полку». Сотрудничество останавливается.</td>
                                </tr>
                            </table>
                            <p class="table_note">Сравните типовой лендинг и лендинг клиента «Эвити»</p>
                        </div>
                        <div class="specialize_text">
                            <p>Лендинг, который приносит реальный доход – это всегда больше, чем просто «красивая картинка». Именно поэтому, помимо отличного дизайна, требуется экспертная проработка каждой детали для получения идеальной машины продаж. Да, такой подход отличается от типовых шаблонных проектов по себестоимости. Но главное - он кардинально отличается от них по эффективности!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- business_section -->
<div class="business_niz"></div>  

        <section id="benefits_section" class="section">
            <div class="center">
           	  	<div class="benefits_inner">
                    <h2 class="collapse_title"><span>Технологии продаж</span></h2>
                    <div class="collapse_box">
                        <ul class="benefits_list">
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/benefits_icon.png" width="85" height="113" alt=""></div>
                                <h5>Мульти-лендинг</h5>
                                <p>Автоматизированная система подстройки лендинга под запрос, гео-расположение и другие параметры посетителя!</p>
                            </li>
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/benefits_icon.png" width="85" height="113" alt=""></div>
                                <h5>Внимание к деталям</h5>
                                <p>Создаём проект с полным учетом конверсионного юзабили-анализа и индивидуальных особенностей вашего бизнеса!</p>
                            </li>
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/benefits_icon.png" width="85" height="113" alt=""></div>
                                <h5>А\Б тестирование</h5>
                                <p>Практические сравнение различных форматов отдельных элементов лендинга - позволяет дополнительно увеличить конверсию!</p>
                            </li>
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/benefits_icon.png" width="85" height="113" alt=""></div>
                                <h5>Маркетинговое исследование</h5>
                                <p>Идеальный лендинг - это всегда результат полноценного исследования бизнеса клиента!</p>
                            </li>
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/benefits_icon.png" width="85" height="113" alt=""></div>
                                <h5>Комплексный подход</h5>
                                <p>Мы не только сделаем ваш идеальный лендинг, но и обеспечим полный комплекс услуг по привлечению клиентов и аналитике!</p>
                            </li>
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/benefits_icon.png" width="85" height="113" alt=""></div>
                                <h5>Впечатляющий дизайн</h5>
                                <p>Ваша компания и ваш товар получат совершенно уникальный и запоминающийся образ в глаза посетителя!</p>
                            </li>
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/benefits_icon.png" width="85" height="113" alt=""></div>
                                <h5>Адаптивная верстка</h5>
                                <p>Один лендинг - для мобильных, планшетов и компьютеров. Доля мобильных устройств ростёт с каждым днём - не теряйте клиентов!</p>
                            </li>
                            <li>
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/benefits_icon.png" width="85" height="113" alt=""></div>
                                <h5>Upsale-технологии</h5>
                                <p>Настраиваем онлайн-консультант и Calltracking. Ловим уходящих клиентов через Callback Hunter!</p>
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
<div class="portfolio_verh"></div>
        <section id="portfolio_section" class="section">
        	<div class="center">
            	<h2 class="collapse_title"><span>Портфолио</span></h2>
                <div class="collapse_box">
                    <div class="portfolio_carousel">
                        <div class="jcarousel">
                            <ul class="portfolio_list">
                                <li>

                                    <div class="portfolio_item"><a href="<?php bloginfo('template_directory'); ?>/lend/slider/7.jpg" class="lbp_primary" rel="lightbox[secondary-demo]" title="Лендинг-страница SaaS-сервиса туристической индустрии"><img src="<?php bloginfo('template_directory'); ?>/lend/slider/7-thumb.jpg"></a></div>

                                    <div class="portfolio_item"><a href="<?php bloginfo('template_directory'); ?>/lend/slider/1.jpg" class="lbp_primary" rel="lightbox[secondary-demo]" title="<a href='http://kruazh.com/' target='_blank'>Круаж - ресторан русской кухни на Пречистенке</a>"><img src="<?php bloginfo('template_directory'); ?>/lend/slider/1-thumb.jpg"></a></div>

                                    <div class="portfolio_item"><a href="<?php bloginfo('template_directory'); ?>/lend/slider/9.jpg" class="lbp_primary" rel="lightbox[secondary-demo]" title="Сервис личных кабинетов для гостей отеля"><img src="<?php bloginfo('template_directory'); ?>/lend/slider/9-thumb.jpg"></a></div>

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
         <div class="sites_verh"></div>       
        <section id="sites_section" class="section">
            <div class="center">
                <h2><span>Тарифы</span></h2>
                <div class="sites_text">

                </div>
                <div class="sites_list clearfix">
                    <div class="item">
                        <div class="sites_box" style="height: 100%">
                            <div class="box_title"><span class="cell">Стандарт</span></div>
                            <div class="box_entry">
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/media/sites-3.png" width="130" height="130" alt=""></div>
                                <p></p>
                                <ul class="icon-list">
                                    <li>Уникальный дизайн!</li>
                                    <li>Продающие тексты под ключ!</li>
                                    <li>Базовый маркетинговый анализ</li>
                                    <li>Установка систем аналитики</li>
                                    <li>Юзабилити-тестирование!</li>
                                </ul>
                                <div class="price_box">19 990 руб.</div>
                                <a href="#" class="more-btn">Заказать!</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sites_box">
                            <div class="box_title"><span class="cell">Оптимум</span></div>
                            <div class="box_entry">
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/media/sites-1.png" width="130" height="130" alt=""></div>
                                <p></p>
                                <ul class="icon-list">
                                    <li>Все преимущества тарифа "Стандарт"!</li>
                                    <li>Адаптивный дизайн!</li>
                                    <li>Полный маркетинговый анализ!</li>
                                    <li>Расширенное юзабилити-тестирование!</li>
                                    <li>Онлайн-консультант!</li>
                                    <li>Корпоративная почта!</li>
                                    <li>Домен на 1 год в подарок!</li>
                                    <li>Хостинг на 1 год в подарок!</li>

                                </ul>
                                <div class="price_box">39 990 руб.</div>
                                <a href="#" class="more-btn">Заказать!</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sites_box">
                            <div class="box_title"><span class="cell">Максимум</span></div>
                            <div class="box_entry">
                                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/media/sites-2.png" width="130" height="130" alt=""></div>
                                <p></p>
                                <ul class="icon-list">
                                    <li>Все преимущества тарифа "Оптимум"!</li>
                                    <li>Технология "Мультилендинг"!</li>
                                    <li>Премиум дизайн!</li>
                                    <li>Расширенный продающий текст!</li>
                                    <li>Расширенное маркетинговое исследование!</li>
                                    <li>Техподдержка - 6 месяцев!</li>
                                    <li>Яндекс.Директ в подарок!</li>

                                </ul>
                                <div class="price_box">89 990 руб.</div>
                                <a href="#" class="more-btn">Заказать!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- sites_section -->
 <div class="sites_niz"></div>
<div class="action_verh_zerk"></div>
        <section id="action_section" class="section right-direction">
        	<div class="center">
            	<h2 class="collapse_title"><span>Спецпредложение</span></h2>
                <div class="collapse_box">
                    <div class="action_box">
			<!-- <p>Мы хотим, чтобы ваш сайт начал приносить прибыль как можно скорее!</p> -->
                        <p>Закажите лендинг и получите <b>50%</b> скидки на создание рекламной компании в любой контекстной сети!</p>
                        <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/lend/images/percent.png" width="239" height="234" alt=""></div>
                    </div>
                    <div class="serv-btn_wrap">
<!--                        <div class="center"><a href="/uslugi.html" class="yellow-btn"><span>Посмотреть все услуги</span></a></div> -->
                    </div>
                </div>
        	</div>
        </section><!-- action section -->
        <div class="action_niz_zerk"></div>
        <section id="order_section" class="section">
        	<div class="center">
            	<h2><span>Не упустите ни дня своей прибыли!</span></h2>
                <div class="order_text">
                	<p>Оставьте заявку сейчас и получите бесплатную прототипирование вашего будущего лендинга!</p>
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
                <p>Оставьте заявку сейчас и получите бесплатную прототипирование вашего будущего лендинга!</p>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="1280" title="Закажите сейчас"]' ); ?>
        </div>
        <div class="popup order-tarif">
            <a href="#" class="popup__close">X</a>
            <h2><span>Не упустите ни дня своей прибыли!</span></h2>
            <div class="order_text">
                <p>Оставьте заявку сейчас и получите бесплатную прототипирование вашего будущего лендинга!</p>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="1285" title="Закажите сейчас"]' ); ?>
        </div>
        <div class="popup ordercall">
            <a href="#" class="popup__close">X</a>
            <h2><span>Не упустите ни дня своей прибыли!</span></h2>
            <div class="order_text">
                <p>Оставьте заявку сейчас и получите бесплатную прототипирование вашего будущего лендинга!</p>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="1281" title="Заказать звонок"]' ); ?>
        </div>
        <div class="popup meeting">
            <a href="#" class="popup__close">X</a>
            <h2><span>Не упустите ни дня своей прибыли!</span></h2>
            <div class="order_text">
                <p>Оставьте заявку сейчас и получите бесплатную прототипирование вашего будущего лендинга!</p>
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

<script src="<?php bloginfo('template_directory'); ?>/lend/js/jquery.jcarousel.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/lend/js/jquery.backstretch.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/lend/js/script.js"></script>

</body>
</html>