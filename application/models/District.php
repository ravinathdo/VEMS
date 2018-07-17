<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of District
 *
 * @author User
 */
class District extends MY_Model {

    const DB_TABLE = 'dg_district';
    const DB_TABLE_PK = 'district_name';
    
    public $district_name;

    //put your code here
    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }
}
