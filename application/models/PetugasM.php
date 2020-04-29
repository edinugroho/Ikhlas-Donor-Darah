<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PetugasM extends CI_Model {
	public function loginPetugas($data)
	{
		return $this->db->query("SELECT * FROM `petugas` WHERE `username` = '".$data['username']."' AND `password` = '".$data['password']."'")->num_rows();
	}
	public function getActivePetugasUser($data)
	{
		return $this->db->get_where('petugas', array('username' => $data['username'],'password' => $data['password']))->row_array();
	}
	public function getPetugas()
	{
		return $this->db->query('SELECT * FROM `petugas`')->result();
	}
	public function tambahPetugas($data)
	{
		return $this->db->insert('petugas', $data);
	}
	public function editPetugas($data)
	{
		$this->db->set('username', $data['username']);
		$this->db->set('nama_petugas', $data['nama_petugas']);
		$this->db->where('id_petugas', $data['id_petugas']);
		return $this->db->update('petugas');
	}
	public function hapusPetugas($id)
	{
		$this->db->where('id_petugas', $id);
		return $this->db->delete('petugas');
	}
	public function prosesDonor($data)
	{
		$this->db->insert('donor', $data);
	}
	public function countPetugas()
	{
		return $this->db->query("SELECT COUNT(*) as jumlah FROM `petugas`")->row();
	}
}

/* End of file PetugasM.php */
/* Location: ./application/models/PetugasM.php */