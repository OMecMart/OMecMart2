<?php
session_start();
class c_admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->model('model_user');
		$this->load->helper('text');
		
	}

	public function index() {
		$data['username'] = $this->session->userdata('username');
		$data['tamu'] = $this->model_user->tampil();
		$this->load->view('admin/v_tampil',$data);
	}

	function tambah(){
		$this->load->view('admin/v_input');
	}

	function tambah_aksi(){
	$nama_bengkel = $this->input->post('nama_bengkel');
	$email_bengkel = $this->input->post('email_bengkel');
	$no_telp = $this->input->post('no_telp');
	$nama_pemilik = $this->input->post('nama_pemilik');
	$alamat_bengkel = $this->input->post('alamat_bengkel');
	$uid = $this->input->post('uid');
 
	$data = array(
		'nama_bengkel' => $nama_bengkel,
		'email_bengkel' => $email_bengkel,
		'no_telp' => $no_telp,
		'nama_pemilik' => $nama_pemilik,
		'alamat_bengkel' => $alamat_bengkel,
		'uid' => $uid
	);

	$this->model_user->input_data($data,'bengkel');
	redirect('admin/c_admin');
	}

function hapus($kd_bengkel){
$where = array('kd_bengkel' => $kd_bengkel);
$this->model_user->hapus_data($where,'bengkel');
redirect('admin/c_admin');
}

 


	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}
}
?>