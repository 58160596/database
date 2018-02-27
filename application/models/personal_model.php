<?php

class personal_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_personal(){
        $query = $this->db->query("SELECT * FROM `personnel` WHERE 1");

        return $query->result_array();
    }

    public function add_personal(){
        $date = $this->input->post('PER_BIRTH');
        $date = str_replace('/','-',$date);
        $data = array(
            'PER_ID' => $this->input->post('PER_ID'),
            'PER_FNAME'=> $this->input->post('PER_FNAME'),
            'PER_LNAME'=> $this->input->post('PER_LNAME'),
            'PER_SEX'=> $this->input->post('PER_SEX'),
            'PER_AGE'=> $this->input->post('PER_AGE'),
            'PER_BIRTH'=> date('Y-m-d',strtotime($date)),
            'PER_ADDRESS'=> $this->input->post('PER_ADDRESS'),
            'PER_TEL'=> $this->input->post('PER_TEL'),
            'PER_EMAIL'=> $this->input->post('PER_EMAIL'),
            'PER_NATIONALITY'=> $this->input->post('PER_NATIONALITY'),
            'PER_RELIGION'=> $this->input->post('PER_RELIGION'),
            'PER_SCHOOL'=> $this->input->post('PER_SCHOOL'),
            'PER_GPA'=> $this->input->post('PER_GPA'),
            'PER_MAJOR'=> $this->input->post('PER_MAJOR'),
            'PER_ACCNUM'=> $this->input->post('PER_ACCNUM'),
            'PER_SALARY'=> $this->input->post('PER_SALARY'),
            'RANK_ID'=> $this->input->post('RANK_ID'),
            'DEP_ID'=> $this->input->post('DEP_ID')
        );
        $this->db->insert('personnel',$data);
       
    }
    
    public function get_rank()
    {
        $query = $this->db->query("SELECT * FROM `rank` WHERE 1");
        return $query->result_array();

    }

    public function get_dep()
    {
        $query = $this->db->query("SELECT * FROM `department` WHERE 1");
        return $query->result_array();
    }
}