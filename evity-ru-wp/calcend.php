<?php
/*
Template Name: calcend
*/
?>
<?php get_header(); // header.php ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
	<!-- single -->
	<div class="single">
		<h1 class="title"><?php the_title(); ?></h1>
		<div class="calc-text">
			<form action="/assets/themes/evity-ru-wp/mail.php" class="calc-end" method="post">
				<div class="calc-end-sum clearfix">
					<div class="calc-end-sum-title left">Вы заказали услуг на сумму:</div>
					<div class="calc-end-sum-num right">
						<span class="calc-end-sum-num-js"><?php echo $_POST['sumData']; ?></span> руб.
						<input type="hidden" name="sumDataall" value="<?php echo $_POST['sumData']; ?>">
					</div>
				</div>
				<div class="form-row"><input type="text" name="name" id="name" class="field2" placeholder="Имя и Фамилия"><span class="required">*</span><label for="name" class="form-label">Вы не ввели данные в обязательное поле!</label></div>
				<div class="form-row"><input type="text" name="mail" id="mail" class="field2" placeholder="Email"><span class="required">*</span><label for="mail" class="form-label">Вы не ввели данные в обязательное поле!</label></div>
				<div class="form-row"><input type="text" name="phone" id="phone" class="field2" placeholder="Номер телефона (ХХХ) ХХХ-ХХ-ХХ"><span class="required">*</span><label for="phone" class="form-label">Вы не ввели данные в обязательное поле!</label></div>
				<div class="calc-end-info">
					<div class="calc-end-info-title">Перечень заказанных вами услуг:</div>
					<ul class="float-calc-list2">
						<?php
							$htmlData = $_POST['htmlData'];
							$htmlData = str_replace('\\','',$htmlData);
							echo $htmlData;
						?>
					</ul>
					<input type="hidden" name="htmlDataall" value='<?=$htmlData?>'>
				</div>
				<div class="calc-end-text">
					<div class="calc-end-info-title">Комментарий к заказу:</div>
					<textarea name="area" class="area field2"></textarea>
				</div>
				<div class="form-row-button">
					<button class="button">Оформить заказ</button>
				</div>
			</form>
	</div>
	<!-- single -->
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); // footer.php ?>