<?php
if($Module == 'register' and $_POST['registration'] ){
	$_POST['E-mail'] = FormChars($_POST['E-mail']);
	$_POST['password'] = GeneratePassword($_POST['password'],$_POST['E-mail']);
	$_POST['captcha']=FormChars($_POST['captcha']);
	
	if(!$_POST['E-mail'])
		MessageSend(1, 'Введи E-mail');

	echo $_POST['E-mail'].' '.$_POST['password'];
}

?>