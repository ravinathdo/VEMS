<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Menu_Controller
 *
 * @author ravi
 */
class Menu_Controller extends CI_Controller {
    //put your code here
    
    public function index() {
                $this->load->view('index.php');
    }
    
    public function terms() {
                        $this->load->view('terms.php');

    }
    public function about() {
                        $this->load->view('about.php');

    }
    
    public function contact() {
        $this->load->view('contact.php');
                
    }
    
      public function loadHome() {
                $this->load->view('home.php');
    }
    
}
