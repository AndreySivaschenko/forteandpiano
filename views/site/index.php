<?php
	include ROOT.'/views/layouts/header.php';
	Head('Главная страница');
?>
				<div class="sorting center clearfix">
					<ul class="s-category clearfix">
						<li class="active"><a href="#">ALL</a></li>
						<li><a href="#">ROCK</a></li>
						<li><a href="#">POP</a></li>
						<li><a href="#">METAL</a></li>
						<li><a href="#">DANCE</a></li>
						<li><a href="#">CLASSICAL</a></li>
					</ul>
				
				<div class="s-list">
					<a href="#" class="ic-squares">&nbsp;</a>
					<a href="#" class="ic-list">&nbsp;</a>
				</div>

				<div class="sel-sorting"> 
						<span>Sort by:</span>
						<select style="width:110px;">
							<option value="Alphabetically">Alphabetically</option>						 
							<option value="Alphabetically">Alphabetically</option>
							<option value="Alphabetically">Alphabetically</option>
							<option value="Alphabetically">Alphabetically</option>
							<option value="Alphabetically">Alphabetically</option>
							<option value="Alphabetically">Alphabetically</option>
							<option value="Alphabetically">Alphabetically</option>
						</select>
					</div>
			</div>
		<div class="middle center clearfix">
				<?php 
				include ROOT.'/views/layouts/sidebar.php';
				?>
				<div class="content">
					<div class="product-catalog clearfix">
						<?php foreach ($lastestProduct as $product):?>						
						<div class="product">
							<div class="p-img">
							<?php if($product['is_sale']):?>
								<span class="sale">Sale</span>
							<?php endif;?>
								<a href="/product/<?php echo $product['id'] ?>"><img src="<?=Product::getImage($product['id']);?>" width="220px" height="220px"></a>
							</div>
								<div class="p-footer">
										<h6><a href="/product/<?php echo $product['id'] ?>"><?php echo $product['title'];?></a> <span>by <?php echo $product['brand'];?></span></h6>
										<div class="rate">
											<div style="width:80%;"></div>
										</div>

										<p><?php echo $product['info'];?></p>
									
									<div class="p-footer-price clearfix">
										<?php if(!$product['is_sale']):?>
										<span class="price-lg"><?php echo $product['price'];?>₴</span>
									<?php endif;?>
										<?php if($product['is_sale']):?>
										<span class="price"><?php echo $product['price'];?>₴</span>
										<span class="price-new"><?php echo $product['price'];?>₴</span>
										<?php endif;?>
										<a href="#" data-id="<?php echo $product['id']?>" class="right addCart add-to-cart">ADD TO CARD</a>
									</div>

								</div><!--p-footer-->
						</div><!--product-->
					<?php endforeach; ?>
					</div><!--Product-catalog-->

					<div class="pagination">
						<?= $pagination->get();?>
					</div>
				</div><!--Content-->
			</div><!--Middle-->
		</div><!--Wrapper-->
		<?php include ROOT.'/views/layouts/footer.php';
				 ?>
		











