<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->model('PendonorM');
		$this->load->model('PetugasM');
	}
	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('login');
		} else {
			$role = $this->input->post('role');
			$data['username'] = $this->input->post('username');
			$data['password'] = md5($this->input->post('password'));
			if ($role == 'pmi') {
				$q = $this->PmiM->loginPmi($data);
				if ($q == 1) {
					$sess = $this->PmiM->getActivePmiUser($data);
					$sess['role'] = 'pmi';
					$this->session->set_userdata($sess);
					redirect('pmi');
				}else{
					$this->session->set_flashdata('notFound', "
						<script>
							Swal.fire({
							title: 'Error !',
							text: 'Akun tidak ditemukan',
							icon: 'error',
							showConfirmButton : false
							})
						</script>
					");
					redirect('login');
				}
			}elseif($role == 'petugas'){
				$q = $this->PetugasM->loginPetugas($data);
				if ($q == 1) {
					$sess = $this->PetugasM->getActivePetugasUser($data);
					$sess['role'] = 'petugas';
					$this->session->set_userdata($sess);
					redirect('petugas');
				}else{
					$this->session->set_flashdata('notFound', "
						<script>
							Swal.fire({
							title: 'Error !',
							text: 'Akun tidak ditemukan',
							icon: 'error',
							showConfirmButton : false
							})
						</script>
					");
					redirect('login');
				}
			}elseif($role == 'pendonor'){
				$q = $this->PendonorM->loginPendonor($data);
				if ($q == 1) {
					$sess = $this->PendonorM->getActivePendonorUser($data);
					$sess['role'] = 'pendonor';
					$this->session->set_userdata($sess);
					redirect('pendonor');
				}else{
					$this->session->set_flashdata('notFound', "
						<script>
							Swal.fire({
							title: 'Error !',
							text: 'Akun tidak ditemukan',
							icon: 'error',
							showConfirmButton : false
							})
						</script>
					");
					redirect('login');
				}
			}
		}	
	}
	public function daftar()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('umur', 'Umur', 'trim|required');
		$this->form_validation->set_rules('nohp', 'Nomor Hp', 'trim|required|min_length[12]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('confirmPassword', 'Password Confirm', 'trim|required|matches[password]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('pendonor/daftar');
		} else {
			$data = [
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'email' => $this->input->post('email'),
				'nama_pendonor' => $this->input->post('nama'),
				'umur_pendonor' => $this->input->post('umur'),
				'no_hp' => $this->input->post('nohp'),
				'alamat' => $this->input->post('alamat')
			];
			$this->PendonorM->daftar($data);
			$this->session->set_flashdata('message', "
				<script>
				Swal.fire({
					title: 'Selamat !',
					text: 'Akun anda berhasil dibuat',
					icon: 'success',
					showConfirmButton : false
					})
				</script>
			");
			redirect('login/daftar');
		}
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */