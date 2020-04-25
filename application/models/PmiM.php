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
}

/* End of file PmiM.php */
/* Location: ./application/models/PmiM.php */