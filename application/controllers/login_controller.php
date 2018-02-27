<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_controller extends CI_Controller {

	
	public function index()
	{
		$this->load->view('login_view');
	}
	
	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if ($username == "admin" && $password == "123456789"){
			redirect('home_controller');
		}
		else{
			redirect('login_controller');
		}
	}
}
