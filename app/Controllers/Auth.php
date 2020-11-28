<?php namespace App\Controllers;

class Auth extends BaseController
{
	

	public function login() 
	{
		if($this->request->getMethod() === 'post'){
			$rules = [
				'username' => 'required',
				'password' => 'required'
			];

			$validate = $this->validate($rules);
			if ($validate) {
				return redirect('/');
			} else{
				return redirect()->back()->withInput()->with('validation', $this->validator);
			}
		}
		echo view('/layout/header');
		echo view('/auth/login');
		echo view('/layout/footer');
	}
	

	public function register()
	{
		echo view('/layout/header');
		echo view('/auth/registration');
		echo view('/layout/footer');
	}

	public function logout()
	{
		echo view('/layout/header');
		echo view('/auth/login');
		echo view('/layout/footer');
	}

	public function regist()
	{
		echo view('/layout/header');
		echo view('/auth/regist');
		echo view('/layout/footer');
	}

}

// public function auth() 
//{

// 	$this->load->library('session');
// 	$this->load->library('form_validation');
// 	$this->load->helper('url'); 
	
// 	$this->form_validation->set_rules('username','Username','trim|required');
// 	$this->form_validation->set_rules('password','Password','trim|required|md5');

// 	if($this->form_validation->run()==false){
// 		$this->login();
// 	}else{
// 		 $user_session=array(
// 		  'Username'      => $this->input->post('username'),
// 		  'Password'      => $this->input->post('password'),
// 		  'is_logged_in'  => 1
// 	 );
// 	 $this->session->set_userdata('userlogin',$user_session);
// 	 $this->admin();
// 	}

// }




		// if($this->request->getMethod() === 'post'){
			
		// 	$rules = [
		// 		'username' => 'required',
		// 		'password' => 'required'
		// 	];

		// 	$validate = $this->validate($rules);
		// 	if($validate){
		// 		//pengecekan password
		// 		$username = $this->request->getPost('username');
		// 		$password = $this->request->getPost('password');

		// 		$userModel = new \App\Models\UserModel;
		// 		$user = $userModel->asObject()->where('username', $username)->orWhere('email', $username)->first();
		// 		if($user){
		// 			if(password_verify($password, $user->password)){
		// 				session()->set([
		// 					'username' => $user->username,
		// 					'email' => $user->email,
		// 					'logged_in' => TRUE
		// 				]);

		// 				return redirect('/');
		// 			}
		// 		}
				
		// 		return redirect()->back()->withInput()->with('error', 'username atau password salah');
		// 	} else{
		// 		return redirect()->back()->withInput()->with('validation', $this->validator);
		// 	}

		// }
		
	
		

