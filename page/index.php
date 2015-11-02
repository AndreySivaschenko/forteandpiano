<?php
	include_once 'header.php';
	
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
				require_once 'page/sidebar.php';
				?>
				<div class="content">
				<?php	
					MessageShow();
				?>
					<div class="product-catalog clearfix">
						<div class="product">
							<div class="p-img">
								<span class="sale">Sale</span>
								<a href="#"><img src="img/pimg1.png" width="220px" height="220px"></a>
							</div>
								<div class="p-footer">
										<h6><a href="#">Aqualung</a> <span>by Artist</span></h6>
										<div class="rate">
											<div style="width:80%;"></div>
										</div>

										<p><strong>Lorem ipsum</strong> 
										dolor sit amet an adipiscing elit, sed diam nonu.</p>
									
									<div class="p-footer-price clearfix">
										<span class="price">$14.99</span>
										<span class="price-new">$8.99</span>
										<a href="#" class="right addCart">ADD TO CARD</a>
									</div>

								</div><!--p-footer-->
						</div><!--product-->

						<div class="product">
							<div class="p-img">
								<a href="#"><img src="img/pimg2.png" width="220px" height="220px"></a>
							</div>
								<div class="p-footer">
										<h6><a href="#">Aqualung</a> <span>by Artist</span></h6>
										<div class="rate">
											<div style="width:80%;"></div>
										</div>
										<p><strong>Lorem ipsum</strong> 
										dolor sit amet an adipiscing elit, sed diam nonu.</p>
									
									<div class="p-footer-price clearfix">
										<span class="price-lg">$14.99</span>
										<a href="#" class="right addCart">ADD TO CARD</a>
									</div>

								</div><!--p-footer-->
						</div><!--product-->

						<div class="product">
							<div class="p-img">
								<a href="#"><img src="img/pimg3.png" width="220px" height="220px"></a>
							</div>
								<div class="p-footer">
										<h6><a href="#">Aqualung</a> <span>by Artist</span></h6>
										<div class="rate">
											<div style="width:80%;"></div>
										</div>
										<p><strong>Lorem ipsum</strong> 
										dolor sit amet an adipiscing elit, sed diam nonu.</p>
									
									<div class="p-footer-price clearfix">
										<span class="price-lg">$8.99</span>
										<a href="#" class="right addCart">ADD TO CARD</a>
									</div>

								</div><!--p-footer-->
						</div><!--product-->

						<div class="product">
							<div class="p-img">
								<span class="sale">Sale</span>
								<a href="#"><img src="img/pimg4.png" width="220px" height="220px"></a>
							</div>
								<div class="p-footer">
										<h6><a href="#">Aqualung</a> <span>by Artist</span></h6>
										<div class="rate">
											<div style="width:80%;"></div>
										</div>
										<p><strong>Lorem ipsum</strong> 
										dolor sit amet an adipiscing elit, sed diam nonu.</p>
									
									<div class="p-footer-price clearfix">
										<span class="price">$14.99</span>
										<span class="price-new">$8.99</span>
										<a href="#" class="right addCart">ADD TO CARD</a>
									</div>

								</div><!--p-footer-->
						</div><!--product-->

						<div class="product">
							<div class="p-img">
								<a href="#"><img src="img/pimg5.png" width="220px" height="220px"></a>
							</div>
								<div class="p-footer">
										<h6><a href="#">Aqualung</a> <span>by Artist</span></h6>
										<div class="rate">
											<div style="width:80%;"></div>
										</div>
										<p><strong>Lorem ipsum</strong> 
										dolor sit amet an adipiscing elit, sed diam nonu.</p>
									
									<div class="p-footer-price clearfix">
										<span class="price-lg">$17.99</span>
										<a href="#" class="right addCart">ADD TO CARD</a>
									</div>

								</div><!--p-footer-->
						</div><!--product-->

						<div class="product">
							<div class="p-img">
								<a href="#"><img src="img/pimg6.png" width="220px" height="220px"></a>
							</div>
								<div class="p-footer">
										<h6><a href="#">Aqualung</a> <span>by Artist</span></h6>
										<div class="rate">
											<div style="width:80%;"></div>
										</div>
										<p><strong>Lorem ipsum</strong> 
										dolor sit amet an adipiscing elit, sed diam nonu.</p>
									
									<div class="p-footer-price clearfix">
										<span class="price-lg">$17.99</span>
										<a href="#" class="right addCart">ADD TO CARD</a>
									</div>

								</div><!--p-footer-->
						</div><!--product-->

					</div><!--Product-catalog-->

					<div class="pagination">
						<ul class="clearfix">
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
				</div><!--Content-->
			</div><!--Middle-->
		</div><!--Wrapper-->
		<?php require_once '/page/footer.php';
				 ?>
		</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#login_btn').click(function(){
			$('#popup').show(300);
			$('#hover').show();
			$("html,body").css("overflow","hidden");
		});
		$('#reg_btn').click(function(){
			$('#popup_reg').show(300);
			$('#hover').show();
			$("html,body").css("overflow","hidden");
		});
		$('#hover').click(function(){
			$('#popup').hide();
			$('#popup_reg').hide();
			$('#hover').hide();
			$('body').css('overflow','auto');
		});

	});
</script>
	</body>
</html>


















