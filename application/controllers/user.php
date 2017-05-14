<?php
Class User extends CI_Controller {
public function index() {
    $data = array(
        "container" => "User"
    ); 
    $this->load->view("user","data" );
    
    }
    
}
?> 