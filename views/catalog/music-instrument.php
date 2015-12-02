<?php
	include ROOT.'/views/layouts/header.php';
	Head('Музыкальные инструменты');
	
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
							<option value="Alphabetically">Alphabetically</option>						 <option value="Alphabetically">Alphabetically</option>
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

					<div class="product-description">
					<?php foreach ($categories as $category): ?>
					<div class="catalog-musinst">
							<div class="m-img">
								<a href="/category/<?php echo $category['id_category'];?>"><img src="img/guitar.jpg"width="220px" height="220px;"></a>
							</div>
								<div class="m-footer">
										<a href="/category/<?php echo $category['id_category'];?>"><?php echo $category['title'];?>
						</div><!--product-->
					</div>
				<?php endforeach;?>
					</div><!--Product-catalog-->

	
				</div><!--Content-->
			</div><!--Middle-->
		</div><!--Wrapper-->
		<?php include ROOT.'/views/layouts/footer.php';?>