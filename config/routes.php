<?php
return array(	
	
	'product/([0-9]+)'=>'product/view/$1',
	'catalog'=>'catalog/index',
	'music_instruments'=>'catalog/music',
	'category/([a-z]+)'=>'catalog/category/$1',
	'cart/addAjax/([0-9]+)'=>'cart/addAjax/$1',
	'cart/add/([0-9]+)'=>'cart/add/$1',
	'' => 'site/index',
	//'news' => 'news/index',
	);





?>