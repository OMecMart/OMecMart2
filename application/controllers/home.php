<?php
Class home extends CI_Controller {
//konstruktor
public function __construct(){
		parent:: __construct();
		$this->load->model('model_user');
		$this->load->helper(array('url','form'));
	}
public function index() {
	$data['bengkel'] = $this->model_user->tampil_data()->result();
	$this->load->view('home');   
    }

public function login() {
	$data = array(
        "container" => "Login"
    ); 
    $this->load->view("login","data" );   
    }
	
public function bengkel() {
	//$data['bengkel'] = $this->model_user->tampil_data()->result();
	$data['bengkel'] = $this->model_user->tampil_data()->result();
	$this->load->view('bengkel',$data);
	
	/*$data = array(
        "container" => "Bengkel"
    ); 
    $this->load->view("bengkel","data");  */
    }
public function admin() {
	$data = array(
        "container" => "Admin"
    ); 
    $this->load->view("admin","data" ); 
    }
public function user() {
	$data = array(
        "container" => "User"
    ); 
    $this->load->view("user","data" );
       
    }
 
 
 function tambah(){
		$this->load->view('tambah');
	}

function tambah_aksi(){
//$kd_bengkel = $this->input->post('kd_bengkel');
	$nama_bengkel = $this->input->post('nama_bengkel');
	$email_bengkel = $this->input->post('email_bengkel');
	$no_telp = $this->input->post('no_telp');
	$nama_pemilik = $this->input->post('nama_pemilik');
	$alamat_bengkel = $this->input->post('alamat_bengkel');
 
	$data = array(
		'nama_bengkel' => $nama_bengkel,
		'email_bengkel' => $email_bengkel,
		'no_telp' => $no_telp,
		'nama_pemilik' => $nama_pemilik,
		'alamat_bengkel' => $alamat_bengkel
	);
 
	$where = array(
		'kd_bengkel' => $kd_bengkel
	);
	
	$this->model_user->input_data($data,'bengkel');
	redirect('home');
	}


	
public function cek_login(){
		$kd_admin = $this->input->post('kd_admin');
		$pwd = $this->input->post('pwd');
		$where = array(
			'kd_admin' => $kd_admin,
			'pwd' => $pwd
			);
		$cek = $this->model_user->cek_login("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $kd_admin,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin"));
 
		}else{
			echo "kd_admin dan password salah !";
		}
	}
 
public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}    
	
public function update(){
	$kd_bengkel = $this->input->post('kd_bengkel');
	$nama_bengkel = $this->input->post('nama_bengkel');
	$email_bengkel = $this->input->post('email_bengkel');
	$no_telp = $this->input->post('no_telp');
	$nama_pemilik = $this->input->post('nama_pemilik');
	$alamat_bengkel = $this->input->post('alamat_bengkel');
 
	$data = array(
		'nama_bengkel' => $nama_bengkel,
		'email_bengkel' => $email_bengkel,
		'no_telp' => $no_telp,
		'nama_pemilik' => $nama_pemilik,
		'alamat_bengkel' => $alamat_bengkel
	);
 
	$where = array(
		'kd_bengkel' => $kd_bengkel
	);
 
	$this->model_user->update_data($where,$data,'bengkel');
	redirect('home/bengkel');
}

function hapus($kd_bengkel){
$this->load->model('model_user');
$this->model_user->hapus_data($kd_bengkel);
redirect('home/bengkel');
}



	
public function _remap($var){
		
	if(isset($var))	{
		switch(strtolower($var)){
			case 'home':
			$this->index();
			break;
			
			case 'tambah':
			$this->tambah();
			break;
			
			case 'bengkel':
			$this->bengkel();
			break;
			
			case 'admin':
			$this->admin();
			break;
			
			case 'user':
			$this->user();
			break;
			
			case 'login':
			$this->login();
			break;
					
			default:
			$this->index();
					
	}}else{
			$this->index();
		}
		}
	
}
?> 