<?php
return array(	
	
	'product/([0-9]+)'=>'product/view/$1',
	'catalog'=>'catalog/index',
	'music_instruments'=>'catalog/music',
	'category/([0-9a-z]+)/page-([0-9]+)'=> 'catalog/category/$1/$2',
	'category/([0-9a-z]+)'=>'catalog/category/$1',
	//Корзина
	'cart/checkout' => 'cart/checkout',
	'cart/add/([0-9]+)'=>'cart/add/$1',
	'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
	'cart' => 'cart/index',
	//users
	'user/register'=>'user/register',
	'user/login'=>'user/login',
	'user/logout'=>'user/logout',
	'user/profile'=>'user/profile',
	'cabinet/edit'=>'cabinet/edit',
	'cabinet'=>'cabinet/index',
	'page-([0-9]+)'=>'site/index/$1',
	'' => 'site/index',
	//'news' => 'news/index',
	);
?>