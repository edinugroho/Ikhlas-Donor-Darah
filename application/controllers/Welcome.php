<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata()!=null) {
			if ($this->session->userdata('role') == 'pendonor') {
				redirect('pendonor');
			}elseif ($this->session->userdata('role') == 'petugas') {
				redirect('petugas');
			}elseif ($this->session->userdata('role') == 'pmi') {
				redirect('pmi');
			}
		}
		$this->load->model('PmiM');
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function kontak()
	{
		$data['pmi'] = $this->PmiM->getPmi();
		$this->load->view('header');
		$this->load->view('kontak',$data);
		$this->load->view('footer');	
	}
	public function hadiah()
	{
		$this->load->view('header');
		$this->load->view('hadiah');
		$this->load->view('footer');	
	}
	public function jadwal()
	{
		$data['acara'] = $this->PmiM->getAcara();
		$this->load->view('header');
		$this->load->view('jadwal',$data);
		$this->load->view('footer');	
	}
	public function tentang()
	{
		$this->load->view('header');
		$this->load->view('tentang');
		$this->load->view('footer');	
	}
}
