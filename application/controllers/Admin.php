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
        $this->load->view('admin_login');
    }

    public function adminLogin() {
        //find the user and role == 'ADMIN'
        $this->load->model(array('Users'));
        $formData = $this->Users->array_from_post(array('email', 'password'));
        echo '<tt><pre>' . var_export($formData, TRUE) . '</pre></tt>';
        
        $doLogin = $this->Users->getUserLogin($formData);
        // echo sha1('a');
        echo '<tt><pre>' . var_export($doLogin, TRUE) . '</pre></tt>';
        if ($doLogin) {
            $newdata = array(
                'userbean' => $doLogin[0],
                'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
            $this->load->view('admin_login');
        } else {
            $data['msg'] = '<p class="bg-success"> Invalid username or password </p>';
            $this->load->view('home', $data);
        }
        
    }

}
