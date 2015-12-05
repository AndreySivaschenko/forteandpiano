<?php

class UserController
{

	public function actionRegister()
	{
		$email = '';
		$password = '';
		$captcha = '';
		
		$result = false;

	
		if (isset($_POST['registration']))
		{
			$email = $_POST['email_reg'];
			$password = $_POST['password_reg']; 
			$captcha = $_POST['captcha'];
			
			$errors = false;

			//Проверка полей на валидность
			if(!User::checkEmail($email))
				$errors[] = 'Неправильный email!';
			if(!User::checkPassword($password))
				$errors[] = 'Пароль не должен быть короче 6 символов!';
			if(!User::checkCaptcha($captcha))
				$errors[] = 'Каптча должна быть 5 символов!';
			if(User::checkEmailExists($email))
				$errors[] = 'Такой email уже используется!';
			if(!User::checkValidateCaptcha($captcha))
				$errors[] = 'Каптча введена не верно!';

			if($errors == false)
			{
				$user = new User();
				$result = $user->register($email, $password);
			}
		}


		require_once(ROOT . '/views/user/register.php');
		return true;
	
	}
	public function actionLogin()
	{
		$email = '';
		$password = '';

		if(isset($_POST['login_btn']))
		{
			$email = $_POST['login_email'];
			$password = $_POST['login_password'];

			$errors = false;

			//Валидация полей
			if(!User::checkEmail($email))
				$errors[] = 'Неправильный Email';
			if(!User::checkPassword($password))
				$errors[] = 'Пароль не должен быть короче 6-ти символов';

			//Проверка существует ли пользователь
			$userId = User::checkUserData($email, $password);

			if($userId == false){
				$errors[]='Не верные данные для входа на сайт';
			} 
			else{
				$user = new User();
				$user->auth($userId);
			}
		}




		require_once(ROOT.'/views/user/login.php');
		return true;
	}



}