<?php
		
class Product
{
	const SHOW_BY_DEFAULT = 12;

	public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
	{
		$count = intval($count);

		$db = Db::getConnection();

		$productsList = array();

		$result = $db->query('SELECT `id`, `title`, `price`, `image`, `rating`, `brand`, `is_sale`,`info` FROM `product` ORDER BY `id` DESC LIMIT '.$count);

		$i=0;
		while ($row = $result->fetch()) {
			$productsList[$i]['id'] = $row['id'];
			$productsList[$i]['info'] = $row['info'];
			$productsList[$i]['title'] = $row['title'];
			$productsList[$i]['price'] = $row['price'];
			$productsList[$i]['image'] = $row['image'];
			$productsList[$i]['rating'] = $row['rating'];
			$productsList[$i]['brand'] = $row['brand'];
			$productsList[$i]['is_sale'] = $row['is_sale'];
			$i++;
		}
		return $productsList;
	}
	public static function getProductListByCategory($categoryId = false)
	{
		if($categoryId)
		{
			$db = Db::getConnection();
			$products = array();
			$result = $db->query("SELECT `id`, `title`, `price`, `image`, `rating`, `brand`, `is_sale`,`info` FROM `product` WHERE `category` = '$categoryId' ORDER BY `id` DESC LIMIT ".self::SHOW_BY_DEFAULT);
			$i = 0;
			while ($row = $result->fetch()) {
			$products[$i]['id'] = $row['id'];
			$products[$i]['info'] = $row['info'];
			$products[$i]['title'] = $row['title'];
			$products[$i]['price'] = $row['price'];
			$products[$i]['image'] = $row['image'];
			$products[$i]['rating'] = $row['rating'];
			$products[$i]['brand'] = $row['brand'];
			$products[$i]['is_sale'] = $row['is_sale'];
			$i++;
			}
			
		return $products;
		}
	}
	public static function getProductById($id)
	{
		$id = intval($id);
		if($id)	
		{
			$db = Db::getConnection();

			$result = $db->query('SELECT * FROM `product` WHERE `id` = '.$id);
			$result->setFetchMode(PDO::FETCH_ASSOC);

			return $result->fetch();
		}
	}
}