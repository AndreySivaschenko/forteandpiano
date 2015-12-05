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
}