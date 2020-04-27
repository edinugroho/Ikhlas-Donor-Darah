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
}

/* End of file PmiM.php */
/* Location: ./application/models/PmiM.php */