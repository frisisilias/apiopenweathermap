<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		if ($this->session->userdata('email')) {
			redirect('admin');
		}
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login Page';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();
		//jika usernya ada
		if ($user) {
			//jika usernya aktif
			if ($user['is_active'] == 1) {
				//cek password
				if ($password == $user['password']) {
					$data = [
						'email' => $user['email'],
						'id_role' => $user['id_role'],
						'status' => "login"
					];
					$this->session->set_userdata($data);
					if ($user['id_role'] == 1) {
						redirect('admin');
					} else {
						redirect('admin');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
			redirect('auth');
		}
	}

	public function registration()
	{
		if ($this->session->userdata('email')) {
			redirect('admin');
		}
		$this->form_validation->set_rules('name', 'Full Name', 'required|trim');
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|trim|valid_email|is_unique[user.email]',
			[
				'is_unique' => 'This email has already registered!'
			]
		);
		$this->form_validation->set_rules(
			'password1',
			'Password',
			'required|trim|min_length[6]|matches[password2]',
			[
				'matches' => 'Password dont match!'
			]
		);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


		if ($this->form_validation->run() == false) {
			$data['title'] = 'User Registration';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer');
		} else {
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => $this->input->post('password1'), PASSWORD_DEFAULT,
				'id_role' => 1,
				'is_active' => 1,
				'date_created' => time()
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Your account has been created. Please Login!</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('id_role');
		$this->session->unset_userdata('status');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout!</div>');

		redirect('auth');
	}

	public function login()
	{
		$this->load->view('templates/auth_header');
		$this->load->view('auth/login');
		$this->load->view('templates/auth_footer');
	}

	public function blocked()
	{
		$this->load->view('auth/blocked');
	}
}
