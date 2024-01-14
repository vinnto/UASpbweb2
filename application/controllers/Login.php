<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

	function __construct() {
		parent::__construct();
		$this->load->model('m_login');
	}
	
	public function index()
	{
		$this->load->view('v_login');
		// script diatas akan mengirimkan data ke v_user
	}

	function aksi_login() {
		// echo "test";die;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		// echo $username, $password;die;
		$where = array (
			'username' => $username,
			'password' => md5($password)
		);
		// fungsi method aksi_login adalah saat kita mengetikan username dan password, si password sudah diconvert ke dalam enkripsi md5
		$cek = $this->m_login->cek_login("user", $where)->num_rows();
		// echo $cek;die;
		// script num_rows akan menghitung dari hasil query didalam model kita, ada berapa baris hasilnya
		if($cek > 0) {
			$data_session = array (
				'nama' => $username,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			redirect(base_url("admin"));
		} else {
			echo "Username dan Password salah!";
		}
	}

	function logout() {
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
