<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PendonorM extends CI_Model {
	public function loginPendonor($data)
	{
		return $this->db->query("SELECT * FROM `pendonor` WHERE `username` = '".$data['username']."' AND `password` = '".$data['password']."'")->num_rows();
	}
	public function getActivePendonorUser($data)
	{
		return $this->db->get_where('pendonor', array('username' => $data['username'],'password' => $data['password']))->row_array();
	}
	public function daftar($data)
	{
		return $this->db->insert('pendonor', $data);
	}
	public function ikutiAcara($data)
	{
		$this->db->query("INSERT INTO `daftar` (`id_pendonor`, `id_acara`) VALUES ('".$data['id_pendonor']."', '".$data['id_acara']."');");
	}
	public function getPeserta()
	{
		return $this->db->query("
			SELECT pendonor.nama_pendonor, pendonor.umur_pendonor, pendonor.no_hp, acara.nama_acara, daftar.status 
			FROM daftar
			JOIN pendonor
			ON daftar.id_pendonor = pendonor.id_pendonor
			JOIN acara
			ON acara.id_acara = daftar.id_acara"
		)->result();
	}
}

/* End of file PendonorM.php */
/* Location: ./application/models/PendonorM.php */