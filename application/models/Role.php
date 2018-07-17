<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Role
 *
 * @author User
 */
class Role extends MY_Model {
    
    const DB_TABLE = 'dg_user_role';
    const DB_TABLE_PK = 'role_code';

    public $role_code;
    public $description;
    
}
