<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendonor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role')!=null) {
			if ($this->session->userdata('role') == 'pmi') {
				redirect('pmi');
			}elseif ($this->session->userdata('role') == 'petugas') {
				redirect('petugas');
			}
		}else{
			redirect('login');
		}
		$this->load->model('PendonorM');
	}
	public function index()
	{
		$this->load->view('pendonor/header');
		$this->load->view('pendonor/profile');
		$this->load->view('pendonor/footer');				
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}

/* End of file Pendonor.php */
/* Location: ./application/controllers/Pendonor.php */