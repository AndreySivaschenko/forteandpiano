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

	public function getCategoriesListAdmin()
	{
		$db = Db::getConnection();

		$result = $db->query('SELECT `id`, `title`,`id_category`
							FROM `categories`');

		$categotyList = array();
		$i = 0;
		while($row = $result->fetch())
		{
			$categotyList[$i]['id'] = $row['id'];
			$categotyList[$i]['title'] = $row['title'];
			$categotyList[$i]['id_category'] = $row['id_category'];
			$i++;
		}
		return $categotyList;
	}
	public function getSubCategoriesListAdmin()
	{
		$db = Db::getConnection();
		$id = self::getCategoriesListAdmin();
	

		$result = $db->query('SELECT `id`,`title`,`id_scategories`
							FROM `sub_categories`');

		$subCategotyList = array();
		$i = 0;
		while($row = $result->fetch())
		{
			$subCategotyList[$i]['id'] = $row['id'];
			$subCategotyList[$i]['title'] = $row['title'];
			$subCategotyList[$i]['id_scategories'] = $row['id_scategories'];
			$i++;
		}
		return $subCategotyList;
	}

}