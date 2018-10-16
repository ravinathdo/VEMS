<?php

/**
 * Description of Inspection
 *
 * @author ravi
 */
class Inspection_Controller extends CI_Controller {

    //put your code here

    public function loadInspection($vehicle_id, $reg_no) {
        //get the vehicle infoemation 
        $data['reg_no'] = $reg_no;
        $data['vehicle_id'] = $vehicle_id;
        $data['booking_id'] = 0;
        $this->load->view('staff/operator_vehicle_inspection', $data);
    }

    public function inspection() {
        $this->load->model(array('Inspection'));
        $inspection = new Inspection();
        $inspection->getPostData();
        $inspection->save();
        //new inspection created ID: 5 
        //load inspection explorer
        $get = $inspection->get();
        echo '<tt><pre>' . var_export($get, TRUE) . '</pre></tt>';
        $data['inspectionList'] = $get;
        $data['msg'] = '<p class="bg-success msg-success">New Inspection created [ Token No:' . $inspection->id . ']</p>';
        $this->load->view('operator_list_inspection', $data);
    }

    public function loadInspectionExplorer() {
        $this->load->model(array('Inspection'));
        $inspection = new Inspection();
        $data['msg'] = '';
        $get = $inspection->get();
        $data['inspectionList'] = $get;
        $this->load->view('operator_list_inspection', $data);
    }

    public function result() {
        $this->load->view('operator_vehicle_result');
    }

}
