<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian_buku_model extends CI_Model {

	// public $kolom = 'gambar,judul_buku,id_peminjaman,users.id_users,nama,foto,tgl_pinjam,batas_pinjam,jml_pinjam,denda,peminjaman.status,id_level,tgl_kembali,keterangan';
	// public $tabel = 'pengembalian';

	public function getAllDatass()
		{
			$this->db->select('gambar,judul_buku,id_peminjaman,users.id_users,nama,foto,tgl_pinjam,batas_pinjam,jml_pinjam,IF(tgl_kembali > batas_pinjam, ABS(DATEDIFF(batas_pinjam, tgl_kembali) * 1000), 0) AS denda,peminjaman.status,id_level,tgl_kembali,keterangan');
			$this->db->from('peminjaman');
			$this->db->limit(45); // Data Cetak 45 Baris 
			$this->db->where('peminjaman.status',2);
			$this->db->order_by('tgl_kembali', 'desc');
			$this->db->join('users', 'users.id_users = peminjaman.id_users', 'left');
			$this->db->join('buku', 'buku.id_buku = peminjaman.id_buku', 'left');
			return $this->db->get();
		}
	public function getAllData()
		{
			$this->datatables->select('gambar,judul_buku,id_peminjaman,users.id_users,nama,foto,tgl_pinjam,batas_pinjam,jml_pinjam,IF(tgl_kembali > batas_pinjam, ABS(DATEDIFF(batas_pinjam, tgl_kembali) * 1000), 0) AS denda,peminjaman.status,id_level,tgl_kembali,keterangan');
			$this->datatables->from('peminjaman');
			$this->datatables->join('users', 'users.id_users = peminjaman.id_users', 'left');
			$this->datatables->join('buku', 'buku.id_buku = peminjaman.id_buku', 'left');
			$this->datatables->where('peminjaman.status',2); //<--- DiKembalikan
			$this->db->order_by('tgl_kembali', 'desc');
			$this->datatables->add_column('status','<span class="badge badge-info"><i class="mdi mdi-arrow-left"></i> DiKembalikan</span>');
			$this->datatables->add_column('btn-aksi','<a data-id="$1" class="text-danger btn-hapus-data" href="javascript:void(0)"><i class="mdi mdi-delete"></i> Delete</a>','id_peminjaman');
			return $this->datatables->generate();
		}
	public function Chart2()
		{
			$this->db->select('peminjaman.id_peminjaman,denda,tanggal,SUM(denda) As jml_denda');
			$this->db->join('peminjaman', 'peminjaman.id_peminjaman = pengembalian.id_peminjaman', 'left');
			$this->db->where('tanggal >=', date('y-m'));
			$this->db->group_by('MONTH(tanggal)');
			$this->db->order_by('tanggal', 'asc');
			$query = $this->db->get('pengembalian');
			return $query->result();
		}
	public function getAllDataById_users()
		{
			$this->db->select('gambar,judul_buku,id_pengembalian,peminjaman.id_peminjaman,users.id_users,nama,foto,tgl_pinjam,batas_pinjam,jml_pinjam, DATEDIFF(batas_pinjam, tgl_kembali) * 1000 AS denda,peminjaman.status,id_level,tanggal,keterangan');
			$this->db->from('pengembalian');
			$this->db->where('users.id_users', $this->session->userdata('id_users'));
			$this->db->order_by('tanggal', 'desc');
			$this->db->join('peminjaman', 'peminjaman.id_peminjaman = pengembalian.id_peminjaman', 'left');
			$this->db->join('users', 'users.id_users = peminjaman.id_users', 'left');
			$this->db->join('buku', 'buku.id_buku = peminjaman.id_buku', 'left');
			return $this->db->get();
		}
	public function deleteDataaa($id)
		{
			$db = $this->db->get_where($this->tabel, ['id_pengembalian'=>$id])->row_array();

			 unlink('./upload/anggota/'.$db['foto']);
			$this->db->where('id_pengembalian', $id);
			return $this->db->delete($this->tabel);
		}	

}

/* End of file Pengembalian_buku_model.php */
/* Location: ./application/models/Pengembalian_buku_model.php */