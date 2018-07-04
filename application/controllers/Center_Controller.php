<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Center_Controller
 *
 * @author ravi
 */
class Center_Controller extends CI_Controller {

    //put your code here
    public function index() {
        $this->load->view('admin_center');
    }

    public function loadEditCenter() {
//        $this->uid = $this->input->get('centerid', TRUE);
//        echo $this->uid;
        $this->load->view('admin_edit_center');
    }

}
