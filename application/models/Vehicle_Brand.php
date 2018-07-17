<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vehicle_Brand
 *
 * @author User
 */
class Vehicle_Brand extends MY_Model{

    //put your code here
    const DB_TABLE = 'dg_vehicle_brand';
    const DB_TABLE_PK = 'brand_code';
    
    public $brand_code;
    public $decription;
    
}
