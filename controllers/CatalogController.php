<?php


class CatalogController
{
	public function actionIndex()
	{
		$lastestProduct = array();
		$lastestProduct = Product::getLatestProducts(18);

		require_once(ROOT.'/views/catalog/index.php');

		return true;
	}
	public function actionMusic()
	{
		$categories = array();
		$categories = Category::getCategoryList();
		require_once(ROOT.'/views/catalog/music-instrument.php');

		return true;
	}
	public function actionCategory($categoryId, $page = 1)
	{
	
		$categories = array();
		$categories = Category::getCategoryList();

		$categoryProduct = array();
		$categoryProduct = Product::getProductListByCategory($categoryId, $page);

		$total = Product::getTotalProductsInCategory($categoryId);

		$pagination = new Pagination($total,$page,Product::SHOW_BY_DEFAULT, 'page-');

		require_once(ROOT.'/views/catalog/category.php');

		return true;
	}
}