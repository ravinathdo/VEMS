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

    public function loadHome() {
        $this->load->model(array('Booking'));
        //refesh customer open bookings
        $booking = new Booking();
        $customer_id = $this->session->userdata('userbean')->id;
        $openBookings = $booking->getCustomerStatusBooking($customer_id, 'OPEN');
        $this->session->set_userdata(array('openBookings' => $openBookings));
        $this->load->view('home');
    }

    //put your code here
    public function loadCustomerRegistration() {
        $data['quoList'] = "Sample Data";
        $this->load->view('customer_registration_insertview', $data);
    }

    public function customerLogin() {
//        echo 'customerLogin';
        $this->load->model(array('Users','Booking'));
        $booking = new Booking();
        $formData = $this->Users->array_from_post(array('email', 'pword'));
//        echo '<tt><pre>' . var_export($formData, TRUE) . '</pre></tt>';
        $doLogin = $this->Users->getCustomerLogin($formData);

        // echo sha1('a');
//        echo '<tt><pre>' . var_export($doLogin, TRUE) . '</pre></tt>';

        if ($doLogin) {
            //get login date 
            date_default_timezone_set('Asia/Colombo');
            $today = date("Y-m-d", time());
            $newdata = array(
                'userbean' => $doLogin[0],
                'logged_in' => TRUE,
                'today' => $today
            );
            $this->session->set_userdata($newdata);
            
            
            //customer dash bord - my open booking count
            $customer_id = $this->session->userdata('userbean')->id;
            $openBookings = $booking->getCustomerStatusBooking($customer_id, 'OPEN');
            $this->session->set_userdata(array('openBookings' => $openBookings));



            $this->load->view('home');
        } else {
            $data['msg'] = '<p class="bg-danger msg-err"> Invalid username or password </p>';
            $this->load->view('index', $data);
        }
    }

    public function customerRegistration() {
        $this->load->model(array('Customer'));
        $customer = new Customer();
        $data['msg'] = 'Test';

        $post_data = $customer->array_from_post(array('first_name', 'last_name', 'nic', 'mobile_number', 'email', 'pword', 'repword', 'address', 'status_code'));

        $customer->first_name = $post_data['first_name'];
        $customer->last_name = $post_data['last_name'];
        $customer->nic = $post_data['nic'];
        $customer->pword = sha1($post_data['pword']);
        $customer->mobile_number = $post_data['mobile_number'];
        $customer->email = $post_data['email'];
        $customer->status_code = 'ACTIVE';
        $customer->address = $post_data['address'];

        //validate Inputs
        //check password match
        if (strlen($post_data['pword']) >= 6 && ($post_data['pword'] == $post_data['repword'])) {
            $customer->save();
            $db_error = $this->db->error();
            if ($db_error['code'] == 0) {
                $data['msg'] = '<p class="bg-success msg-success">Registration has been sucessful please login</p>';
            } else {
                $data['msg'] = '<p class="bg-danger msg-err">Invalid input or duplicate entry</p>';
            }
        } else {
            $data['msg'] = '<p class="bg-danger msg-err">Invalid password</p>';
        }

        //get customer list
        $data['customerList'] = $customer->get();
        $this->load->view('msg', $data);
    }

    public function loadCustomerReg() {
        $this->load->model(array('Customer'));
        $customer = new Customer();


        //get customers for branch
        $data['customerList'] = $customer->get();


        $data['msg'] = null;
        $this->load->view('admin/admin_customer_create', $data);
    }

    public function add() {
        $this->load->model(array('Customer'));
        $customer = new Customer();
        $post_data = $customer->array_from_post(array('first_name', 'last_name', 'nic', 'mobile_number', 'email', 'address', 'status_code'));

        $customer->first_name = $post_data['first_name'];
        $customer->last_name = $post_data['last_name'];
        $customer->nic = $post_data['nic'];
        $customer->pword = sha1($post_data['nic']);
        $customer->mobile_number = $post_data['mobile_number'];
        $customer->email = $post_data['email'];
        $customer->address = $post_data['address'];
        $customer->status_code = $post_data['status_code'];
        $customer->created_user = $this->session->userdata('userbean')->id;

        $customer->save();
        $db_error = $this->db->error();
//        echo '<tt><pre>' . var_export($db_error, TRUE) . '</pre></tt>';
        if ($db_error['code'] == 0) {
            $data['msg'] = '<p class="bg-success msg-success">New customer created successfuly</p>';
        } else {
            $data['msg'] = '<p class="bg-success msg-error">Invalid input or duplicate entry</p>';
        }
        //get customer list
        $data['customerList'] = $customer->get();
        $this->load->view('msg', $data);
    }

    public function explorer() {
        $this->load->model(array('Customer'));
        $customer = new Customer();
        $data['customerList'] = $customer->get();
        $this->load->view('customer_explorer', $data);
    }

}
