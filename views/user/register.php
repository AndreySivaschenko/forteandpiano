<?php 
	include ROOT.'/views/layouts/header.php';
	Head('Marshall MG30');	
?>


		<div class="middle center clearfix">
				<div class="content">
			
					
						<div class="af_reg">
							<?php if($result):?>
								<p>Вы зарегистрированны</p>
							<?php else:?>
							<?php if(isset($errors)&&is_array($errors)):?>
								<ul>
									<?php foreach ($errors as $error):?>
										<li> - <?=$error;?></li>
									<?php endforeach;?>
								</ul>
							<?php endif;?>
							<span>Регистрация</span>
							<form method="POST" action="#">
							<div class="avtoriz">
								<label for="E-mail">E-mail</label>
								<input type="text" name="email_reg" id="E-mail" value="<?= $email?>">
							</div>
							<div class="avtoriz">
								<label for="pass">Пароль</label>
								<input type="password" name="password_reg" id="pass">
							</div>	
							<div class="avtoriz">
								<img src="/template/resource/captcha.php" alt="Каптча">
							</div>
							<div class="avtoriz">
								<label for="captch">Каптча</label>
								<input type="text" name="captcha" id="captch" maxlength="5" pattern="[0-9]{0,5}" title="Вводите только цифры">
							</div>						
							<div class="reg_btn">
								<input type="submit" name="registration" value="Регистрация">
							</div>
						</form>
					<?php endif;?>
					</div>		
				
	
				</div><!--Content-->
			</div><!--Middle-->
		</div><!--Wrapper-->
		<?php include ROOT.'/views/layouts/footer.php';
				 ?>
		