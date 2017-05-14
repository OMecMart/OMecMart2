<?php
Class Home extends CI_Controller {
public function index() {
    $data = array(
        "container" => "home"
    ); 
    $this->load->view("home","data" );
    
    }
    
}
?> 