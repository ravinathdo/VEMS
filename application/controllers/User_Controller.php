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
        $formData = $this->Users->array_from_post(array('username', 'password'));
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
            $this->load->view('home');
        } else {
            $data['msg'] = '<p class="bg-success"> Invalid username or password </p>';
            $this->load->view('index', $data);
        }
    }

    public function loadUserCreation() {
        $this->load->model(array('Users', 'Center', 'Role'));

        $userbean = $this->session->userdata('userbean');

        $center = new Center();
        $role = new Role();
        $users = new Users();

        $centerList = $center->get();
        $roleList = $role->get();
        $userList = $users->getUserList();


        $data['centerList'] = $centerList;
        $data['roleList'] = $roleList;
        $data['userList'] = $userList;

        $this->load->view('admin_user_creation', $data);
    }

    public function add() {
        $this->load->model(array('Users', 'Center'));
        $arry_input = $this->array_from_post(array('first_name', 'last_name', 'nic', 'username', 'mobile_number', 'address', 'role_code', 'center_id', 'status_code'));

        $userbean = $this->session->userdata('userbean');

        $users = new Users();
        $users->first_name = $arry_input['first_name'];
        $users->last_name = $arry_input['last_name'];
        $users->nic = $arry_input['nic'];
        $users->username = $arry_input['username'];
        $users->pword = sha1($users->username);
        $users->mobile_number = $arry_input['mobile_number'];
        $users->address = $arry_input['address'];
        $users->role_code = $arry_input['role_code'];
        $users->center_id = $arry_input['center_id'];
        $users->status_code = $arry_input['status_code'];
        $users->created_user = $userbean->id;
        $users->save();


        echo '<tt><pre>' . var_export($arry_input, TRUE) . '</pre></tt>';
    }

    public function loadEditUser() {
        $this->load->view('admin_edit_user');
    }

    public function array_from_post($fields) {
        $data = array();

        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

}
