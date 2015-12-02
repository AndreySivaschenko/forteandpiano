<!DOCTYPE html>
<html>
	<head>
		<title>Первая верстка магазина</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script type="text/javascript" src="/js/cusel-min-2.5.js"></script>
		<link rel="stylesheet" href="style/style.css">
		<link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<script>
			  $(function() {
			    $( "#slider-range" ).slider({
			      range: true,
			      min: 0,
			      max: 10000,
			      values: [ 0, 10000 ],
			      slide: function( event, ui ) {
			        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			      }
			    });
			    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
			      " - $" + $( "#slider-range" ).slider( "values", 1 ) );


			 /* select style */
					var params = {
						changedEl: "select",
						visRows: 5,
						scrollArrows: true
						}
						cuSel(params);
			  });
 		 </script>
	</head>
	<body>
	<a  id ="home-link" href="#"></a>
		<div id="wrapper">
			<div class="panel-top">
				<div class="center clearfix">
					<div class="social">
						<a href="#" class="s-fb">&nbsp;</a>
						<a href="#" class="s-dribble">&nbsp;</a>
						<a href="#" class="s-tw">&nbsp;</a>
						<a href="#" class="s-mail">&nbsp;</a>
						<a href="#" class="s-vimeo">&nbsp;</a>
					</div>
					<div class="basket">
						<a href=""><span>Cart (0)</span></a>
					</div>
					<div class="login">
						<a href="#"id="login_btn">Login</a>
						<span>|</span>
						<a href="#" id="reg_btn">Register</a>
					</div>
					<div id="popup">
						<div class="a-forms">
						<span>Авторизация</span>
							<div class="avtoriz">
								<label for="E-mail">E-mail</label>
								<input type="text" name="E-mail" id="E-mail">
							</div>
								<div class="avtoriz">
								<label for="pass">Пароль</label>
								<input type="password" name="pass" id="pass">
							</div>
								<div class="avtoriz">
								<input type="submit" value="Вход">
							</div>
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
					<div id="hover"></div>


						<div id="popup_reg">
						<div class="af_reg">
						<span>Регистрация</span>
						<div class="avtoriz">
								<label for="E-mail">E-mail</label>
								<input type="text" name="E-mail" id="E-mail">
							</div>
								<div class="avtoriz">
								<label for="pass">Пароль</label>
								<input type="password" name="pass" id="pass">
							</div>
							<div class="avtoriz">
								<label for="name">Имя</label>
								<input type="text" name="name" id="name">
							</div>
							<div class="avtoriz">
								<label for="E-mail">Фамилия</label>
								<input type="text" name="lastname" id="lastname">
							</div>
							<div class="avtoriz">
								<label for="Address">Адрес</label>
								<input type="text" name="Address" id="Address">
							</div>
							<div class="avtoriz">
								<label for="phone">Телефон</label>
								<input type="text" name="phone" id="phone">
							</div>
							
								<div class="reg_btn">
								<input type="submit" value="Регистрация">
							</div>
						</div>
					</div>
					<div id="hover"></div>

				</div>
				</div>
				<!--Head-->
				<div id="head" class="center clearfix">
					<div id="logo" class="left">
							<a href="#">
								<img src="img/logo.png" alt="MStore" />
								<span>Store</span>
							</a>
					</div>
					<!-- Nav-->
					<ul class="nav right clearfix">
						<li class="active"><a href="#">HOME</a></li>        
						<li><a href="#">CD’s</a></li>
						<li><a href="#">DVD’s</a></li>    
						<li><a href="#">NEWS</a></li>   
						<li><a href="#">PORTFOLIO</a></li>  
						<li><a href="#">CONTACT US</a></li>
						</ul>
						<!-- /Nav-->
				</div>
				<!--/Head-->

				<div id="home">
					<div class="home-bg">
						<div class="center">
							<a href ="/" class="link_home">&nbsp;</a>
								<h2 class="title-home">SHOP - SIDEBAR ON THE RIGHT</h2>
								<ul class="breadcrumbs clearfix">
									<li><a href="#">Home</a><span class="sp">&raquo;</span></li>
									<li><a href="#">Shop</a><span class="sp">&raquo;</span></li>
									<li><span>Sidebar on the righ</span></li>
								</ul>
						</div>
					</div>
				</div>


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
				<div class="sidebar">
					<h4 class="s-title">SEARCH <span class="s-title-br"></span></h4>
					<form action="#" class="s-search">
						<input type="text" placeholder="Search..."/>
						<input type="submit" value="" />
					</form>
					<h4 class="s-title">PRICE FILTER <span class="s-title-br"></span></h4>
					<div class="s-slider">
						<div id="slider-range"></div>
							<p>
							  <label for="amount">Price range:</label>
							  <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
							  <button class="btn-bl">Filter</button>
							</p>
						 
					</div>
					<h4 class="s-title">CATEGORIES <span class="s-title-br"></span></h4>

					<ul class="cat-lsit">
						<li><a href="">Музыкальное инструменты</a></li>
						<li><a href="">Музыкальное оборудование</a></li>
						<li><a href="">Одежда</a></li>
						<li><a href="">Аксессуары</a></li>
					</ul>
					
				</div>	
				<div class="content">
					<div class="product-catalog clearfix">

					<div class="product-description">
					<div class="catalog-musinst">
							<div class="m-img">
								<a href="#"><img src="img/guitar.jpg"width="220px" height="220px;"></a>
							</div>
								<div class="m-footer">
										<a href="#">Гитары</a>
								</div><!--p-footer-->
						</div><!--product-->
						<div class="catalog-musinst">
							<div class="m-img">
								<a href="#"><img src="img/drums.jpg"width="220px" height="220px;"></a>
							</div>
								<div class="m-footer">
										<a href="#">Ударные инструменты</a>
								</div><!--p-footer-->
						</div><!--product-->
						<div class="catalog-musinst">
							<div class="m-img">
								<a href="#"><img src="img/keyboards.jpg"width="220px" height="220px;"></a>
							</div>
								<div class="m-footer">
										<a href="#">Клавишные инструменты</a>
								</div><!--p-footer-->
						</div><!--product-->
						<div class="catalog-musinst">
							<div class="m-img">
								<a href="#"><img src="img/bow.jpg"width="220px" height="220px;"></a>
							</div>
								<div class="m-footer">
										<a href="#">Смычковые инструменты</a>
								</div><!--p-footer-->
						</div><!--product-->
						<div class="catalog-musinst">
							<div class="m-img">
								<a href="#"><img src="img/wind.jpg"width="220px" height="220px;"></a>
							</div>
								<div class="m-footer">
										<a href="#">Духовые инструменты</a>
								</div><!--p-footer-->
						</div><!--product-->
							<div class="catalog-musinst">
							<div class="m-img">
								<a href="#"><img src="img/tunners.jpg"width="220px" height="220px;"></a>
							</div>
								<div class="m-footer">
										<a href="#">Тюнеры и метрономы</a>
								</div><!--p-footer-->
						</div><!--product-->
					</div>
					</div><!--Product-catalog-->

	
				</div><!--Content-->
			</div><!--Middle-->
		</div><!--Wrapper-->
		<div id="footer">
		<a href="#home-link" class="home-link">&nbsp;</a>
		<div class="center clearfix">
				<div class="f-about">
					<h5 class="f-title">Little about us</h5>
					<p><b>Sed posuere</b> consectetur  est at. 
					Nulla vitae elit libero, a pharetra. 
					Lorem ipsum <b>dolor sit</b> amet, conse
					ctetuer adipiscing elit.</p>
					<h5 class="f-title">Socialize with us</h5>
					<div class="f-social">
						<a href="#" class="s-fb">&nbsp;</a>
						<a href="#" class="s-tw">&nbsp;</a>
						<a href="#" class="s-dribble">&nbsp;</a>
						<a href="#" class="s-digg">&nbsp;</a>
						<a href="#" class="s-mail">&nbsp;</a>
					</div>
				</div>

				<div class="f-archives">
					<h5 class="f-title">Our Archives</h5>
					<ul class="f-list">
							<li><a href="#">March 2015</a></li>
							<li><a href="#">February 2012</a></li>
							<li><a href="#">January 2012</a></li>
							<li><a href="#">December 2011</a></li>
						</ul>
				</div>
					<div class="f-populars">
						<h5 class="f-title">Popular Posts</h5>
							<div class="f-populars">
								<div class="s-products-item clearfix">
								<div class="s-products-img">
									<a href="#"><img src="img/f-pop-img.png" alt="" /></a>
								</div>
								<div class="s-products-info">
									<h6><a href="#">Great Album</a></h6>
									<span class="commetns"><i class="f-comment"></i> 12 comments</span>
								</div>
							</div>

							<div class="s-products-item clearfix">
								<div class="s-products-img">
									<a href="#"><img src="img/f-pop-img2.png" alt="" /></a>
								</div>
								<div class="s-products-info">
									<h6><a href="#">Great Album</a></h6>
									<span class="comments"><i class="f-comment"></i> 12 comments</span>
								</div>
							</div>
						</div>
					</div>
					<div class="f-search">
						<h5 class="f-title">Search our Site</h5>
							<form action="#">
								<input type="text" class="f-search-inp" placeholder="Enter Search ..."/>
							</form>
						<h5 class="f-title">Tag Cloud</h5>
						<a href ="#"class="tags">Audio CD</a>
						<a href ="#"class="tags">Video</a>
						<a href ="#"class="tags">Playlist</a>
						<a href ="#"class="tags">Avantgarde</a>
						<a href ="#"class="tags">Melancholic</a>
					</div>
				</div>
				<div class="footer-buttom">
					<div class="center">
						<a href="$">Home</a>
						<a href="$">Portfolio</a>
						<a href="$">Sitemap</a>
						<a href="$">Contact</a>
						<p class="right">Forte And Piano@2015 by NoKolya | All Rights Reserved</p>
					</div>
				</div>
			</div>
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