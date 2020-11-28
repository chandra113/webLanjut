<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('nav/header_nav');
		echo view('/index');
		echo view('nav/footer_nav');
	}

	public function about()
	{
		echo view('nav/header_nav');
		echo view('/home');
		echo view('nav/footer_nav');
	}
	//--------------------------------------------------------------------
	public function admin()
	{
		echo view('/admin');
		
	}
}
