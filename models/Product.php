<?php
		
class Product
{
	const SHOW_BY_DEFAULT = 6;

	public static function getLatestProducts($count = self::SHOW_BY_DEFAULT,$page = 1)
	{
		$count = intval($count);
		
		$page = intval($page);
		$offset = ($page - 1)*self::SHOW_BY_DEFAULT;
		
		$db = Db::getConnection();

		$productsList = array();

		$result = $db->query(
			'SELECT `id`, `title`, `price`, `image`, `rating`, `brand`, `is_sale`,`info` 
			 FROM `product` 
			 ORDER BY `id` DESC 
			 LIMIT '.$count
			 .' OFFSET '. $offset);

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
	public static function getProductListByCategory($categoryId = false,$page = 1)
	{
		if($categoryId)
		{
			$page = intval($page);
			$offset = ($page - 1) * self::SHOW_BY_DEFAULT;
			
			$db = Db::getConnection();
			$products = array();
			$result = $db->query(
				"SELECT `id`, `title`, `price`, `image`, `rating`, `brand`, `is_sale`,`info` 
				 FROM `product` 
				 WHERE `category` = '$categoryId' 
				 ORDER BY `id` DESC 
				 LIMIT ".self::SHOW_BY_DEFAULT. 
				" OFFSET ".$offset
			);
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


	public static function getProdustsByIds($idsArray)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Превращаем массив в строку для формирования условия в запросе
        $idsString = implode(',', $idsArray);

        // Текст запроса к БД
        $sql = "SELECT * FROM product WHERE status='1' AND id IN ($idsString)";

        $result = $db->query($sql);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        
        $i = 0;
        $products = array();
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['code'] = $row['code'];
            $products[$i]['title'] = $row['title'];
            $products[$i]['price'] = $row['price'];
            $i++;
        }
        return $products;
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
	public static function getTotalProduct()
	{
		$db = Db::getConnection();

		$result = $db->query('SELECT count(id) AS count
			FROM `product`');
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$row = $result->fetch();

		return $row['count'];
	}
	public static function getTotalProductsInCategory($categoryId)
	{
		$db = Db::getConnection();

		$result = $db->query('SELECT count(id) AS count
			FROM `product`
			WHERE `category` = "'.$categoryId.'"');
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$row = $result->fetch();

		return $row['count'];
	}
}