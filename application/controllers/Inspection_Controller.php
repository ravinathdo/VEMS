<?php

/**
 * Description of Inspection
 *
 * @author ravi
 */
class Inspection_Controller extends CI_Controller {

    //put your code here

    public function loadInspection() {
        $this->load->view('operator_vehicle_inspection');
    }

    public function inspection() {
        $this->load->model(array('Inspection'));
        $inspection = new Inspection();
        $post_vehicle_data = $inspection->array_from_post(array('vehicle_id', 'engine_type'));
        
        $inspection->vehicle_id = $post_data['vehicle_id']; 
        $inspection->vehicle_id = $post_data['vehicle_id']; 
        $inspection->vehicle_id = $post_data['vehicle_id']; 
        $inspection->vehicle_id = $post_data['vehicle_id']; 
        
        
    }

    public function listInspection() {
        $this->load->view('operator_list_inspection');
    }

    public function result() {
        $this->load->view('operator_vehicle_result');
    }

}
