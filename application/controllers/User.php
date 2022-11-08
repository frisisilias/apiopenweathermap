<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
        $data['title'] = 'Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['key_generate'] = $this->db->get_where('user', ['key_generate' => $this->session->userdata('key_generate')])->row_array();

        $this->load->view('user/index', $data);
    }

    public function key_generate($param)
    {

        $token = md5($param);

        $this->db->set('key_generate', $token);
        $this->db->where('name', $param);
        $this->db->update('user');

        redirect(base_url("user"));
    }
}
