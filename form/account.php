<?php
if($Module == 'logout' and $_SESSION['USER_LOGIN_IN']==1){
	if($_COOKIE['user']){
		setcookie('user','',strtotime('-15 days'), '/');
		unset($_COOKIE['user']);
	}
	session_unset();
	exit(header('Location: /'));
}


ULogin(0);

if($Module == 'register' and $_POST['registration'] ){

	$_POST['email'] = FormChars($_POST['email']);
	$_POST['password']=GeneratePassword(FormChars($_POST['password']), $_POST['login']);
	$_POST['captcha']=FormChars($_POST['captcha']);
	
	if($_SESSION['captcha']!=md5($_POST['captcha']))
		MessageSend(1, 'Каптча введена не верно!');
	if(!$_POST['email'] or $_POST['password']=='' or !$_POST['captcha'])
		MessageSend(1, 'Невозможно обработать форму!');

	$Row = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT `email` FROM `users` WHERE `email` = '$_POST[email]'"));

	if($Row['email'])
		MessageSend(1, 'Пользователь с данным E-mail: <b>'.$_POST['email'].'</b> уже зарегистрирован!');

	mysqli_query($CONNECT, "INSERT INTO `users` VALUES ('', '$_POST[email]', '$_POST[password]',0)");

	$Code = str_replace('=', '', base64_encode($_POST['email']));
	mail($_POST['email'],'Подтверждение регистрации в интернет-магазине "Forte&Piano"', 'Регистрация успешно завершина.

	Для входа в личный кабинет используйте данные которые вы ввели при регистрации
	

	Для подтверждения регистрации активируйте свою учетную запись, перейдя по ссылке: http://forteandpiano/account/activate/code/'.substr($Code, -5).substr($Code, 0, -5), 'From: Администрация интернет-магазина "Forte&Piano"');
	MessageSend(3, 'Регистрация аккаунта успешно завершена. На указанный E-mail: '.$_POST['email'].' отправленно письмо подтверждения регистрации.');
}	

else if ($Module == 'activate' and $Param['code']){
	if(!$_SESSION['USER_ACTIVE_EMAIL']){
		$Email = base64_decode(substr($Param['code'], 5).substr($Param['code'], 0,5));
		if(strpos($Email, '@') != false){
			mysqli_query($CONNECT, "UPDATE `users` SET `active` = 1 WHERE `email` = '$Email'");
			$_SESSION['USER_ACTIVE_EMAIL'] = $Email;
			MessageSend(3, 'Ваш E-mail адрес: <b>'.$Email.'</b> подтвержден!', '/');
		}
		else
			MessageSend(1, 'E-mail адрес не подтвержден!', '/');
	}
	else
		MessageSend(1, 'E-mail адрес <b>'.$_SESSION['USER_ACTIVE_EMAIL'].'</b> уже подтвержден!',"/");
}

if($Module == 'login' and $_POST['enter']){
	
	$_POST['email'] = FormChars($_POST['email']);
	$_POST['log_password'] = GeneratePassword(FormChars($_POST['log_password']),$_POST['login']);
	if(!$_POST['email'] or $_POST['log_password']==''){
		MessageSend(1, 'Невозможно обработать форму!');
	}
	$Row = mysqli_fetch_assoc(mysqli_query($CONNECT,"SELECT `password`,`active` FROM `users` WHERE `email` ='$_POST[email]'"));
	if($Row['password'] != $_POST['log_password']){
		MessageSend(1, 'Не верный логин или пароль!');
	}
	if($Row['active']==0)
		MessageSend(1, 'Ваш аккаунт не подтвержден!');
	$Row = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT `id`, `email` FROM `users` WHERE `email` = '$_POST[email]'"));

	$_SESSION['USER_ID'] = $Row['id'];
	$_SESSION['USER_EMAIL'] = $Row['email'];
	$_SESSION['USER_LOGIN_IN'] = 1;

	if($_REQUEST['remember'])
		setcookie('user',$_POST['log_password'], strtotime('+15 days'),'/');

	exit(header('Location: /'));
}

?>