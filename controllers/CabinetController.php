<?php

class CabinetController
{
	public function actionIndex()
	{
		
		require_once(ROOT.'/views/cabinet/index.php');
		return true;
	}

	public function actionProfile()
	{


		require_once(ROOT.'/views/cabinet/profile.php');
		return true;
	}
	public function actionEdit()
	{


		require_once(ROOT.'/views/cabinet/edit.php');
		return true;
	}


}