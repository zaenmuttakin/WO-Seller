<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        if (!$this->session->userdata('email')) {
            redirect('login');
        }
    }

    public function index() {
        $data['title'] = 'Dashboard | Mitra WO';
        $data['mitra'] = $this->db->get_where('saller_mitra', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/dashboard/sidebar', $data);
        $this->load->view('templates/dashboard/topbar', $data);
        $this->load->view('pages/dashboard/index');
        $this->load->view('templates/dashboard/footer');
    }

    public function logout() {
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('pesan', ('<div class="alert alert-success" role="alert"> Terima kasih! Anda berhasil logout</div>'));
		redirect('login');
    }

    public function profile() {
        $data['title'] = 'Profile | Mitra WO';
        $data['mitra'] = $this->db->get_where('saller_mitra', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/dashboard/sidebar', $data);
        $this->load->view('templates/dashboard/topbar', $data);
        $this->load->view('pages/dashboard/profile');
        $this->load->view('templates/dashboard/footer');
    }
    
    public function Edit() {
        $data['title'] = 'Edit Profile | Mitra WO';
        $data['mitra'] = $this->db->get_where('saller_mitra', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/dashboard/sidebar', $data);
        $this->load->view('templates/dashboard/topbar', $data);
        $this->load->view('pages/dashboard/edit');
        $this->load->view('templates/dashboard/footer');
    }
}