<?php

class Product
{
	const SHOW_BY_DEFAULT = 12;

	public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
	{
		$count = intval($count);

		$db = Db::getConnection();

		$productsList = array();

		$result = $db->query('SELECT `id`, `title`, `price`, `image`, `rating`, `brand`, `is_sale`,`info` FROM `product` where `is_new` = 1 ORDER BY `id` DESC LIMIT '.$count);

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
}