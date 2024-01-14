<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organisasi extends CI_Controller 
{

	function __construct() 
	{
		parent::__construct();
		$this->load->model('m_organisasi');
		$this->load->model('m_front');
	}
	
	public function index()
	{
		$data['organisasi'] = $this->m_organisasi->getAll();
		$data['current_user'] = $this->m_front->current_user();
		$this->load->view('v_organisasi', $data);
		// script diatas akan mengirimkan data ke v_user
	}
	public function add()
	{
		$data['current_user'] = $this->m_front->current_user();
		$this->load->view('v_organisasi_add', $data);
		// script diatas akan mengirimkan data ke v_user
	}

	public function insert()
	{
		$nama_organisasi = $this->input->post('nama_organisasi');
		$tahun_organisasi = $this->input->post('tahun_organisasi');
		$jabatan_organisasi = $this->input->post('jabatan_organisasi');

		$insert_data = array(
			'nama_organisasi'=> $nama_organisasi,
			'tahun_organisasi'=> $tahun_organisasi,
			'jabatan_organisasi'=> $jabatan_organisasi,
		);

		$this->m_organisasi->insertData($insert_data);
		redirect(base_url() . 'organisasi');
	}

	public function edit($id)
	{
		$id = $this->uri->segment(3);
		$data['data_organisasi'] = $this->m_organisasi->getById($id);
		$this->load->view('v_organisasi_edit', $data);
	}

	public function update() {
		$id_organisasi = strip_tags($this->input->post('id_organisasi'));
		$nama_organisasi = strip_tags($this->input->post('nama_organisasi'));
		$tahun_organisasi = strip_tags($this->input->post('tahun_organisasi'));
		$jabatan_organisasi = strip_tags($this->input->post('jabatan_organisasi'));

		$update_data = array(
			'nama_organisasi'=> $nama_organisasi,
			'tahun_organisasi'=> $tahun_organisasi,
			'jabatan_organisasi'=> $jabatan_organisasi,
		);

		$this->m_organisasi->updateData($update_data, $id_organisasi);
		redirect(base_url().'organisasi');
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->db->delete("organisasi", array("id_organisasi" => $id));
		redirect (base_url("organisasi"));
	}
}
