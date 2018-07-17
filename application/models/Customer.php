<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 *
 * @author ravi
 */
class Customer extends MY_Model {

    const DB_TABLE = 'dg_customer';
    const DB_TABLE_PK = 'id';

    public $id;
    public $first_name;
    public $last_name;
    public $nic;
    public $pword;
    public $mobile_number;
    public $address;
    public $email;
    public $status_code;
    public $created_user;

    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

    public function getLogin($formData) {
        $this->db->select('customer.*');
        $this->db->from('customer');
        $pword = sha1($formData['password']);
        $where = " status = 'ACTIVE' AND email = '".$formData['email']."' AND password = '".$pword."'";
        $this->db->where($where);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
}
