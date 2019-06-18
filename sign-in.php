<?php require 'header.php'; ?>
	<main class="ways-to-help__sign-in-page">
		<section>
			<h1>Вход</h1>
			<form action="" method="post">
				<div class="form-group">
					<label for="wth-email-in">Email *</label>
					<input type="email" id="wth-email-in" name="wth-email-in" required>
					<span class="info">Укажите Ваш Email для входа в личный кабинет.</span>
				</div>
				<div class="form-group">
					<label for="wth-pass-in">Пароль *</label>
					<input type="password" id="wth-pass-in" name="wth-pass-in" required>
				</div>
				<div class="form-btn">
				<button type="submit" class="btn btn-sign" name="goAuth">Войти</button>
			</div>
			</form>
		</section>
		
	</main>
<?php require 'footer.php'; ?>