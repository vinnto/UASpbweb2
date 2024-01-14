<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller 
{

	function __construct() 
	{
		parent::__construct();
		$this->load->model('m_project');
		$this->load->model('m_front');
	}
	
	public function index()
	{
		$data['project'] = $this->m_project->getAll();
		$data['current_user'] = $this->m_front->current_user();
		$this->load->view('v_project', $data);
		// script diatas akan mengirimkan data ke v_user
	}
	public function add()
	{
		$data['current_user'] = $this->m_front->current_user();
		$this->load->view('v_project_add', $data);
		// script diatas akan mengirimkan data ke v_user
	}

	public function insert()
	{
		$gambar_project = $this->input->post('gambar_project');
		$deskripsi_project = $this->input->post('deskripsi_project');

		$insert_data = array(
			'gambar_project'=> $gambar_project,
			'deskripsi_project'=> $deskripsi_project,
		);

		$this->m_project->insertData($insert_data);
		redirect(base_url() . 'project');
	}

	public function edit($id)
	{
		$id = $this->uri->segment(3);
		$data['data_project'] = $this->m_project->getById($id);
		$this->load->view('v_project_edit', $data);
	}

	public function update() {
		$id_project = strip_tags($this->input->post('id_project'));
		$gambar_project = strip_tags($this->input->post('gambar_project'));
		$deskripsi_project = strip_tags($this->input->post('deskripsi_project'));

		$update_data = array(
			'gambar_project'=> $gambar_project,
			'deskripsi_project'=> $deskripsi_project,
		);

		$this->m_project->updateData($update_data, $id_project);
		redirect(base_url().'project');
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->db->delete("project", array("id_project" => $id));
		redirect (base_url("project"));
	}
}
