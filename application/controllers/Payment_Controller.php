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
        $this->load->model(array('Inspection'));
        $inspection = new Inspection();
        $inspectionDetail = $inspection->getInspectionDetail($token);
        $data['inspectionDetail'] = $inspectionDetail[0];
        echo '<tt><pre>' . var_export($data['inspectionDetail'], TRUE) . '</pre></tt>';
//        $data['msg'] = '';
//        $this->load->view('', $data);
    }

}
