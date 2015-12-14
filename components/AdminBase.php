<?php

abstract class AdminBase
{


	public static function checkAdmin()
	{
		$users = new User();
		//Проверка на авторизацию
		$userId = $users->checkLogged();
		//Получаем информацию о текущем пользователе
		$user=$users->getUserById($userId);

		if($user['role']=='admin')
			return true;

		die('Access denied');
	}
}