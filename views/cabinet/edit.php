<?php 
	include ROOT.'/views/layouts/header.php';
	Head('Marshall MG30');	
?>


		<div class="middle center clearfix">
				<div class="content">
			
					
						<div class="af_reg">
						<!--	<?php if($result):?>
								<p>Данные сохранены</p>
							<?php else:?>
							<?php if(isset($errors)&&is_array($errors)):?>
								<ul>
									<?php foreach ($errors as $error):?>
										<li> - <?=$error;?></li>
									<?php endforeach;?>
								</ul>
							<?php endif;?>-->
							<span>Заполните профиль</span>
							<form method="POST" action="#">
							<div class="avtoriz">
								<label for="E-mail">E-mail</label>
								<input type="text" name="email" id="E-mail">
							</div>
							<div class="avtoriz">
								<label for="pass">Старый пароль</label>
								<input type="password" name="o_password" id="pass">
							</div>	
							<div class="avtoriz">
								<label for="pass">Новый пароль</label>
								<input type="password" name="n_password" id="pass">
							</div>	

							<div class="avtoriz">
								<label for="pass">Имя</label>
								<input type="text" name="" id="pass">
							</div>	
							<div class="avtoriz">
								<label for="pass">Фамилия</label>
								<input type="text" name="password" id="pass">
							</div>	
							<div class="avtoriz">
								<label for="pass">Телефон</label>
								<input type="text" name="password" id="pass">
							</div>	
							<div class="avtoriz">
								<label for="pass">Страна</label>
								<input type="text" name="password" id="pass">
							</div>	
							<div class="avtoriz">
								<label for="pass">Область</label>
								<input type="text" name="password" id="pass">
							</div>	
							<div class="avtoriz">
								<label for="pass">Город</label>
								<input type="text" name="password" id="pass">
							</div>	
							<div class="avtoriz">
								<label for="pass">Адрес</label>
								<input type="text" name="password" id="pass">
							</div>	
							<div class="avtoriz">
								<label for="pass">Индекс</label>
								<input type="text" name="password" id="pass">
							</div>	
												
							<div class="reg_btn">
								<input type="submit" name="save_edit" value="Сохранить">
							</div>
						</form>
					<!--<?php endif;?>-->
					</div>		
				
	
				</div><!--Content-->
			</div><!--Middle-->
		</div><!--Wrapper-->
		<?php include ROOT.'/views/layouts/footer.php';
				 ?>
		