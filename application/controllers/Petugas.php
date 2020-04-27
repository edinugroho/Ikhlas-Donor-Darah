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
		$this->load->model('PendonorM');
		$this->load->model('PetugasM');
		$this->load->model('PmiM');
	}
	public function index()
	{
		$data['peserta'] = $this->PendonorM->getPeserta();
		// daftar acara
		$this->load->view('petugas/header');
		$this->load->view('petugas/body',$data);
		$this->load->view('petugas/footer');
	}
	public function prosesDonor()
	{
		// insert donor
		$data = [
			'id_pendonor' => $this->input->post('id_pendonor'),
			'golongan_darah' => $this->input->post('golongan_darah'),
			'id_petugas' => $this->input->post('id_petugas')
		];
		// update status
		$datau = [
			'id_pendonor' => $this->input->post('id_pendonor'),
			'id_acara' => $this->input->post('id_acara')
		];
		// update poin
		$getPoin = $this->PmiM->getAcaraById($this->input->post('id_acara'))->poin;
		$dataup = [
			'id_pendonor' => $this->input->post('id_pendonor'),
			'poin' => $getPoin
		];
		$this->PendonorM->updatePoin($dataup);
		$this->PendonorM->updateStatus($datau);
		$this->PetugasM->prosesDonor($data);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}

/* End of file Petugas.php */
/* Location: ./application/controllers/Petugas.php */