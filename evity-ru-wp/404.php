<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Ошибка 404!</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,700italic,400,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400italic,100,700italic,700,100italic,400&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo('template_directory'); ?>/lend/css/style.css" rel="stylesheet">
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
                	<a href="/" id="logo"><img src="<?php bloginfo('template_directory'); ?>/lend/images/logo.png" width="188" height="50" alt=""></a>
                    <div class="head_info">
                    	<h2><span>Ошибка 404! </span></h2>
                       <p>Запрашиваемая страница не найдена</p>
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