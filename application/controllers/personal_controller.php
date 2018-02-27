<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class personal_controller extends CI_Controller {

	
	public function index()
	{
		$this->load->model('personal_model');
		$datas = $this->personal_model->get_personal();
		$datashow['personal'] = $datas;
		$datas = $this->personal_model->get_rank();
		$datashow['rank'] = $datas;
		$datas = $this->personal_model->get_dep();
		$datashow['dep'] = $datas;
		
		$this->load->view('personal_view',$datashow);
	}

	public function add_personal()
	{
		$this->load->model('personal_model');
		$this->personal_model->add_personal();
		redirect('personal_controller');
	}
}