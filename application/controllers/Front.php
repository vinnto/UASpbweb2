<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller 
{

	function __construct() 
	{
		parent::__construct();
		$this->load->model('m_front');
		$this->load->model('m_organisasi');
		$this->load->model('m_project');
		
	}
	
	public function index()
	{
		$data['organisasi'] = $this->m_organisasi->getAll();
		$data['project'] = $this->m_project->getAll();
		$data['current_user'] = $this->m_front->current_user();
		$this->load->view('v_front', $data);
	}
}
