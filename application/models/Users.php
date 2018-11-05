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

    const DB_TABLE = 'dg_user';
    const DB_TABLE_PK = 'id';

    public $id;
    public $first_name;
    public $last_name;
    public $nic;
    public $username;
    public $pword;
    public $mobile_number;
    public $address;
    public $role_code;
    public $center_id;
    public $status_code;
    public $created_user;

    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

    public function update_user($data, $id) {
        $this->db->where('dg_user.id', $id);
        return $this->db->update('dg_user', $data);
    }

    public function getUserLogin($formData) {

        $this->db->select('dg_user.*');
        $this->db->from('dg_user');
        $pword = sha1($formData['password']);
        $where = " status_code = 'ACTIVE' AND username = '" . $formData['username'] . "' AND pword = '" . $pword . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function getCustomerLogin($formData) {
        $this->db->select('dg_customer.*');
        $this->db->from('dg_customer');
        $pword = sha1($formData['pword']);
        $where = " status_code = 'ACTIVE' AND email = '" . $formData['email'] . "' AND pword = '" . $pword . "'";
//        echo $where;
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function getUserListOnCenter($centerid) {
        $this->db->select('dg_user.*,dg_center.center_name');
        $this->db->from('dg_user');
//        $where = " effectdate = " . $effectdate;
        $this->db->join('dg_center', 'dg_center.id = dg_user.center_id');
        $this->db->where('dg_user.center_id', $centerid);
        $query = $this->db->get();

        $result = $query->result();

        if ($result) {
            return $result;
        } else {
            return FALSE;
        }
    }

    public function getUserList() {
        $this->db->select('dg_user.*,dg_center.center_name');
        $this->db->from('dg_user');
//        $where = " effectdate = " . $effectdate;
//        $this->db->where($where);
        $this->db->join('dg_center', 'dg_center.id = dg_user.center_id');
        $query = $this->db->get();

        $result = $query->result();
        if ($result) {
            return $result;
        } else {
            return FALSE;
        }
    }

    public function getUser($param) {
        $this->db->select('dg_user.*');
        $this->db->from('dg_user');
        $where = " id = '" . $param . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

}
