<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Inspection
 *
 * @author User
 */
class Inspection extends MY_Model {

    const DB_TABLE = 'dg_inspection';
    const DB_TABLE_PK = 'id';

    public $id;
    public $vehicle_id;
    public $engine_type;
    public $created_datetime;
    public $created_user;
    public $inspec_result;
    public $booking_id;
    
    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

}
