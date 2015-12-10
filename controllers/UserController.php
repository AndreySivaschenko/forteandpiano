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
	public function actionProfile()
	{
		$name = '';
		$sname = '';
		$phone = '';
		$country = '';
		$region = '';
		$city = '';
		$address = '';
		$index = '';
		$userId='';
		$user = new User();

		$result = false;

		if(isset($_POST['add_profile']))
		{
			$name = $_POST['u_name'];
			$sname = $_POST['u_sname'];
			$phone = $_POST['u_phone'];
			$country = $_POST['u_country'];
			$region = $_POST['u_region'];
			$city = $_POST['u_city'];
			$address = $_POST['u_address'];
			$index = $_POST['u_index'];
			$userId = $user->getUserById($user->isUser());
			$errors = false;

			if(!User::checkName($name))
				$errors[]='Имя должно быть более 2-х символов';
			if(!User::checkSname($sname))
				$errors[]='Фамилия должна быть более 2-х символов';
			if(!User::checkPhone($phone))
				$errors[]='Телефон должен быть более 7-ми символов';
			if(!User::checkCountry($country))
				$errors[]='Страна должна быть более 2-х символов';
			if(!User::checkRegion($region))
				$errors[]='Область должна быть более 2-х символов';
			if(!User::checkCity($city))
				$errors[]='Город должен быть более 2-х символов';
			if(!User::checkAddress($address))
				$errors[]='Адрес должен быть более 5-ти символов';
			if(!User::checkIndex($index))
				$errors[]='Индекс должен быть более 4-х символов';

			if($errors == false)
			{
				$result = $user->addProfile($name,$sname,$phone,$country,$region,$city,$address,$index,$userId['id']);
				header("Location: /");
				
			}
		}


		require_once(ROOT.'/views/user/profile.php');
		return true;
	}
	public function actionLogin()
	{
		$email = '';
		$password = '';

		$user = new User();
		
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
			$userId = $user->checkUserData($email, $password);
			$userProfile = $user->checkProfileData($userId);
			if($userId == false){
				$errors[]='Не верные данные для входа на сайт';
			} 
			else{
				$user->auth($userId);
				if($userProfile==false){
					header('Location: /user/profile');
				}
				else
					header('Location: /');
			}
		}
		require_once(ROOT.'/views/user/login.php');
		return true;
	}

	public function actionLogout()
	{
		unset($_SESSION['user']);
		header('Location: /');
	}



}