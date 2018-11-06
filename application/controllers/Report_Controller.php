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
//            echo 'ok' . $inspecid; //http://localhost/VEMS/Payment_Controller/loadPayment/20
            redirect('/Payment_Controller/loadPayment/' . $inspecid);
        } else {
//            echo 'NO'; 
            $msg = '<p class="bg-danger msg-error">Invalid inspec token</p>';
            $data['msg'] = $msg;
            $this->load->view('customer/report_result', $data);
        }
    }

    //------------------Staff Report
    public function loadInspecListReport() {
        $data['msg'] = '';
        //ADMIN load centers 
        $this->load->model(array('Center'));
        $center = new Center();
        $data['centerList'] = $center->get();
        $this->load->view('staff/report_inspec_list', $data);
    }

    public function inspecListReport() {
        $this->load->model(array('Inspection'));
        $inspection0 = new Inspection();
        //get data list
        $fromDate = $this->input->post('fromDate');
        $toDate = $this->input->post('toDate');
        $data['fromDate'] = $fromDate;
        $data['toDate'] = $toDate;


        if ($this->session->userdata('userbean')->role_code == 'ADMIN') {
            $dataexplo = $this->input->post('centerid');
            $explode = explode('|', $dataexplo);
            $centerid = $explode[0];
            $centerName = $explode[1];
            $data['centerName'] = $centerName;
        } else {
            $centerid = $this->session->userdata('userbean')->center_id;
        }

        $data['reportData'] = $inspection0->getInspectionReportData($fromDate, $toDate, $centerid);
//        echo '<tt><pre>' . var_export($data['reportData'], TRUE) . '</pre></tt>';

        $this->load->model(array('Center'));
        $center = new Center();
        $data['centerList'] = $center->get();

        $this->load->view('staff/report_inspec_list', $data);
    }

    public function loadVehicleTestTypeReport() {
        $this->load->model(array('Center'));
        $center = new Center();
        $data['centerList'] = $center->get();
        $this->load->view('staff/report_vehicle_testtype_piechart',$data);
    }

    public function vehicleTestTypeReport() {

        $this->load->model(array('Inspection','Center'));
        $inspection0 = new Inspection();
        //get data list
        $fromDate = $this->input->post('fromDate');
        $toDate = $this->input->post('toDate');
        $data['fromDate'] = $fromDate;
        $data['toDate'] = $toDate;

        if ($this->session->userdata('userbean')->role_code == 'ADMIN') {
            $dataexplo = $this->input->post('centerid');
            $explode = explode('|', $dataexplo);
            $centerid = $explode[0];
            $centerName = $explode[1];
            $data['centerName'] = $centerName;
        } else {
            $centerid = $this->session->userdata('userbean')->center_id;
        }
        $centerVehicleTypeInspec = $inspection0->getCenterVehicleTypeInspec($fromDate, $toDate, $centerid);
        $data['reportData'] = $centerVehicleTypeInspec;
//        echo '<tt><pre>' . var_export($centerVehicleTypeInspec, TRUE) . '</pre></tt>';
        
        $center = new Center();
        $data['centerList'] = $center->get();
        
        $this->load->view('staff/report_vehicle_testtype_piechart',$data);
    }

}
