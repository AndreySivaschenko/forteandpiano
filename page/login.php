<?php
include_once"/page/header.php";
?><center>
<div class="a-forms">
						<span>Авторизация</span>
						<form method="POST" action="/account/login"> 
							<div class="avtoriz">
								<label for="E-mail">E-mail</label>
								<input type="text" name="email" id="E-mail">
							</div>
								<div class="avtoriz">
								<label for="pass">Пароль</label>
								<input type="password" name="password" id="pass">
							</div>
								<div class="avtoriz">
								<input type="submit" name="enter" value="Вход">
							</div>
							</form>
						</div>
<?php MessageShow();?>	

</center>

</body>
</html>