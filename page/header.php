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
						<a href=""><span>Cart (2)</span></a>
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

					<?php require_once '/page/register.php';?>
					<!--	<div id="popup_reg">
						<div class="af_reg">
						<span>Регистрация</span>
						<form method="POST" action="/account/register">
						<div class="avtoriz">
								<label for="E-mail">E-mail</label>
								<input type="text" name="E-mail" id="E-mail">
							</div>
								<div class="avtoriz">
								<label for="pass">Пароль</label>
								<input type="password" name="pass" id="pass">
							</div>	
							<div class="avtoriz">
								<img src="resource/captcha.php" alt="Каптча">
							</div>
								<div class="avtoriz">
								<label for="captch">Каптча</label>
								<input type="text" name="captcha" id="captch" maxlength="5" pattern="[0-9]{0,5}" title="Вводите только цифры">
							</div>						
								<div class="reg_btn">
								<input type="submit" name="registration" value="Регистрация">
							</div>
						</form>
						</div>
					</div>-->
					
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
				</div>'