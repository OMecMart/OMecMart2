<?php
Class Barang extends CI_Controller {
public function index() {
    $data = array(
        "container" => "Barang"
    ); 
    $this->load->view("barang","data" );
    
    }
    
}
?> 