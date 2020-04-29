<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PmiM extends CI_Model {
	public function loginPmi($data)
	{
		return $this->db->query("SELECT * FROM `pmi` WHERE `username` = '".$data['username']."' AND `password` = '".$data['password']."'")->num_rows();
	}
	public function getActivePmiUser($data)
	{
		return $this->db->get_where('pmi', array('username' => $data['username'],'password' => $data['password']))->row_array();
	}
	public function tambahPmi($data)
	{
		return $this->db->insert('pmi', $data);
	}
	public function getPmi()
	{
		return $this->db->query("SELECT * FROM `pmi`")->result();
	}
	public function tambahAcara($data)
	{
		$this->db->insert('acara', $data);
	}
	public function getAcara()
	{
		return $this->db->query("SELECT * FROM acara JOIN pmi on pmi.id_pmi = acara.id_pmi")->result();
	}
	public function getAcaraById($id)
	{
		return $this->db->query("SELECT * FROM `acara` WHERE `id_acara`='$id'")->row();
	}
	public function getAcaraTerlaksana($id_pendonor)
	{
		return $this->db->query("SELECT * FROM daftar 
			JOIN acara 
			ON daftar.id_acara = acara.id_acara 
			WHERE daftar.id_pendonor = '$id_pendonor' AND `status`='terlaksana'"
		)->result();
	}
	public function getAcaraTerdaftar($id_pendonor)
	{
		return $this->db->query("SELECT * FROM daftar 
			JOIN acara 
			ON daftar.id_acara = acara.id_acara 
			WHERE daftar.id_pendonor = '$id_pendonor' AND `status`='terdaftar'"
		)->result();
	}
	public function countAcaraTerlaksana($id_pendonor)
	{
		return $this->db->query("SELECT COUNT(*) as jumlah FROM daftar 
			JOIN acara 
			ON daftar.id_acara = acara.id_acara 
			WHERE daftar.id_pendonor = '$id_pendonor' AND `status`='terlaksana'"
		)->row();
	}
	public function countAcara($id_pendonor)
	{
		return $this->db->query("SELECT COUNT(*) as jumlah FROM daftar 
			JOIN acara 
			ON daftar.id_acara = acara.id_acara 
			WHERE daftar.id_pendonor = '$id_pendonor'"
		)->row();	
	}
	public function editAcara($data)
	{
		$this->db->set('nama_acara', $data['nama_acara']);
		$this->db->set('deskripsi', $data['deskripsi']);
		$this->db->set('poin', $data['poin']);
		$this->db->where('id_acara', $data['id_acara']);
		return $this->db->update('acara');
	}
	public function hapusAcara($id)
	{
		$this->db->where('id_acara', $id);
		return $this->db->delete('acara');
	}
	function countAllAcara(){
		return $this->db->query("SELECT COUNT(*) as jumlah FROM `acara`")->row();
	}
	public function countDarah()
	{
		return $this->db->query("SELECT COUNT(*) as jumlah FROM `donor`")->row();
	}
}

/* End of file PmiM.php */
/* Location: ./application/models/PmiM.php */