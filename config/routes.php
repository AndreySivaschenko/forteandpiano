<?php
return array(	
	//Товар
	'product/([0-9]+)'=>'product/view/$1',
	//Каталог
	'catalog'=>'catalog/index',
	//Категории
	'music_instruments'=>'catalog/music',
	'category/([0-9a-z]+)/page-([0-9]+)'=> 'catalog/category/$1/$2',
	'category/([0-9a-z]+)'=>'catalog/category/$1',
	//Корзина
	'cart/checkout' => 'cart/checkout',
	'cart/add/([0-9]+)'=>'cart/add/$1',
	'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
	'cart' => 'cart/index',
	//Пользователь
	'user/register'=>'user/register',
	'user/login'=>'user/login',
	'user/logout'=>'user/logout',
	'user/profile'=>'user/profile',
	'cabinet/edit'=>'cabinet/edit',
	'cabinet'=>'cabinet/index',
	//Управление товарами
	'admin/product/create'=>'adminProduct/create',
	'admin/product/update/([0-9]+)'=>'adminProduct/update/$1',
	'admin/product/delete/([0-9]+)'=>'adminProduct/delete/$1',
	'admin/product'=>'adminProduct/index',
	//Админпанель
	'admin'=>'admin/index',
	//Главная страница
	'page-([0-9]+)'=>'site/index/$1',
	'' => 'site/index',
	//'news' => 'news/index',
	);
?>