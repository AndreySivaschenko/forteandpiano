<?php
return array(	
	
	'product/([0-9]+)'=>'product/view/$1',
	'catalog'=>'catalog/index',
	'music_instruments'=>'catalog/music',
	'category/([0-9a-z]+)/page-([0-9]+)'=> 'catalog/category/$1/$2',
	'category/([0-9a-z]+)'=>'catalog/category/$1',
	'cart/addAjax/([0-9]+)'=>'cart/addAjax/$1',
	'cart/add/([0-9]+)'=>'cart/add/$1',
	//users
	'user/register'=>'user/register',
	'user/login'=>'user/login',
	'user/logout'=>'user/logout',
	'cabinet/edit'=>'cabinet/edit',
	'cabinet/profile'=>'cabinet/profile',
	'cabinet'=>'cabinet/index',
	'page-([0-9]+)'=>'site/index/$1',
	'' => 'site/index',
	//'news' => 'news/index',
	);





?>