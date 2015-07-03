<?php
/*
Template Name: order
*/
?>
<?php get_header(); // header.php ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
	<!-- single -->
	<div class="single">
		<h1 class="title"><?php the_title(); ?></h1>
		<form class="calc-text" action="/assets/themes/evity-ru-wp/mail/order-mail.php" method="post">
			<p>
				Заполните все обязательные поля и укажите услуги, которые хотите заказать у нас.
			</p>
			<div class="form-row">
				<input type="text" name="ordername" id="ordername" class="field2" placeholder="Имя и Фамилия">
				<span class="required">*</span>
				<label for="ordername" class="form-label">Вы не ввели данные в обязательное поле!</label>
			</div>
			<div class="form-row">
				<input type="text" name="ordermail" id="ordermail" class="field2" placeholder="Email">
				<span class="required">*</span>
				<label for="ordermail" class="form-label">Вы не ввели данные в обязательное поле!</label>
			</div>
			<div class="form-row">
				<input type="text" name="orderphone" id="orderphone" class="field2" placeholder="Номер телефона (ХХХ) ХХХ-ХХ-ХХ">
				<span class="required">*</span>
				<label for="orderphone" class="form-label">Вы не ввели данные в обязательное поле!</label>
			</div>
			<div class="calc-end-text">
				<div class="calc-end-info-title">Услуги:</div>
				<textarea name="orderarea" class="area field2"></textarea>
			</div>
			<div class="form-row-button">
				<button class="button">Сделать заказ</button>
			</div>
		</form>
	<!-- single -->
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); // footer.php ?>