<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pmi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role')!=null) {
			if ($this->session->userdata('role') == 'pendonor') {
				redirect('pendonor');
			}elseif ($this->session->userdata('role') == 'petugas') {
				redirect('petugas');
			}
		}else{
			redirect('login');
		}
	}
	public function index()
	{
		$this->load->view('pmi/header');
		$this->load->view('pmi/body');
		$this->load->view('pmi/footer');
	}
	public function tambahPmi()
	{
		$this->load->view('pmi/header');
		$this->load->view('pmi/tambah_pmi');
		$this->load->view('pmi/footer');		
	}
	public function dataPmi()
	{
		$this->load->view('pmi/header');
		$this->load->view('pmi/data_pmi');
		$this->load->view('pmi/footer');	
	}
	public function tambahPmiAction()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'trim|required|matches[password]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required|min_length[5]');
		if ($this->form_validation->run() == false) {
			$errors = validation_errors();
            echo json_encode(['error'=>$errors]);
		} else {
			echo json_encode(['success'=>'Record added successfully.']);
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}

/* End of file Pmi.php */
/* Location: ./application/controllers/Pmi.php */