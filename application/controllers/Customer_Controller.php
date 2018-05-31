<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer_Controller
 * @author User
 */
class Customer_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        #$this->load->helper('');
        $this->load->model('customer_model');
    }

    //get data as array from post
    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

    public function loadCustomerRegistration() {
        $data['customer_list'] = $this->customer_model->get_all_customer();
        $this->load->view('customer_registration_insertview', $data);
    }

    public function customerRegistration() {
        echo 'customerRegistration';
        $fields = array('first_name', 'last_name');
        $field_data = $this->array_from_post($fields);
        echo '<tt><pre>' . var_export($field_data, TRUE) . '</pre></tt>';
        //set data to db
        $this->customer_model->setCustomer($field_data);

        $data['msg'] = '<p class="bg-success msg">New customer created successfully</p>';
        $data['customer_list'] = $this->customer_model->get_all_customer();
        $this->load->view('customer_registration_insertview', $data);
    }

}
