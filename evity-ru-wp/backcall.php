<?php
/*
Template Name: backcall
*/
?>
<?php get_header(); // header.php ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
	<!-- single -->
	<div class="single">
		<h1 class="title"><?php the_title(); ?></h1>
		<form class="calc-text" action="/assets/themes/evity-ru-wp/mail/backcall-mail.php" method="post">
			<p>
				Заполните форму обратного звонка и наши менеджеры обязательно перезвонят Вам в ближайшее время.
			</p>
			<div class="form-row">
				<input type="text" name="backcallname" id="backcallname" class="field2" placeholder="Имя и Фамилия">
				<span class="required">*</span>
				<label for="backcallname" class="form-label">Вы не ввели данные в обязательное поле!</label>
			</div>
			<div class="form-row">
				<input type="text" name="backcallmail" id="backcallmail" class="field2" placeholder="Email">
				<span class="required">*</span>
				<label for="backcallmail" class="form-label">Вы не ввели данные в обязательное поле!</label>
			</div>
			<div class="form-row">
				<input type="text" name="backcallphone" id="backcallphone" class="field2" placeholder="Номер телефона (ХХХ) ХХХ-ХХ-ХХ">
				<span class="required">*</span>
				<label for="backcallphone" class="form-label">Вы не ввели данные в обязательное поле!</label>
			</div>
			<div class="calc-end-text">
				<div class="calc-end-info-title">Вопрос:</div>
				<textarea name="backcallarea" class="area field2"></textarea>
			</div>
			<div class="form-row-button">
				<button class="button">Заказать звонок</button>
			</div>
		</form>
	<!-- single -->
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); // footer.php ?>