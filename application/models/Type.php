<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Type
 *
 * @author User
 */
class Type extends MY_Model {

    const DB_TABLE = 'dg_vehicle_type';
    const DB_TABLE_PK = 'type_code';
    
    public $type_code;
    public $description;

}
