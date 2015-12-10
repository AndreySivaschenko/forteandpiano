<?php

class CabinetController
{
	public function actionIndex()
	{
		$user = new User();
		$userId = $user->checkLogged();
		
		require_once(ROOT.'/views/cabinet/index.php');
		return true;
	}

	public function actionEdit()
	{
		$user = new User();
		//Получаем информацию о пользователе из сессии  
		$userId = $user->checkLogged();
		//получаем инф-ию о пользователе из БД
		$userProfile = $user->getUserById($userId);
		$profileData = $user->getProfileByUserId($userId);
		
		$email = $userProfile['email'];
		$password = $userProfile['password'];

		$name = $profileData['name'];
		$sname = $profileData['sname'];
		$phone = $profileData['phone'];
		$country = $profileData['country'];
		$region = $profileData['region'];
		$city = $profileData['city'];
		$address = $profileData['address'];
		$city_index = $profileData['city_index'];

		$result = false;

		if(isset($_POST['save_edit'])){
			$email = $_POST['email'];
		

			$name = $_POST['uname'];
			$sname = $_POST['usname'];
			$phone = $_POST['uphone'];
			$country = $_POST['ucountry'];
			$region = $_POST['uregion'];
			$city = $_POST['ucity'];
			$address = $_POST['uaddress'];
			$city_index = $_POST['uindex'];
			$n_password = $_POST['n_password'];
			$o_password = $_POST['o_password'];
			
			$errors = false;
			
			if($_POST['o_password'] or $_POST['n_password'])
			{
				if(empty($o_password)) 
					$errors [] = 'Не указан старый пароль';
				if(empty($n_password)) 
					$errors [] = 'Не указан новый пароль';
				if(!$user->checkedPassword($password, $o_password))
					$errors[] = 'Старый пароль указан неверно';
				if($errors == false)
					$npassword = $_POST['n_password'];
			}
			
			if(!User::checkEmail($email))
				$errors[]='Неправильный Email';
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
			if(!User::checkIndex($city_index))
				$errors[]='Индекс должен быть более 4-х символов';
			if($errors == false){
				$result = $user->edit($userId,$email,$password,$npassword,$name,$sname,$phone,$country,$region,$city,$address,$city_index);
			}
		}




		require_once(ROOT.'/views/cabinet/edit.php');
		return true;
	}


}