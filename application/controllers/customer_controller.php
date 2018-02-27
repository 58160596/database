<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer_controller extends CI_Controller {

	
	public function index()
	{
		$this->load->model('customer_model');
		$datas = $this->customer_model->get_customer();
		$datashow['customer'] = $datas;
		$this->load->view('customer_view',$datashow);
	}

}