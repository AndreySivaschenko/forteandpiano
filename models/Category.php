<?php

class Category
{

	public static function getCategoryList()
	{
		$db = Db::getConnection();

		$categotyList = array();

		$result = $db->query('SELECT `id_category`, `title` FROM `categories`');

		$i=0;
		while ($row = $result->fetch()){
			$categotyList[$i]['id_category'] = $row ['id_category'];
			$categotyList[$i]['title'] = $row ['title'];
			$i++;
		}		
		return $categotyList;
	}

}