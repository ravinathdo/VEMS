<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Booking
 *
 * @author User
 */
class Booking extends MY_Model {

    //put your code here
    const DB_TABLE = 'dg_booking';
    const DB_TABLE_PK = 'id';

    public $id;
    public $book_date_time;
    public $customer_id;
    public $vehicle_id;
    public $status_code;
//    public $created_datetime;
    public $created_user;
    public $center_id;

    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

    public function getCustomerBooking($customer_id) {
        $this->db->select('dg_booking.*');
        $this->db->from('dg_booking');
        $where = " customer_id = '" . $customer_id . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
    
    
    public function getCenterBooking($center_id) {
        $this->db->select('dg_booking.*');
        $this->db->from('dg_booking');
        $where = " center_id = '" . $center_id . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
    
    

}