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


		require_once(ROOT.'/views/cabinet/edit.php');
		return true;
	}


}