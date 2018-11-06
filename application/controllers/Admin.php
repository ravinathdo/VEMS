<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author User
 */
class Admin extends CI_Controller {

    //put your code here

    public function index() {
        $data['msg'] = '';
        $this->load->view('admin_login',$data);
    }

    public function userLogin() {
        //find the user and role == 'ADMIN'
        $this->load->model(array('Users','Booking','Inspection','Center'));
        $formData = $this->Users->array_from_post(array('username', 'password'));
//        echo '<tt><pre>' . var_export($formData, TRUE) . '</pre></tt>';
        
        $doLogin = $this->Users->getUserLogin($formData);
        // echo sha1('a');
//        echo '<tt><pre>' . var_export($doLogin, TRUE) . '</pre></tt>';
        
         date_default_timezone_set('Asia/Colombo');
            $today = date("Y-m-d", time());
            
        if ($doLogin) {
            $newdata = array(
                'userbean' => $doLogin[0],
                'logged_in' => TRUE,
                'today' => $today
            );
            $this->session->set_userdata($newdata);
            
            //IF staff user get the requested booking list
            if($doLogin[0]->role_code == 'STAFF' || $doLogin[0]->role_code == 'MANAGER'){
                $bookingObj = new Booking();
//                echo 'get OPEN booking for center';
                $centerBooking = $bookingObj->getCenterBookingStatus($doLogin[0]->center_id,'OPEN');
//                echo '<tt><pre>' . var_export($centerBooking, TRUE) . '</pre></tt>';
                $this->session->set_userdata(array('openBooking'=>$centerBooking));
                //get center details to session 
                $center = new Center();
                $centerDetail = $center->getCenterByID($doLogin[0]->center_id);
//                echo '<tt><pre>' . var_export($centerDetail, TRUE) . '</pre></tt>';
                $this->session->set_userdata(array('centerDetail'=>$centerDetail));
            }
            
            
              if($doLogin[0]->role_code == 'ADMIN'){
                  //get center inspection list details to show pie chart
                  $inspection = new Inspection();
                  $centerInspections = $inspection->getCenterInspections();
                  $this->session->set_userdata(array('centerInspectionsList'=>$centerInspections));
              }
            
              
              
            $this->load->view('home');
        } else {
            $data['msg'] = '<p class="bg-danger msg-err"> Invalid username or password </p>';
            $this->load->view('admin_login', $data);
        }

    }

}
