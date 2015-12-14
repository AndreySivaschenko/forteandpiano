<?php
		
class Product
{
	const SHOW_BY_DEFAULT = 6;

	public static function getProductList()
	{
		$db = Db::getConnection();

		$result = $db->query('SELECT `id`, `title`, `price`,`code`
							  FROM `product` 
							  ORDER BY `id` ASC');
		$i = 0;
		$productList = array();
		while($row = $result->fetch()){
			$productList[$i]['id']=$row['id'];
			$productList[$i]['title']=$row['title'];
			$productList[$i]['price']=$row['price'];
			$productList[$i]['code']=$row['code'];
			$i++;
		}
		return $productList;
	}

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
	//Управление товарами
	public function createProduct($options)
	{
		$db=Db::getConnection();

		$sql = 'INSERT INTO `product`
				(`title`,`price`,`category`,`scategory`,`info`,`description`,`rating`,`brand`,
					`is_new`,`is_recommend`,`is_sale`,`availability`,`status`,`code`)
				VALUES (:title,:price,:category,:scategory,:info,:description,0,:brand,
					:is_new,:is_recommend,:is_sale,:availability,:status,:code)';
		$result=$db->prepare($sql);
		$result->bindParam(':title',$options['title'],PDO::PARAM_STR);
		$result->bindParam(':price',$options['price'],PDO::PARAM_STR);
		$result->bindParam(':category',$options['category_id'],PDO::PARAM_STR);
		$result->bindParam(':scategory',$options['subcategory_id'],PDO::PARAM_STR);
		$result->bindParam(':info',$options['info'],PDO::PARAM_STR);
		$result->bindParam(':description',$options['description'],PDO::PARAM_STR);
		$result->bindParam(':brand',$options['brand'],PDO::PARAM_STR);
		$result->bindParam(':is_new',$options['is_new'],PDO::PARAM_INT);
		$result->bindParam(':is_recommend',$options['is_recommended'],PDO::PARAM_INT);
		$result->bindParam(':is_sale',$options['sale'],PDO::PARAM_INT);
		$result->bindParam(':availability',$options['availability'],PDO::PARAM_INT);
		$result->bindParam(':status',$options['status'],PDO::PARAM_INT);
		$result->bindParam(':code',$options['code'],PDO::PARAM_STR);
		if($result->execute())
		{
			return $db->lastInsertId();
		}
		return 0;
	}

	public function updateProductById($id, $options)
	{
		$db = Db::getConnection();

		$sql = 'UPDATE `product`
				SET
					`title` = :title,
					`price` = :price,
					`category` = :category,
					`scategory` = :scategory,
					`info` = :info,
					`description` = :description,
					`brand` = :brand,
					`is_new` = :is_new,
					`is_recommend` = :is_recommend,
					`is_sale` = :is_sale,
					`availability` = :availability,
					`status` = :status,
					`code` = :code
				WHERE `id` = :id';

		$result = $db->prepare($sql);
		$result->bindParam(':id',$id,PDO::PARAM_INT);
		$result->bindParam(':title',$options['title'],PDO::PARAM_STR);
		$result->bindParam(':price',$options['price'],PDO::PARAM_STR);
		$result->bindParam(':category',$options['category_id'],PDO::PARAM_STR);
		$result->bindParam(':scategory',$options['subcategory_id'],PDO::PARAM_STR);
		$result->bindParam(':info',$options['info'],PDO::PARAM_STR);
		$result->bindParam(':description',$options['description'],PDO::PARAM_STR);
		$result->bindParam(':brand',$options['brand'],PDO::PARAM_STR);
		$result->bindParam(':is_new',$options['is_new'],PDO::PARAM_INT);
		$result->bindParam(':is_recommend',$options['is_recommended'],PDO::PARAM_INT);
		$result->bindParam(':is_sale',$options['sale'],PDO::PARAM_INT);
		$result->bindParam(':availability',$options['availability'],PDO::PARAM_INT);
		$result->bindParam(':status',$options['status'],PDO::PARAM_INT);
		$result->bindParam(':code',$options['code'],PDO::PARAM_STR);
		return $result->execute();
	

	}

	public function deleteProductById($id)
	{
		$db = Db::getConnection();

		$sql = 'DELETE FROM `product`
				WHERE `id` = :id';

		$result=$db->prepare($sql);
		$result->bindParam(':id',$id,PDO::PARAM_INT);
		return $result->execute();
	}

	public static function getImage($id)
	{
		$noImage = 'no-image.jpg';

		$path = '/upload/images/products/';

		$pathToProductImage = $path.$id.'.jpg';
		if(file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage))
			return $pathToProductImage;
		return $path.$noImage;
	}
}