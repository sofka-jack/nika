<?php require 'header.php'; ?>
	<main class="ways-to-help__sign-in-page">
		<section>
			<h1>Регистрация</h1>
			<form action="" method="post">
				<div class="form-group">
					<label for="wth-name">Имя *</label>
					<input type="text" id="wth-name" name="wth-name" required>
					<span class="info">Укажите Ваше имя.</span>
				</div>
				<div class="form-group">
					<label for="wth-surname">Фамилия *</label>
					<input type="text" id="wth-surname" name="wth-surname" required>
					<span class="info">Укажите Вашу фамилию.</span>
				</div>
				<div class="form-group">
					<label for="wth-date">Дата рождения *</label>
					<input type="date" id="wth-date" name="wth-date" required>
					<span class="info">Укажите Вашу дату рождения.</span>
				</div>
				<div class="form-group">
					<label for="wth-code">Код BELAVIA *</label>
					<input type="text" id="wth-code" name="wth-code" required>
					<span class="info">Укажите номер вашего личного кабинета в Belavia.</span>
				</div>
				<div class="form-group">
					<label for="wth-email">Email *</label>
					<input type="email" id="wth-email" name="wth-email" required>
					<span class="info">Укажите Ваш Email для входа в личный кабинет.</span>
				</div>
				<div class="form-group">
					<label for="wth-password">Пароль *</label>
					<input type="password" id="wth-password" name="wth-password" required>
					<span class="info">Пароль должен содержать минимум 8 знаков(0-9,a-z,!,-).</span>
				</div>
				<div class="form-group">
					<label for="wth-password-repeat">Повторите пароль *</label>
					<input type="password" id="wth-password-repeat" name="wth-password-repeat" required>
					<span class="info"></span>
				</div>
				<div class="form-btn">
				<button type="submit" class="btn btn-sign" name="goReg">Зарегестрироваться</button>
			</div>
			</form>
		</section>
	</main>
<?php require 'footer.php'; ?>