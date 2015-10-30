<?php
session_start();
include_once 'setting.php';
$CONNECT = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

if($_SERVER['REQUEST_URI']=='/'){ //
	$Page = 'index';
	$Module = 'index';
}else{
	$URL_Path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // parse_url - парсит URL н
	$URL_Parts = explode('/', trim($URL_Path, ' /'));
	$Page = array_shift($URL_Parts);
	$Module = array_shift($URL_Parts);

	if(!empty($Module)){
		$Param = array();
		for($i = 0; $i<count($URL_Parts); $i++){
			$Param[$URL_Parts[$i]] = $URL_Parts[++$i];
		}
	}
}

if($Page =='index' and $Module=='index')
	include('page/index.php');
else if ($Page=='account')
	include('form/account.php');

function MessageSend($p1,$p2,$p3=''){
	if ($p1 == 1)
		$p1='Ошибка';
	else if($p1 == 2)
		$p1 = 'Подсказка';
	else if($p1 == 3)
		$p1 = 'Информация';
	$_SESSION['message'] = '<div class="eror_avtoriz"> <b>'.$p1.'</b>: '.$p2.'</div>';
	if ($p3)
		$_SERVER['HTTP_REFERER'] = $p3;
	exit(header('Location: '.$_SERVER['HTTP_REFERER']));
}
function MessageShow(){
	if($_SESSION['message'])
		$Message = $_SESSION['message'];
	echo $Message;
	$_SESSION['message']=array();
}

function GeneratePassword($p1,$p2){
	return md5('No'.md5('Kolia'.$p1.'Forte').md5('And'.$p2.'Piano'));
}
function FormChars($p1){
	return nl2br(htmlspecialchars(trim($p1), ENT_QUOTES),fales);
}
?>