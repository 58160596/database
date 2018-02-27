<?php

class edit_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_personal($num_personal){
        $query = $this->db->query("SELECT * FROM `personnel` WHERE PER_NUM = '$num_personal' ");

        return $query->result_array();
    }

    
}