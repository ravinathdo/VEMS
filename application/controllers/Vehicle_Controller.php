<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vehicle_Controller
 *
 * @author User
 */
class Vehicle_Controller extends CI_Controller {

    //put your code here
    public function loadAddVehicle() {
        $this->load->model(array('Vehicle', 'Vehicle_Brand', 'Customer', 'Fual', 'Type'));
        $vehicle = new Vehicle();
        $brand = new Vehicle_Brand();
        $customer = new Customer();
        $fual = new Fual();
        $type = new Type();

        $data['vehicleList'] = $vehicle->get();
        $data['brandList'] = $brand->get();
        $data['typeList'] = $type->get();

//        echo '<tt><pre>' . var_export($data['typeList'] , TRUE) . '</pre></tt>';
        $data['customerList'] = $customer->get();
        $data['fualList'] = $fual->get();

        $this->load->view('staff/operator_vehicle_registration', $data);
    }

    public function add() {
        $this->load->model(array('Vehicle', 'Vehicle_Brand', 'Customer', 'Fual', 'Type'));

        $userbean = $this->session->userdata('userbean');

        $vehicle = new Vehicle();
        $brand = new Vehicle_Brand();
        $customer = new Customer();
        $fual = new Fual();
        $type = new Type();

        $post_data = $vehicle->array_from_post(array('manufac_year', 'stroke', 'reg_no', 'type_code', 'fual_type', 'brand_code', 'customer_id'));

        $vehicle->manufac_year = $post_data['manufac_year'];
        $vehicle->stroke = $post_data['stroke'];
        $vehicle->reg_no = $post_data['reg_no'];
        $vehicle->type_code = $post_data['type_code'];
        $vehicle->fual_type = $post_data['fual_type'];
        $vehicle->brand_code = $post_data['brand_code'];
        $vehicle->customer_id = $post_data['customer_id'];
        $vehicle->created_userid = $userbean->id;

        $vehicle->save();
        $data['msg'] = '<p class="bg-success msg-success">New vehicle created successfully</p>';

        //get the vehicle list for the user
        $vehicleList = $vehicle->getCustomerVehicles($vehicle->customer_id);
        $data['vehicleList'] = $vehicleList;
        $data['brandList'] = $brand->get();
        $data['typeList'] = $type->get();
        $data['customerList'] = $customer->get();
        $data['fualList'] = $fual->get();


        $this->load->view('operator_vehicle_registration', $data);
    }

    public function getCustomerVehicle() {
        $this->load->model(array('Vehicle'));
        $userbean = $this->session->userdata('userbean');
        $vehicle = new Vehicle();
        //get parameter
        $customer_id = $this->input->get('id');
        $data['customerVehicleList'] = $vehicle->getCustomerVehicles($customer_id);
        $this->load->view('staff/operator_vehicle_explorer',$data);
    }

}
