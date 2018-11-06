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

    
    
    
    public function getCustomerStatusBooking($customer_id,$status_code) {
//        echo $customer_id;
//        echo $status_code;
        $this->db->select('dg_booking.*');
        $this->db->from('dg_booking');
        $where = "dg_booking.customer_id = '" . $customer_id . "' AND dg_booking.status_code = '".$status_code."' ";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
    
    
    public function getCenterBooking($center_id) {
        $this->db->select('dg_booking.*,dg_center.center_name');
        $this->db->from('dg_booking');
        $this->db->join('dg_center','dg_center.id = dg_booking.center_id');
        $where = " dg_booking.center_id = '" . $center_id . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
    
    public function getCenterBookingStatus($center_id,$statuscode) {
        $this->db->select('dg_booking.*,dg_center.center_name');
        $this->db->from('dg_booking');
        $this->db->join('dg_center','dg_center.id = dg_booking.center_id');
        $where = " dg_booking.center_id = '" . $center_id . "' AND dg_booking.status_code = '".$statuscode."'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
    
    
    

    public function getCenterOPENBookings($center_id) {
        $this->db->select('dg_booking.*');
        $this->db->from('dg_booking');
        $where = " center_id = '" . $center_id . "' AND status_code = 'OPEN' ";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function getBookingDetails($bookng_id) {
        $this->db->select('dg_booking.*,dg_customer.first_name,dg_customer.nic');
        $this->db->from('dg_booking');
        $this->db->join('dg_customer',"dg_customer.id = dg_booking.customer_id");
        $where = " dg_booking.id = '" . $bookng_id . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
    
    public function update_booking($data, $id) {
        $this->db->where('dg_booking.id', $id);
        return $this->db->update('dg_booking', $data);
    }
    

}
