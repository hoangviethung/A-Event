<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('obisys');
		$this->load->model('M_myweb');
	}

	public function index()
	{
		if($this->input->post()){
			$this->login();
		}
		$this->load->view('cms/auth/home');
	}

	public function logout(){
		unset($_SESSION['system']);
		return redirect(site_url("admin/login"));
	}

	public function login(){
		$data = $this->input->post();
		$get = $this->M_myweb->set('username',$data['username'])->set('password',$data['password'])->set_table('user')->get();
		print_r($get);
		if($get){
			$session = array(
				'id'			=> $get->id,
				'logged_in'		=>	true,
				'userName'		=>	$get->userName,
				'fullName'		=>	$get->fullName,
				'avatar'		=>	$get->avatar,
				'role'			=>	$get->role,
				'email'			=>	$get->email,
				'logid'			=>	$get->id,
				'token'			=>	randomString(30)
			);
			$_SESSION['system'] = (object)$session;
			$_SESSION['system_msg'] = messageDialog('div', 'success', 'Đăng nhập thành công, '.$get->userName);
			return redirect(site_url('admin/product'));
		}else{
			$_SESSION['system_msg'] = messageDialog('div', 'error', 'Tên đăng nhập hoặc tài khoản không chính xác');
						return redirect(site_url("admin/login"));
		}
	}
}