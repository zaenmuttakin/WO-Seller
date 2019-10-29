<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
			'valid_email' => '* email yang anda masukan salah',
			'required' => '* email tidak boleh kosong' ]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', [
			'required' => '* password tidak boleh kosong' ]);
		
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login | Mitra Warung Online';
			$this->load->view('templates/header-html', $data);
			$this->load->view('pages/login');
			$this->load->view('templates/footer-html');
		} else {
			$this->_login();
		}
        
	}

	private function _login() 
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$mitra = $this->db->get_where('saller_mitra', ['email' => $email])->row_array();

		if ($mitra) {

			if ($mitra['status'] == 'ACTIVE') {
				
				if (password_verify($password, $mitra['password'])) {
					$data = [
						'email' => $mitra['email']
					];
					$this->session->set_userdata($data);
					redirect('dashboard');
				} else {
					$this->session->set_flashdata('pesan', ('<div class="alert alert-danger" role="alert"> Password yang anda masukan salah!</div>'));
					redirect('login');
				}

			} else {
				$this->session->set_flashdata('pesan', ('<div class="alert alert-danger" role="alert"> Email belum diverifikasi!</div>'));
				redirect('login');
			}
			
		} else {
			$this->session->set_flashdata('pesan', ('<div class="alert alert-danger" role="alert"> Email belum terdaftar!</div>'));
			redirect('login');
		}
	}
}
