<?php 
	include ROOT.'/views/layouts/header.php';
	Head('Профиль');	
?>


		<div class="middle center clearfix">
				<div class="content">
			
					
						<div class="af_reg">
							<?php if($result):?>
								<p>Данные сохранены</p>
							<?php else:?>
							<?php if(isset($errors)&&is_array($errors)):?>
								<ul>
									<?php foreach ($errors as $error):?>
										<li> - <?=$error;?></li>
									<?php endforeach;?>
								</ul>
							<?php endif;?>
							<span>Заполните профиль</span>
							<form method="POST" action="#">
							
							<div class="avtoriz">
								<label for="pass">Имя</label>
								<input type="text" name="u_name" id="pass">
							</div>	
							<div class="avtoriz">
								<label for="pass">Фамилия</label>
								<input type="text" name="u_sname" id="pass">
							</div>	
							<div class="avtoriz">
								<label for="pass">Телефон</label>
								<input type="text" name="u_phone" id="pass">
							</div>	
							<div class="avtoriz">
								<label for="pass">Страна</label>
								<input type="text" name="u_country" id="pass">
							</div>	
							<div class="avtoriz">
								<label for="pass">Область</label>
								<input type="text" name="u_region" id="pass">
							</div>	
							<div class="avtoriz">
								<label for="pass">Город</label>
								<input type="text" name="u_city" id="pass">
							</div>	
							<div class="avtoriz">
								<label for="pass">Адрес</label>
								<input type="text" name="u_address" id="pass">
							</div>	
							<div class="avtoriz">
								<label for="pass">Индекс</label>
								<input type="text" name="u_index" id="pass">
							</div>	
												
							<div class="reg_btn">
								<input type="submit" name="add_profile" value="Сохранить">
							</div>
						</form>
					<?php endif;?>
					</div>		
				
	
				</div><!--Content-->
			</div><!--Middle-->
		</div><!--Wrapper-->
		<?php include ROOT.'/views/layouts/footer.php';
				 ?>
		