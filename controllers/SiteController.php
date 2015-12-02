<?php
include_once ROOT.'/models/Product.php';
class SiteController
{
	public function actionIndex()
	{
		$lastestProduct = array();
		$lastestProduct = Product::getLatestProducts(6);
		require_once(ROOT.'/views/site/index.php');
		return true;
	}

	public function actionIndexcsite()
	{

	}	
	
	public function actionIndexasite(){}
}