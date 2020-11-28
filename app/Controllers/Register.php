<?php namespace App\Controllers;

class Register extends BaseController
{
	public function register()
	{
		echo view('/layout/header');
		echo view('/auth/registration');
		echo view('/layout/footer');
	}

	//--------------------------------------------------------------------

}
