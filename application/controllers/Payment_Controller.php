<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Payment_Controller
 *
 * @author User
 */
class Payment_Controller extends CI_Controller {

    public function loadPayment($token) {
        $this->load->model(array('Inspection','Payment'));
        $inspection = new Inspection();
        //get inspection details
        $inspectionDetail = $inspection->getInspectionDetail($token);
        $data['inspectionDetail'] = $inspectionDetail[0];
        echo '<tt><pre>' . var_export($data['inspectionDetail'], TRUE) . '</pre></tt>';
        
        
        if($inspectionDetail[0]->inspec_result == 'ACCEPT' ){
            //get defined payment details for vehicle type
            switch ($inspectionDetail[0]->type_code) {
                case "CAR":
                    $data['charge_amount'] = '1500';
                    break;
                case "BUS":
                    $data['charge_amount'] = '2500';
                    break;
            }
        }
        
        if($inspectionDetail[0]->inspec_result == 'PAID' ){
            //get payment details for inspection
            $payment0 = new Payment();
            $payment0->getPaymentByInspetionID($token);
            $data['paymentDetails'] = $payment0;
        }
        
//        $data['msg'] = '';
        $this->load->view('staff/payment', $data);
    }

    
    public function payment() {
        $this->load->model(array('Payment','Inspection'));
        
        //collect the input
        $payment = new Payment();
        $inspection = new Inspection();
        
        $payment->vehicle_id = $this->input->post('vehicle_id');
        $payment->status_code = 'PAID';
        $payment->inspection_id = $this->input->post('inspection_id');
        $payment->amount = $this->input->post('amount');
        $payment->created_userid = $this->session->userdata('userbean')->id;
        
        //insert into payment status_code -> PAID
        $payment->save();
  
        //update inspection -> PAID
        $inspection->id = $this->input->post('inspection_id');
        $updateArray = array('inspec_result'=> 'PAID');
        $inspection->update_inspec($updateArray,$inspection->id);
       
        
        $data['msg'] = '<p class="bg-success msg-success">Payment created successfully</p>';
        $this->load->view('staff/payment_receipt', $data);
    }
    
}
