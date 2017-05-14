<?php
Class Admin extends CI_Controller {
public function index() {
    $data = array(
        "container" => "Admin"
    ); 
    $this->load->view("admin","data" );
    
    }
    
}
?> 