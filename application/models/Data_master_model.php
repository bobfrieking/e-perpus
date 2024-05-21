<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_master_model extends CI_Model {

	public $tabel = 'users';
	public $kolom = 'id_users,foto,nama,username,no_hp,email,alamat,status,level.id_level,level.level';

	public function get_data_petugas()
		{
			$this->datatables->select($this->kolom);
			$this->datatables->from($this->tabel);
			$this->datatables->join('level', 'level.id_level = users.id_level', 'left');
			$this->datatables->where('level', $this->session->userdata('level'));
			$this->datatables->add_column('aksi','
				<a data="$1" href="javascript:void(0);" class="action-icon btn-edit" title="Dilarang Edit"> <i class="mdi mdi-square-edit-outline bg-primary text-white rounded"></i></a>
				
				<a data="$1" data-foto="$2" href="javascript:void(0)" class="action-icon text-danger btn-delete-petugas" title="Dilarang menghapus"> <i class="mdi mdi-delete-outline bg-danger text-white rounded"></i></a>
				','id_users,foto');
			return $this->datatables->generate();
		}
		public function get_data_anggota()
		{
			$this->datatables->select($this->kolom);
			$this->datatables->from($this->tabel);
			$this->datatables->join('level', 'level.id_level = users.id_level', 'left');
			$this->datatables->where('level', "Anggota");
			$this->db->order_by('id_users', 'desc');
			$this->datatables->add_column('aksi','
				<a onclick="btn_confirm_delete_anggota($1)" href="javascript:void(0)" class="action-icon text-danger btn-delete-dt-anggota"> <i class="mdi mdi-delete"></i></a>
				','id_users,foto');
			return $this->datatables->generate();
		}
	public function tambah_petugas($ins)
		{
			return $this->db->insert('users', $ins);
		}
	public function deletedataPetugas($data_id,$data_foto = NULL)
	{
		unlink('upload/Petugas/'.$data_foto);

		$this->db->where('id_users', $data_id);
		return $this->db->delete($this->tabel);
	}
	public function db_get_id($id)
		{
			return $this->db->get_where('users',array('id_users' => $id))->result();
		}
	public function proses_update_petugas($updt , $id)
		{
			$this->db->where('id_users', $id);
			return $this->db->update('users', $updt);
		}
	public function get_status($id = NULL)
		{
		$this->db->where('id_users', $id);
		return $this->db->get('users');
		}
	public function status_update($id = NULL , $status)
		{
			$this->db->where('id_users', $id);
			return $this->db->update('users', ['status'=>$status]);
		}

}

/* End of file Data_master_model.php */
/* Location: ./application/models/Data_master_model.php */