<?php 
	include ROOT.'/views/layouts/header.php';
	Head('Вход');	
?>


		<div class="middle center clearfix">
				<div class="content">
			
					
					<div class="login_frm">
						<div class="a-forms">
							<?php if(isset($errors)&&is_array($errors)):?>
								<ul>
									<?php foreach ($errors as $error):?>
										<li> - <?=$error;?></li>
									<?php endforeach;?>
								</ul>
							<?php endif;?>
						<span>Авторизация</span>
						<form method="POST" action="#"> 
							<div class="avtoriz">
								<label for="E-mail">E-mail</label>
								<input type="text" name="login_email" id="E-mail">
							</div>
								<div class="avtoriz">
								<label for="pass">Пароль</label>
								<input type="password" name="login_password" id="pass">
							</div>
								<div class="avtoriz">
								<label for="rem">Остаться в сети</label>
								<input type="checkbox" name="remember" id="rem">
							</div>
								
								<div class="avtoriz">
								<input type="submit" name="login_btn" value="Вход">
							</div>
							</form>
					</div>		
					<div class="a-soc">
							<h2>Авторизоваться с помощью соц. сетей</h2><br>
							<div class="a-icon-soc">
								<a href="#" class="s-vk">&nbsp;</a>
								<a href="#" class="s-fb">&nbsp;</a>
								<a href="#" class="s-google">&nbsp;</a>
								<a href="#" class="s-od">&nbsp;</a>
							</div>
						</div>
				</div>
					
	
				</div><!--Content-->
			</div><!--Middle-->
		</div><!--Wrapper-->
		<?php include ROOT.'/views/layouts/footer.php';
				 ?>
		