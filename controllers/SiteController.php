<?php

class SiteController
{
	public function actionIndex($page = 1)
	{
		$lastestProduct = array();
		$lastestProduct = Product::getLatestProducts (Product::SHOW_BY_DEFAULT,$page);

		$total = Product::getTotalProduct();
		$pagination = new Pagination($total,$page,Product::SHOW_BY_DEFAULT,'page-');

		require_once(ROOT.'/views/site/index.php');
		return true;
	}
}