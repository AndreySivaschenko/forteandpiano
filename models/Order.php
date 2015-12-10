<?php

class Order
{
	public static function save($userName,$userPhone,$userCity,$userAddress,$userComment,$userId,$products)
	{
		
		$db = Db::getConnection();

		   $sql = 'INSERT INTO product_order (user_name,user_phone,user_city,user_address,user_comment,id_user,products)
		   		   VALUES (:user_name, :user_phone,:user_city,:user_address,:user_comment, :user_id, :products)';
		
		$products = json_encode($products);

		$result = $db->prepare($sql);
		$result->bindParam(':user_name',$userName,PDO::PARAM_STR);
		$result->bindParam(':user_phone',$userPhone,PDO::PARAM_STR);
		$result->bindParam(':user_city',$userCity,PDO::PARAM_STR);
		$result->bindParam(':user_address',$userAddress,PDO::PARAM_STR);
		$result->bindParam(':user_comment',$userComment,PDO::PARAM_STR);
		$result->bindParam(':user_id',$userId,PDO::PARAM_STR);
		$result->bindParam(':products',$products,PDO::PARAM_STR);

	 	 return $result->execute();
	}
}
?>
