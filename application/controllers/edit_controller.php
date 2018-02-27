<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit_controller extends CI_Controller {

	
	public function index()
	{
		$num_personal = $this->input->get('per_num');
		$this->load->model('edit_model');
		$datas = $this->edit_model->get_personal($num_personal);
		$datashow['data_personal'] = $datas;

		$this->load->view('edit_view',$datashow);
	}
	public function update()
	{
		$this->load->model('edit_model');
		$datas = $this->edit_model->update();
		
	}


}