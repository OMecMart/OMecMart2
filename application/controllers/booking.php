<?php
Class Booking extends CI_Controller {
public function index() {
    $data = array(
        "container" => "Booking"
    ); 
    $this->load->view("booking","data" );
    
    }
    
}
?> 