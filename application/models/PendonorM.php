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
			SELECT pendonor.id_pendonor, pendonor.nama_pendonor, pendonor.umur_pendonor, pendonor.no_hp, acara.nama_acara, daftar.status, acara.tanggal_acara, acara.id_acara
			FROM daftar
			JOIN pendonor
			ON daftar.id_pendonor = pendonor.id_pendonor
			JOIN acara
			ON acara.id_acara = daftar.id_acara"
		)->result();
	}
	public function updateStatus($data)
	{
		$this->db->set('status', 'terlaksana');
		$this->db->where('id_pendonor', $data['id_pendonor']);
		$this->db->where('id_acara', $data['id_acara']);
		return $this->db->update('daftar');
	}
	public function updatePoin($data)
	{
		$this->db->query("UPDATE `pendonor` SET `poin` = `poin` + '".$data['poin']."' WHERE `id_pendonor` = '".$data['id_pendonor']."'");
	}
	public function countPendonor()
	{
		return $this->db->query("SELECT COUNT(*) as jumlah FROM `pendonor`")->row();
	}
}

/* End of file PendonorM.php */
/* Location: ./application/models/PendonorM.php */