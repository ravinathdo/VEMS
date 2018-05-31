<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User_Controller
 *
 * @author indeewara
 */
class User_Controller extends CI_Controller {

    //put your code here

    public function index() {
//		$this->load->view('student/student_register');
        $this->load->view('index');
    }
    
    public function logout() {
        $this->session->unset_userdata('userbean');
        $this->session->unset_userdata('logged_in');
        $this->load->view('index');
    }
    
    public function userLogin() {
        echo 'userlogin';
        $this->load->model(array('Users'));
        $formData = $this->Users->array_from_post(array('email', 'password'));
                echo '<tt><pre>' . var_export($formData, TRUE) . '</pre></tt>';

        $doLogin = $this->Users->getUserLogin($formData);
        
       // echo sha1('a');
        echo '<tt><pre>' . var_export($doLogin, TRUE) . '</pre></tt>';
        
        if($doLogin){
           
           $newdata = array(
                'userbean' => $doLogin[0],
                'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
            $this->load->view('home');
            
        }else{
            $data['msg'] = '<p class="bg-success"> Invalid username or password </p>'; 
            $this->load->view('index',$data);
        }
        
    }
    
    public function customerLogin() {
        $this->load->model(array('Customer'));
        $formData = $this->Customer->array_from_post(array('email', 'password'));
                echo '<tt><pre>' . var_export($formData, TRUE) . '</pre></tt>';

        $doLogin = $this->Customer->getLogin($formData);
        
       // echo sha1('a');
        echo '<tt><pre>' . var_export($doLogin, TRUE) . '</pre></tt>';
        
        if($doLogin){
           
           $newdata = array(
                'userbean' => $doLogin[0],
                'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
            $this->load->view('home');
            
        }else{
            $data['msg'] = '<p class="bg-success"> Invalid username or password </p>'; 
            $this->load->view('index',$data);
        }
        
        
    }

}
