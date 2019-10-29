<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

        public function index()
        {
                
                
		$this->form_validation->set_rules( 'name', 'Name', 'required|trim', [
			'required' => '* nama toko tidak boleh kosong' ]);
		$this->form_validation->set_rules( 'owner', 'Owner', 'required|trim', [
			'required' => '* nama pemilik tidak boleh kosong' ]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[saller_mitra.email]', [
			'valid_email' => '* email yang anda masukan salah',
			'is_unique' => '* email sudah terdaftar',
			'required' => '* email tidak boleh kosong', ]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[repassword]', [
			'matches' => '* password harus sama !',
			'required' => '* password tidak boleh kosong',
			'min_length' => '* password minimal 8 karakter' ]);
		$this->form_validation->set_rules('repassword', 'Password', 'required|trim|matches[password]');
                
                date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$strt = strtotime($date);

                if ($this->form_validation->run() == false) {
                        $data['title'] = 'Daftar | Mitra Warong Online';
                        $this->load->view('templates/header-html', $data);
                        $this->load->view('pages/register');
                        $this->load->view('templates/footer-html');
                } else {
                        $data = [
				'name'=> htmlspecialchars($this->input->post('name', true)),
				'owner'=> htmlspecialchars($this->input->post('owner', true)),
				'email'=> htmlspecialchars($this->input->post('email', true)),
				'password'=> password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'photo'=> 'default.jpg',
				'addres'=> '',
				'cordinat'=> '',
				'description'=> '',
				'tier'=> '',
				'status'=> 'NEED_COFIRMED',
				'time_member'=> 'NEW_MEMBER',
				'date_member'=> $date,
				'timestamp_date_member'=> $strt,
				'phone'=> '',
				'ktp'=> '',
				'setting_on'=> '',
				'time_open'=> '',
				'time_close'=> '',
				'online'=> '',
				'status_profile'=> '',
			];

			
			$this->db->insert('saller_mitra', $data);
			$this->session->set_flashdata('pesan', ('<div class="alert alert-success" role="alert"> Selamat! Anda telah terdaftar. Mohon verifikasi email anda, email verifikasi telah dikirim ke <span class="font-weight-bold ">'.$data['email'].'</span></div>'));
			redirect('login');
                }

        }
}
