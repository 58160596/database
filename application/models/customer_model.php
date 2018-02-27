<?php

class customer_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_customer(){
        $query = $this->db->query("SELECT * FROM `customer` WHERE 1");

        return $query->result_array();
    }


}