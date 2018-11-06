<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Report_Controller
 *
 * @author User
 */
class Report_Controller extends CI_Controller {

    //put your code here

    public function loadResultReport() {
        $data['msg'] = '';
        $this->load->view('customer/report_result', $data);
    }

    public function getResultReport() {
        //get the result belongs to customer
        $this->load->model(array('Inspection'));
        $inspection = new Inspection();
        $inspecid = $this->input->post('inspecid');
        $customerResult = $inspection->isCustomerResult($this->session->userdata('userbean')->id, $inspecid);
        if ($customerResult) {
            echo 'ok'.$inspecid; //http://localhost/VEMS/Payment_Controller/loadPayment/20
            redirect('/Payment_Controller/loadPayment/' . $inspecid);
        } else {
//            echo 'NO'; 
            $msg = '<p class="bg-danger msg-error">Invalid inspec token</p>';
            $data['msg'] = $msg;
            $this->load->view('customer/report_result', $data);
        }
    }

}
