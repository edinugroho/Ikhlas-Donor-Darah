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
}

/* End of file PendonorM.php */
/* Location: ./application/models/PendonorM.php */