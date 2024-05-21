<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_model extends CI_Model {

	public function getallData()
		{
			$this->db->select('*');
			$this->db->from('kontak');
			$this->db->order_by('id', 'desc');
			return $this->db->get();
		}
	public function deleteDataa($id = NULL)
		{
			$this->db->where('id', $id);
			return $this->db->delete('kontak');
		}

}

/* End of file Kontak_model.php */
/* Location: ./application/models/Kontak_model.php */