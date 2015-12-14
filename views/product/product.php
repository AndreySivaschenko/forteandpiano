<?php 
	include ROOT.'/views/layouts/header.php';
	Head('Marshall MG30');	
?>


		<div class="middle center clearfix">
				<div class="content">
					<div class="product-catalog clearfix">

					<div class="product-description">
						<div class="head_desc">
						<h3 class="title-description"><?php echo $product['title'];?></h3>

						<div class="photo-desc">
							<a href="#"><img src="<?=Product::getImage($product['id']);?>" width="220px" height="220px"></a>
						</div>

						<div class="desc_info">
							<div class="product_info">
								<span>Отзывы:59</span>
								<span>Производитель: <a href="#"><?php echo $product['brand'];?></a></span>
								<a href="#">Оставить отзыв</a>
								<span class="status_product">Есть на складе</span>
								<div class="rate">
										<div style="width:80%;margin-top:-8px;"></div>
								</div>
							</div>

							<div class="buy">
							<span class="price_desc_title">Цена</span><br>
							<span class="price_desc"><?php echo $product['price'];?> ₴</span><br>
							<button name="buy" class="desc_buybtn">Купить</button>
							</div>
							<span class="number_product">Код товара:23134</span>

						</div>
						<div class="nav_desc">
								<ul>
									<li class="active"><a href="#">Все о товаре</a></li>
									<li><a href="#">Характеристики</a></li>
									<li><a href="#">Фото</a></li>
									<li><a href="#">Оставить отзыв</a></li>
								</ul>
							</div>
						</div>
						<div class="footer_desc">
							<p class="descriptions">
								<?php echo $product['description'];?>

							</p>
							<div class="review right">
								<h5>Отзывы</h5>
								<div class="rev-cont">
									<a href="#" class="rev-username">UserName</a> <span class="pub_rev">01.11.2015</span><b>
									<p class="rev">Отзыв 1234812834</p><br>
									<div class="rev-help">
											<ul>
										<li><a href="#" class="revhelp-yes">Да(1)</a></li>
										<li><a href="#" class="revhelp-no">Нет(0)</a></li>
									</ul>
									</div>
									<div class="rev-rate">
										<div style="width:80%;"></div>
									</div>
									<a href="#" class="right">Ответить</a>
								</div>

								<div class="rev-cont">
									<a href="#" class="rev-username">UserName</a> <span class="pub_rev">01.11.2015</span><b>
									<p class="rev">Отзыв 1234812834</p><br>
									<div class="rev-help">
											<ul>
										<li><a href="#" class="revhelp-yes">Да(1)</a></li>
										<li><a href="#" class="revhelp-no">Нет(0)</a></li>
									</ul>
									</div>
									<div class="rev-rate">
										<div style="width:80%;"></div>
									</div>
									<a href="#" class="right">Ответить</a>
								</div>

								<div class="viewallcomments">
									<a href="#">Просмотреть все комментарии</a> <button class="leaveFeedback right">Оставить отзыв</button>
								</div>
						</div>
					</div>
					</div><!--Product-catalog-->

	
				</div><!--Content-->
			</div><!--Middle-->
		</div><!--Wrapper-->
		<?php include ROOT.'/views/layouts/footer.php';
				 ?>
		