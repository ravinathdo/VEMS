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
class Customer_Controller extends CI_Controller {

    //put your code here
    public function loadCustomerRegistration() {
        $data['quoList'] = "Sample Data";
        $this->load->view('customer_registration_insertview', $data);
    }

    public function customerLogin() {
        echo 'customerLogin';
        $this->load->model(array('Users'));
        $formData = $this->Users->array_from_post(array('email', 'password'));
        echo '<tt><pre>' . var_export($formData, TRUE) . '</pre></tt>';

        $doLogin = $this->Users->getCustomerLogin($formData);

        // echo sha1('a');
        echo '<tt><pre>' . var_export($doLogin, TRUE) . '</pre></tt>';

        if ($doLogin) {

            $newdata = array(
                'userbean' => $doLogin[0],
                'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
            $this->load->view('home');
        } else {
            $data['msg'] = '<p class="bg-success"> Invalid username or password </p>';
            $this->load->view('index', $data);
        }
    }

    public function customerRegistration() {
        
    }

    public function loadCustomerReg() {
        $this->load->view('admin_customer_create');
    }

}
