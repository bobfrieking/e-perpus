<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengunjung_model extends CI_Model {

	public function Chart()
		{
			$this->db->select('pengunjung,tanggal,SUM(pengunjung) AS data_rata2');
			$this->db->where('tanggal >=', date('y-m'));
			// $this->db->where('tanggal >=', $tanggal);
			$this->db->group_by('MONTH(tanggal)');
			$this->db->order_by('DATE (tanggal)', 'asc');
			$query = $this->db->get('data_pengunjung');
			return $query->result();
		}	

}

/* End of file Data_pengunjung_model.php */
/* Location: ./application/models/Data_pengunjung_model.php */