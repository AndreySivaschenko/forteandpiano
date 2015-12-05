<?php
include ROOT.'/views/layouts/header.php';
Head('Личный кабинет');
?>
		<div class="middle center clearfix">
				<div class="content">
					<div class="product-catalog clearfix">
						<div class="personalArea">
							<div class="personal-header">
							<span class="personalInfo-title">Личный Кабинет</span>
							<span class="personalInfo-title">Отзывы о товарах</span>
							</div>
							<div class="personalInfo">
								<ul>
									<li><a href="/cabinet/edit/">Редактирование персональных данных</a></li>
									<li><a href="#">История заказов</a></li>
									<li><a href="#">Отслеживание посылок</a></li>
									<li><a href="#">История запросов каталога</a></li>
									<li><a href="#">Ваши отзывы</a></li>
									<li><a href="#">Выход</a></li>
								</ul>
							</div>
							<div class="MyReview">
								<ul>
									<li><a href="#">Мои отзывы</a></li>
								</ul>
							</div>
						</div>
					</div><!--Product-catalog-->
				</div><!--Content-->
			</div><!--Middle-->
		</div><!--Wrapper-->
		<?php include ROOT.'/views/layouts/footer.php';
				 ?>