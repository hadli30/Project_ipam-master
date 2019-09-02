<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['page'] = 'dashboard';
        $data['title'] = 'XL-MS IP Adress Manager';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('email')])->row_array();
        $this->load->view('konten/dashboard', $data);

        // echo 'Berhasil masuk admin ' . $data['user']['name'];
    }
}