<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vehicle
 *
 * @author User
 */
class Vehicle extends MY_Model {

    //put your code here
    const DB_TABLE = 'dg_vehicle';
    const DB_TABLE_PK = 'id';

    public $id;
    public $manufac_year;
    public $stroke;
    public $reg_no;
    public $type_code;
    public $fual_type;
    public $brand_code;
    public $customer_id;
    public $created_datetime;
    public $created_userid;

    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

    public function getCustomerVehicles($customer_id) {
        $this->db->select('dg_vehicle.*,dg_customer.id AS customer_id,dg_customer.nic,dg_customer.first_name');
        $this->db->from('dg_vehicle');
        $this->db->join('dg_customer', 'dg_customer.id = dg_vehicle.customer_id');
        $this->db->where('dg_customer.id =', $customer_id);
        $query = $this->db->get();
        return $query->result();
    }

    
    
    
    
}
