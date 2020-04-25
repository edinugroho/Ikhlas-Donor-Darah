<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role')!=null) {
			if ($this->session->userdata('role') == 'pendonor') {
				redirect('pendonor');
			}elseif ($this->session->userdata('role') == 'pmi') {
				redirect('pmi');
			}
		}else{
			redirect('login');
		}
	}
	public function index()
	{
		$this->load->view('petugas/header');
		$this->load->view('petugas/body');
		$this->load->view('petugas/footer');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}

/* End of file Petugas.php */
/* Location: ./application/controllers/Petugas.php */