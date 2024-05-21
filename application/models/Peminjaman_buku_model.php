<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman_buku_model extends CI_Model {

	public $table = 'peminjaman';
	public $kolom = 'peminjaman.id_peminjaman,users.id_users,nama,foto,buku.id_buku,judul_buku,gambar,tgl_pinjam,batas_pinjam,jml_pinjam,denda,peminjaman.status,id_level';

	public function getAllDataPeminjaman()
		{
			$this->datatables->select('peminjaman.id_peminjaman,users.id_users,nama,foto,buku.id_buku,judul_buku,gambar,tgl_pinjam,batas_pinjam,jml_pinjam,denda,peminjaman.status,id_level');
			$this->datatables->from('peminjaman');
			$this->datatables->join('users', 'users.id_users = peminjaman.id_users', 'left');
			$this->datatables->join('buku', 'buku.id_buku = peminjaman.id_buku', 'left');
			// $this->datatables->join('level', 'level.id_level = users.id_level', 'left');
			$this->datatables->where("(peminjaman.status='0' OR peminjaman.status='1')");
			$this->db->order_by('id_peminjaman','desc');
			$this->datatables->add_column('btn','<a data-buku-id="$1" href="javascript:void(0)" class="text-danger btnaksi-hapus"><i class="mdi mdi-delete"></i></a>','id_peminjaman,id_users,id_buku');
			return $this->datatables->generate();
		}
	public function getAllDataPeminjamanByUserId()
		{
			$this->datatables->select('id_peminjaman,users.id_users,nama,foto,buku.id_buku,judul_buku,buku.gambar,tgl_pinjam,batas_pinjam,jml_pinjam,denda,stok,peminjaman.status,id_level');
			$this->datatables->from('peminjaman');
			$this->datatables->join('users', 'users.id_users = peminjaman.id_users', 'left');
			$this->datatables->join('buku', 'buku.id_buku = peminjaman.id_buku', 'left');
			$this->datatables->where("(peminjaman.status='0' OR peminjaman.status='1')");
			$this->db->where('users.id_users', $this->session->userdata('id_users'));
			$this->db->order_by('id_peminjaman','desc');
			$this->datatables->add_column('btn','<button data-idpnjm="$1" data-status="$2" style="border-radius:30px;" class="btn btn-sm btn-success btn-pengembalian-buku"> Kembalikan Buku</button>','id_peminjaman,peminjaman.status');
			return $this->datatables->generate();
		}
	public function getById($id_peminjaman)
		{
			$this->db->select('id_peminjaman,users.id_users,nama,foto,buku.id_buku,judul_buku,buku.gambar,tgl_pinjam,batas_pinjam,jml_pinjam,denda,stok,peminjaman.status,id_level');
			$this->db->from('peminjaman');
			$this->db->where('id_peminjaman', $id_peminjaman);
			$this->db->join('users', 'users.id_users = peminjaman.id_users', 'left');
			$this->db->join('buku', 'buku.id_buku = peminjaman.id_buku', 'left');
			return $this->db->get();		
		}
	public function delete_data_peminjaman($dataId)
		{
			$this->db->select('*');
			$this->db->from('peminjaman');
			$this->db->where('id_peminjaman', $dataId);
			$this->db->join('buku', 'buku.id_buku = peminjaman.id_buku', 'left');
			$db = $this->db->get()->row_array();

			$this->db->where('id_buku', $db['id_buku']);
			$this->db->update('buku', ['stok'=>$db['stok'] + $db['jml_pinjam']]);

			$this->db->where('id_peminjaman', $dataId);
			$this->db->delete('peminjaman');
		}	

}

/* End of file Peminjaman_buku_model.php */
/* Location: ./application/models/Peminjaman_buku_model.php */