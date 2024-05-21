<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function login_admin($tabel,$cek)
	{
		$this->db->select('id_users,username,password,email,nama,alamat,foto,level.id_level,level.level,status');
		$this->db->join('level', 'level.id_level = users.id_level', 'left');
		$this->db->where($cek);
		return $this->db->get($tabel);
	}
	public function login_anggota($tbl,$cek_anggt)
	{
		$this->db->select('id_users,username,password,email,nama,alamat,foto,level.id_level,level.level,status');
		$this->db->join('level', 'level.id_level = users.id_level', 'left');
		$this->db->where($cek_anggt);
		return $this->db->get($tbl);
	}
	public function proses_daftr_anggota($data)
	{
		return $this->db->insert('users', $data);
	}
	public function editProfile_anggota()
	{
		$this->db->select('id_users,username,password,email,nama,alamat,foto,no_hp,level.id_level,level.level,status');
		$this->db->join('level', 'level.id_level = users.id_level', 'left');
		$this->db->where('id_users',$this->session->userdata('id_users'));
		return $this->db->get('users');
	}
	public function Proses_update_profile_anggota($Obj_update)
	{
		$this->db->where('id_users', $this->session->userdata('id_users'));
		return $this->db->update('users', $Obj_update);
	}
	public function getnewAnggota()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->order_by('id_users', 'desc');
		$this->db->where("(id_level='2' AND status='0')");
		// $this->db->limit(3);
		return $this->db->get();
	}

}

/* End of file Users_model.php */
/* Location: ./application/models/Users_model.php */