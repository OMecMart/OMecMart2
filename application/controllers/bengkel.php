<?php
Class Bengkel extends CI_Controller {
public function index() {
    $data = array(
        "container" => "Bengkel"
    ); 
    $this->load->view("bengkel","data" );
    
    }
    
}
?> 