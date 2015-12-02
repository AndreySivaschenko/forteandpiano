<div id="popup_reg">
	<div class="af_reg">
		<span>Регистрация</span>
			<form method="POST" action="/account/register">
			<div class="avtoriz">
				<label for="E-mail">E-mail</label>
				<input type="text" name="email" id="E-mail">
			</div>
			<div class="avtoriz">
				<label for="pass">Пароль</label>
				<input type="password" name="password" id="pass">
			</div>	
			<div class="avtoriz">
				<img src="resource/captcha.php" alt="Каптча">
			</div>
			<div class="avtoriz">
				<label for="captch">Каптча</label>
				<input type="text" name="captcha" id="captch" maxlength="5" pattern="[0-9]{0,5}" title="Вводите только цифры">
			</div>						
			<div class="reg_btn">
				<input type="submit" name="registration" value="Регистрация">
			</div>
		</form>
	</div>
</div>