<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller 
{

	function __construct() {
		parent::__construct();
		$this->load->model('m_about');
		$this->load->model('m_front');
	}
	
	public function index()
	{
		$data['current_user'] = $this->m_front->current_user();
		$this->load->view('v_about', $data);
		// script diatas akan mengirimkan data ke v_user
	}

	public function update() {
		$nama = strip_tags($this->input->post('nama'));
		$pekerjaan = strip_tags($this->input->post('pekerjaan'));
		$hobi = strip_tags($this->input->post('hobi'));
		$nama_aplikasi = strip_tags($this->input->post('nama_aplikasi'));


		// echo $nama, $pekerjaan, $hobi, $nama_aplikasi;
		// die;
		
		$update_data = array(
			'nama'=> $nama,
			'pekerjaan'=> $pekerjaan,
			'hobi'=> $hobi,
			'nama_aplikasi'=> $nama_aplikasi,
		);

		$this->m_about->updateData('about',$update_data, '1');
		redirect(base_url().'about');
	}
}
