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
		$this->load->model('PmiM');
	}
	public function index()
	{
		$data['acaraTerdaftar'] = $this->PmiM->getAcaraTerdaftar($this->session->userdata('id_pendonor'));
		$data['acaraTerlaksana'] = $this->PmiM->getAcaraTerlaksana($this->session->userdata('id_pendonor'));
		$data['countTerlaksana'] = $this->PmiM->countAcaraTerlaksana($this->session->userdata('id_pendonor'));
		$data['countAcara'] = $this->PmiM->countAcara($this->session->userdata('id_pendonor'));
		$this->load->view('pendonor/header');
		$this->load->view('pendonor/profile',$data);
		$this->load->view('pendonor/footer');				
	}
	public function jadwal()
	{
		$data['acara'] = $this->PmiM->getAcara();
		$this->load->view('pendonor/header');
		$this->load->view('pendonor/jadwal',$data);
		$this->load->view('pendonor/footer');
	}
	public function hadiah()
	{
		$this->load->view('pendonor/header');
		$this->load->view('pendonor/hadiah');
		$this->load->view('pendonor/footer');
	}
	public function kontak()
	{
		$data['pmi'] = $this->PmiM->getPmi();
		$this->load->view('pendonor/header');
		$this->load->view('kontak',$data);
		$this->load->view('pendonor/footer');
	}
	public function tentang()
	{
		$this->load->view('pendonor/header');
		$this->load->view('tentang');
		$this->load->view('pendonor/footer');
	}
	public function ikutiAcara($id_acara)
	{
		$data = [
			'id_pendonor' => $this->session->userdata('id_pendonor'),
			'id_acara' => $id_acara
		];
		$this->PendonorM->ikutiAcara($data);
		$this->session->set_flashdata('message', "
			<script>
			Swal.fire({
				title: 'Selamat !',
				text: 'Acara Telah Terdaftar Dalam Acara',
				icon: 'success',
				showConfirmButton : false
				})
			</script>
		");
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}

/* End of file Pendonor.php */
/* Location: ./application/controllers/Pendonor.php */