<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Mitra Warong Online';
		$this->load->view('templates/header-html', $data);
		$this->load->view('pages/home');
		$this->load->view('templates/footer-html');
        
	}
}
