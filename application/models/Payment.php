<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Payment
 *
 * @author User
 */
class Payment extends MY_Model {

    const DB_TABLE = 'dg_payment';
    const DB_TABLE_PK = 'id';

    //put your code here
    public $id;
    public $vehicle_id;
    public $status_code;
    public $expire_date;
//    public $created_datetime;
    public $created_userid;
    public $amount;
    public $inspection_id;

    public function getPaymentByInspetionID($inspection_id) {
        $this->db->select('dg_payment.*');
        $this->db->from('dg_payment');
        $where = " inspection_id = '" . $inspection_id . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

}
