<?php
Class Login extends CI_Controller {
public function index() {
    $data = array(
        "container" => "Login"
    ); 
    $this->load->view("login","data" );
    
    }
    
}
?> 