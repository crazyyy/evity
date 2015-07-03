<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
	<!--CSS style-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.png" type="image/x-icon">
	<!--[if lt IE 9]>
		<script src="<?php bloginfo('template_directory'); ?>/js/html5.js"></script>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie8.css">
	<![endif]-->
	<!--[if lt IE 8]>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie7.css">
	<![endif]-->
    <?php wp_head(); // API Hook ?>
    </head>
	<body>
	
<!-- Start SiteHeart code -->
<script>
(function(){
var widget_id = 678982;
_shcp =[{widget_id : widget_id}];
var lang =(navigator.language || navigator.systemLanguage 
|| navigator.userLanguage ||"en")
.substr(0,2).toLowerCase();
var url ="widget.siteheart.com/widget/sh/"+ widget_id +"/"+ lang +"/widget.js";
var hcc = document.createElement("script");
hcc.type ="text/javascript";
hcc.async =true;
hcc.src =("https:"== document.location.protocol ?"https":"http")
+"://"+ url;
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hcc, s.nextSibling);
})();
</script>
<!-- End SiteHeart code -->

	<!-- Main -->
	<div class="main">
		<!-- Header -->
		<div id="header">
			<!-- Top menu and phone -->
			<div class="wrapper-top-menu-and-phone">
				<div class="top-menu-and-phone block">
					<!-- nav top-menu -->
					<div class="top-menu left">
						<ul class="menu wrap">
							<li><a href="/o-nas.html">О нас <span>о компании</span></a></li>
							<li><a href="/portfolio">Портфолио <span>свежие работы</span></a></li>
							<li><a href="/uslugi.html">Услуги <span>что мы можем</span></a></li>
							<li><a href="/novosti">Новости <span>и статьи</span></a></li>
							<li><a href="/kontaktjy.html">Контакты <span>обратная связь</span></a></li>
						</ul>
					</div>
					<!-- nav top-menu -->
					<!-- Phone -->
					<div class="phone robb left">
						<ul>
							<li class="number-phone"><a href="tel:+74996776300"><span>+7 (499)</span> 677-63-00</a></li>
							<li class="number-phone"><a href="tel:88002005156"><span>8 800</span> 200-51-56</a></li>
							<li class="number-phone skype">Skype: <a href="skype:evity_ru" title="Позвонить нам"><span>evity_ru</span></a></li>
						</ul>
					</div>
					<div class="phone robb right">
						<ul>
							<li class="number-phone"><a href="tel:88002005156"><span>8 910</span> 422-56-50</a></li>
							<li class="number-phone schedule">с 9:00 до 21:00<br/>  без выходных</li>
						</ul>
					</div>
					<!-- Phone -->
				</div>
			</div>
			<!-- Top menu and phone -->
			<!-- Logo and buttons -->
			<div class="wrapper-logo-and-buttons block">
				<div class="logo-and-buttons wrap">
					<!-- head-logo -->
					<div class="head-logo left">
						<a href="/" class="left">
							<img src ="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="">
						</a>
						<div class="logo-description left">
							<p>элегантные</p>
							<p>сайты</p>
						</div>
					</div>
					<!-- head-logo -->
					<!-- head-buttons -->
					<div class="head-buttons right">
						<ul class="wrap">
							<li class="calculator">
								<a href="/kaljkulyator.html">
									Калькулятор 
									<span>рассчитать стоимость</span>
								</a>
							</li>
							<li class="order-site">
								<a href="/zakaz-uslugi.html">
									Заказать сайт
									<span>сайты любой сложности</span>
								</a>
							</li>
						</ul>
					</div>
					<!-- head-buttons -->
				</div>
			</div>
			<!-- Logo and buttons -->
			<?php include (TEMPLATEPATH . "/loop-complex-internet-services.php"); ?>
		</div>
		<!-- Header -->
		<!-- Section -->
		<div id="section">
			<?php include (TEMPLATEPATH . "/loop-home-our-work.php"); ?>
			<!-- Main block -->
			<?php if ($_SERVER["REQUEST_URI"] == "/") { ?>
			<div class="main-block-home">
			<?php } else { ?>
			<div class="main-block">
			<?php } ?>
				<?php get_sidebar(); // sidebar.php ?>
				<!-- Content -->
				<div class="content right">