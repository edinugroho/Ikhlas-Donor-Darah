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
		$this->load->model('PmiM');
		$this->load->model('PetugasM');
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
		$data['pmi'] = $this->PmiM->getPmi();
		$this->load->view('pmi/header');
		$this->load->view('pmi/data_pmi',$data);
		$this->load->view('pmi/footer');	
	}
	public function tambahPetugas()
	{
		$this->load->view('pmi/header');
		$this->load->view('pmi/tambah_petugas');
		$this->load->view('pmi/footer');		
	}
	public function dataPetugas()
	{
		$data['petugas'] = $this->PetugasM->getPetugas();
		$this->load->view('pmi/header');
		$this->load->view('pmi/data_petugas',$data);
		$this->load->view('pmi/footer');		
	}
	public function dataAcara()
	{
		$data['acara'] = $this->PmiM->getAcara();
		$this->load->view('pmi/header');
		$this->load->view('pmi/data_acara',$data);
		$this->load->view('pmi/footer');		
	}
	public function tambahAcara()
	{
		$this->form_validation->set_rules('namaAcara', 'Nama Acara', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('pmi/header');
			$this->load->view('pmi/tambah_acara');
			$this->load->view('pmi/footer');
		} else {
			$config['upload_path'] = './gambarAcara/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '100';
			$config['max_width']  = '5024';
			$config['max_height']  = '768';
			$config['file_name'] = $this->session->userdata('username').$this->input->post('namaAcara');
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar')){
				$error = array('error' => $this->upload->display_errors());
			}
			else{
				$datau = array('upload_data' => $this->upload->data());
				$data = [
					'nama_acara' => $this->input->post('namaAcara'),
					'gambar'=> 'gambarAcara/'.$datau['upload_data']['file_name'],
					'tanggal_acara' => $this->input->post('tanggal'),
					'deskripsi' => $this->input->post('deskripsi'),
					'poin' => $this->input->post('poin'),
					'id_pmi' => $this->session->userdata('id_pmi')
				];
				$this->PmiM->tambahAcara($data);
				$this->session->set_flashdata('message', "
						<script>
							Swal.fire({
							title: 'Selamat !',
							text: 'Acara Telah Ditambahkan',
							icon: 'success',
							showConfirmButton : false
							})
						</script>
					");
				redirect('pmi/tambahAcara');
			}
		}		
	}
	public function tambahPmiAction()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'trim|required|matches[password]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required|min_length[5]');
		if ($this->form_validation->run() == false) {
			// $errors = validation_errors();
			// $errors = 'data belum lengkap';
            echo json_encode(['error'=>'Data PMI Belum Lengkap.']);
		} else {
			$data = [
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'alamat_pmi' => $this->input->post('alamat')
			];
			$this->PmiM->tambahPmi($data);
			echo json_encode(['success'=>'Berhasil Input Data PMI.']);
		}
	}
	public function tambahPetugasAction()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'trim|required|matches[password]');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required|min_length[5]');
		if ($this->form_validation->run() == false) {
			// $errors = validation_errors();
			// $errors = 'data belum lengkap';
            echo json_encode(['error'=>'Data Petugas Belum Lengkap.']);
		} else {
			$data = [
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'nama_petugas' => $this->input->post('nama')
			];
			$this->PetugasM->tambahPetugas($data);
			echo json_encode(['success'=>'Berhasil Input Data Petugas.']);
		}
	}
	public function editPetugas()
	{
		$data = [
			'id_petugas' => $this->input->post('idPetugas'),
			'username' => $this->input->post('username'),
			'nama_petugas' => $this->input->post('nama')
		];
		$q = $this->PetugasM->editPetugas($data);
		if ($q == 1) {
			$this->session->set_flashdata('message', "
			<script>
			Swal.fire({
				title: 'Selamat !',
				text: 'Petugas Berhasil Di Edit',
				icon: 'success',
				showConfirmButton : false
				})
			</script>
			");
			redirect('pmi/dataPetugas');	
		}
	}
	public function hapusPetugas($id)
	{
		$q = $this->PetugasM->hapusPetugas($id);
		if ($q == 1) {
			$this->session->set_flashdata('message', "
			<script>
			Swal.fire({
				title: 'Selamat !',
				text: 'Petugas Berhasil Di Hapus',
				icon: 'success',
				showConfirmButton : false
				})
			</script>
			");
			redirect('pmi/dataPetugas');
		}
	}
	public function getDataPmi()
	{
		$data = $this->PmiM->getPmi();
		echo json_encode($data);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}

/* End of file Pmi.php */
/* Location: ./application/controllers/Pmi.php */