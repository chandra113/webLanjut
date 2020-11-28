<?php namespace App\Controllers;

class Login extends BaseController
{
    
	public function login()
	{
		echo view('/layout/header');
		echo view('/auth/login');
		echo view('/layout/footer');
	}

	//--------------------------------------------------------------------

}
