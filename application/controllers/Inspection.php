<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Inspection
 *
 * @author ravi
 */
class Inspection extends CI_Controller {
    //put your code here
    public function loadInspection() {
        $this->load->view('operator_vehicle_inspection');
    }
    public function listInspection() {
        $this->load->view('operator_list_inspection');
    }
    public function result() {
        $this->load->view('operator_vehicle_result');
    }
}
