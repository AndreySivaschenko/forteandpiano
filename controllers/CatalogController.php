<?php
include_once ROOT.'/models/Product.php';
include_once ROOT.'/models/Category.php';

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
	public function actionCategory($categoryId)
	{
		$categories = array();
		$categories = Category::getCategoryList();

		$categoryProduct = array();
		$categoryProduct = Product::getProductListByCategory($categoryId);

		require_once(ROOT.'/views/catalog/category.php');

		return true;
	}
}