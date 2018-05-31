<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer_Controller
 *
 * @author User
 */
class Customer_Controller extends CI_Controller{
    //put your code here
    public function loadCustomerRegistration(){
         $data['quoList'] = "Sample Data";
         $this->load->view('customer_registration_insertview',$data);
    }
    
    public function customerRegistration(){
        
    }
    
}
