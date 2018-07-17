<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Center
 *
 * @author User
 */
class Center extends MY_Model {

    const DB_TABLE = 'dg_center';
    const DB_TABLE_PK = 'id';

    public $id;
    public $center_name;
    public $address;
    public $mobile;
    public $email;
//    public $created_datetime;
    public $created_user;
    public $district_name;
    
    
    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }
    
    
    
    public function getCenterList() {
        $this->db->select('dg_center.*,dg_district.district_name');
        $this->db->from('dg_center');
//        $where = " effectdate = " . $effectdate;
//        $this->db->where($where);
        $this->db->join('dg_district','dg_center.district_name = dg_district.district_name');
        $query = $this->db->get();

        $result = $query->result();
        if ($result) {
            return $result;
        } else {
            return FALSE;
        }
    }
    
    
}
