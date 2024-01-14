<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{

	function __construct() {
		parent::__construct();
		$this->load->model('m_user');
	}
	
	public function index()
	{
		$data['user'] = $this->m_user->get_data()->result();
		$this->load->view('user', $data);
		// script diatas akan mengirimkan data ke v_user
	}
}
