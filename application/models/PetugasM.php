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
	public function tambahPetugas($data)
	{
		return $this->db->insert('petugas', $data);
	}
}

/* End of file PetugasM.php */
/* Location: ./application/models/PetugasM.php */