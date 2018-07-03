<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author ravi
 */
class Users extends MY_Model {

    const DB_TABLE = 'users';
    const DB_TABLE_PK = 'id';

    public $id;
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $nic;
    public $mobileno;
    public $branchid;
    public $status;
    public $rolecode;
    public $usercreated;
    public $datecreated;

    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

    public function getUserLogin($formData) {
        $this->db->select('users.*');
        $this->db->from('users');
        $pword = sha1($formData['password']);
        $where = " status = 'ACTIVE' AND username = '" . $formData['email'] . "' AND password = '" . $pword . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
    public function getCustomerLogin($formData) {
        $this->db->select('customer.*');
        $this->db->from('customer');
        $pword = sha1($formData['password']);
        $where = " status = 'ACTIVE' AND email = '" . $formData['email'] . "' AND password = '" . $pword . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

}
