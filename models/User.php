<?php

class User
{
	private function generationPassword($password)
	{
		$password =	md5('ForteAndPiano'.md5($password));
		return $password;
	}
	public function register($email, $password)
	{
		$db = Db::getConnection();

		$password = self::generationPassword($password);

		$sql = 'INSERT INTO `users` (email, password,active)
				VALUES(:email,:password,1)';

		$result = $db->prepare($sql);
		$result->bindParam(':email', $email, PDO::PARAM_STR);
		$result->bindParam(':password',$password ,PDO::PARAM_STR);

		return $result->execute(); 
	}

	public function addProfile($name,$sname,$phone,$country,$region,$city,$address,$index,$userId) 
	{
		$db = Db::getConnection();

		$sql = 'INSERT INTO `profile` (name,sname,phone,country,region,city,address,city_index,id_user)
				VALUES(:name,:sname,:phone,:country,:region,:city,:address,:city_index,:id_user)';
	
		$result = $db->prepare($sql);
		$result->bindParam(':name',$name,PDO::PARAM_STR);
		$result->bindParam(':sname',$sname,PDO::PARAM_STR);
		$result->bindParam(':phone',$phone,PDO::PARAM_STR);
		$result->bindParam(':country',$country,PDO::PARAM_STR);
		$result->bindParam(':region',$region,PDO::PARAM_STR);
		$result->bindParam(':city',$city,PDO::PARAM_STR);
		$result->bindParam(':address',$address,PDO::PARAM_STR);
		$result->bindParam(':city_index',$index,PDO::PARAM_STR);
		$result->bindParam(':id_user',$userId,PDO::PARAM_STR);

		return $result->execute();

	}
	public static function checkName($name)
	{
		if(strlen($name)>=2)
			return true;
		return false;
	}
	public static function checkSname($sname)
	{
		if(strlen($sname)>=2)
			return true;
		return false;
	}
	public static function checkPhone($phone)
	{
		if(strlen($phone)>=7)
			return true;
		return false;
	}
	public static function checkCountry($country)
	{
		if(strlen($country)>=2)
			return true;
		return false;
	}
	public static function checkRegion($region)
	{
		if(strlen($region)>=2)
			return true;
		return false;
	}
	public static function checkCity($city)
	{
		if(strlen($city)>=2)
			return true;
		return false;
	}
	public static function checkAddress($address)
	{
		if(strlen($address)>=5)
			return true;
		return false;
	}
	public static function checkIndex($index)
	{
		if(strlen($index)>=4)
			return true;
		return false;
	}
	public static function checkEmail($email)
	{
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
			return true;
		
		return false;
	}
	public static function checkPassword($password)
	{
		if(strlen($password)>=6)
			return true;
		return false;
	}
	public static function checkCaptcha($captcha)
	{
		if(strlen($captcha)==5)
			return true;
		return false; 
	}
	public static function checkValidateCaptcha($captcha)
	{
		if($_SESSION['captcha']==md5($captcha))
			return true;
		return false; 
	}
	public static function checkEmailExists($email){
		$db = Db::getConnection();

		$sql = 'SELECT COUNT(*)
		FROM `users`
		WHERE email = :email';

		$result = $db->prepare($sql);
		$result -> bindParam(':email',$email,PDO::PARAM_STR);
		$result -> execute();

		if($result->fetchColumn())
			return true;
		return false;
	}
	public function checkUserData($email, $password)
	{
		$db = Db::getConnection();

		$password = self::generationPassword($password);

		$sql = 'SELECT *
				FROM `users` 
				WHERE `email` = :email AND `password` = :password';

		$result = $db->prepare($sql);
		$result -> bindParam(':email', $email, PDO::PARAM_INT);
		$result -> bindParam(':password',$password,PDO::PARAM_INT);
		$result->execute();

		$user = $result->fetch();
		if($user)
		{
			return $user['id'];
		}
		return false;

	}
	public function checkProfileData($userId)
	{
		$db = Db::getConnection();

		$sql = 'SELECT *
				FROM `profile`
				WHERE `id_user` = :userId';
		$result = $db->prepare($sql);
		$result ->bindParam(':userId',$userId,PDO::PARAM_INT);
		$result ->execute();

		if($result->fetchColumn())
			return true;
		return false;
	}

	public function auth($userId)
	{
		$_SESSION['user'] = $userId;
	}
	public function checkLogged()
	{
		if(isset($_SESSION['user']))
			return $_SESSION['user'];
		header('Location: /user/login'); 
	}
	public function isUser()
	{
		if(isset($_SESSION['user']))
			return $_SESSION['user'];
	}
	public static function isGuest()
	{
		if(isset($_SESSION['user']))
			return false;
		return true;
	}
	public function getUserById($userId)
	{
		if($userId)
		{
			$db = Db::getConnection();
			$sql = 'SELECT *
					FROM `users` 
					WHERE `id` = :userId';

			$result = $db->prepare($sql);
			$result->bindParam(':userId',$userId,PDO::PARAM_INT);
			$result->setFetchMode(PDO::FETCH_ASSOC);
			$result->execute();

			return $result->fetch();
		}
	}
}