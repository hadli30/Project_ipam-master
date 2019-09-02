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
		// LOGIN VALIDATION
		$data['title'] = 'XL-MS IP Adress Manager Log In';
		$this->form_validation->set_rules('email', 'Username', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
		
			$this->load->view('Auth/login');
			
		} else {
			// "_" below means private method
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		//           v means: Select * from user where email = input email
		$user = $this->db->get_where('user', ['username' => $email])->row_array();
		// var_dump($user);
		if ($user) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'email' => $user['username'],
					'role_id' => $user['role_id']
				];
				$this->session->set_userdata($data);
				// hasnt complete
				if ($user['role_id'] == 1) {
					redirect('Dashboard');
				} else {
					redirect('Dashboard');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password or username!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered! Please Sign up.</div>');
			redirect('auth');
		}
	}

	public function forgot_password()
	{
		$data['title'] = 'XL-MS IP Adress Manager Reset Password';
		$this->load->view('template/auth_header', $data);
		$this->load->view('auth/forgot_password');
		$this->load->view('template/auth_footer');
	}
	public function registration()
	{
		$this->form_validation->set_rules('name', 'Full Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.username]', ['is_unique' => 'This email has already registered!']);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password1]');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'XL-MS IP Adress ManagerUser Registration';
			$this->load->view('template/auth_header', $data);
			$this->load->view('auth/registration');
		} else {
			$data = [
				'username' => htmlspecialchars($this->input->post('email', true)),
				'name' => htmlspecialchars($this->input->post('name', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 1
			];
			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Your account has been created. Please Login</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been log out</div>');
		redirect('auth');
	}
}
