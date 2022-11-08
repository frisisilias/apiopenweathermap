<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("first"));
		}
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


		$this->load->view('admin/index', $data);
	}
}
