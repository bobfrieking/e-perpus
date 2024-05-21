<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {

		public function getAllDataBukuu()
		{
			$this->db->select('id_buku,judul_buku,rating,pengarang_buku.id_pengarang,pengarang_buku.nama_pengarang,penerbit_buku.id_penerbit,penerbit_buku.nama_penerbit,penerbit_buku.tahun_terbit,kategori_buku.id_kategori,kategori_buku.kategori,gambar,deskripsi,stok');
			$this->db->from('buku');
			$this->db->join('pengarang_buku', 'pengarang_buku.id_pengarang = buku.id_pengarang', 'left');
			$this->db->join('penerbit_buku', 'penerbit_buku.id_penerbit = buku.id_penerbit', 'left');
			$this->db->join('kategori_buku', 'kategori_buku.id_kategori = buku.id_kategori', 'left');
			$query = $this->db->get();
			return $query;
		}
		public function getAllDataBuku()
		{
			$this->db->select('id_buku,judul_buku,rating,pengarang_buku.id_pengarang,pengarang_buku.nama_pengarang,penerbit_buku.id_penerbit,penerbit_buku.nama_penerbit,penerbit_buku.tahun_terbit,kategori_buku.id_kategori,kategori_buku.kategori,gambar,deskripsi,stok');
			$this->db->from('buku');
			$this->db->join('pengarang_buku', 'pengarang_buku.id_pengarang = buku.id_pengarang', 'left');
			$this->db->join('penerbit_buku', 'penerbit_buku.id_penerbit = buku.id_penerbit', 'left');
			$this->db->join('kategori_buku', 'kategori_buku.id_kategori = buku.id_kategori', 'left');
			return $this->db->get();
		}
		public function counalldataBuku()
		{
			return $this->db->get('buku')->num_rows();
		}
	public function getDataByIdBuku($id)
		{
			$this->db->select('*');
			$this->db->join('pengarang_buku', 'pengarang_buku.id_pengarang = buku.id_pengarang', 'left');
			$this->db->join('penerbit_buku', 'penerbit_buku.id_penerbit = buku.id_penerbit', 'left');
			$this->db->join('kategori_buku', 'kategori_buku.id_kategori = buku.id_kategori', 'left');
			$this->db->where('id_buku', $id);
			return $this->db->get('buku')->result();
		}
	public function bukuTerbaru3()
		{
			$this->db->select('*');
			$this->db->join('pengarang_buku', 'pengarang_buku.id_pengarang = buku.id_pengarang', 'left');
			$this->db->join('penerbit_buku', 'penerbit_buku.id_penerbit = buku.id_penerbit', 'left');
			$this->db->join('kategori_buku', 'kategori_buku.id_kategori = buku.id_kategori', 'left');
			$this->db->order_by('id_buku', 'desc');
			$this->db->limit(3);
			return $this->db->get('buku')->result();
		}
	public function getByIdBuku($id)
		{
			$this->db->select('*');
			$this->db->join('pengarang_buku', 'pengarang_buku.id_pengarang = buku.id_pengarang', 'left');
			$this->db->join('penerbit_buku', 'penerbit_buku.id_penerbit = buku.id_penerbit', 'left');
			$this->db->join('kategori_buku', 'kategori_buku.id_kategori = buku.id_kategori', 'left');
			$this->db->where('id_buku', $id);
			return $this->db->get('buku')->row_array();
		}
	public function get_data_kategori()
		{
			$this->datatables->select('id_kategori,kategori');
			$this->datatables->from('kategori_buku');
			$this->datatables->add_column('aksi','
				<a data="$1" class="text-primary edit-data" href="javascript:void(0)"><i class="mdi mdi-pencil"></i></a> | <a data="$1" class="text-danger btnn-hapus" href="javascript:void(0)"><i class="mdi mdi-delete"></i></a>
				','id_kategori');
			return $this->datatables->generate();
		}
	public function get_all_kategori()
		{
			return $this->db->get('kategori_buku')->result();
		}	
	public function id_get($id)
		{
			$this->db->where('id_kategori', $id);
			return $this->db->get('kategori_buku');
		}
	public function update_kategori($id , $data_ubh)
		{
			$this->db->where('id_kategori', $id);
			return $this->db->update('kategori_buku', $data_ubh);
		}
	public function hapus_kategori($id = NULL)
		{
			$this->db->where('id_kategori', $id);
			return $this->db->delete('kategori_buku');
		}
	public function get_data_penerbit()
		{
			$this->db->select('*');
			$this->db->from('penerbit_buku');
			return $this->db->get()->result();
		}
	public function tambah_penerbit_buku($data)
		{
			return $this->db->insert('penerbit_buku', $data);
		}
	public function id_getPenrbit($id = NULL)
		{
			$this->db->where('id_penerbit', $id);
			return $this->db->get('penerbit_buku');
		}
	public function update_penerbit_buku($id ,$updt_data)
		{
			$this->db->where('id_penerbit', $id);
			return $this->db->update('penerbit_buku', $updt_data);
		}
	public function hapus_penerbit($id = NULL)
		{
			$this->db->where('id_penerbit', $id);
			return $this->db->delete('penerbit_buku');
		}
	public function get_data_pengarang()
		{
			return $this->db->get('pengarang_buku')->result();
		}
	public function tambah_pengarang_buku($Obj)
		{
			return $this->db->insert('pengarang_buku', $Obj);
		}
	public function id_getPengrng($id = NULL)
		{
			return $this->db->get_where('pengarang_buku', ['id_pengarang' => $id])->result();
		}
	public function hapus_pengarang($id = NULL)
		{
			$this->db->where('id_pengarang', $id);
			return $this->db->delete('pengarang_buku');
		}
	public function update_pengarang_buku($id = NULL , $data)
		{
			$this->db->where('id_pengarang', $id);
			return $this->db->update('pengarang_buku', $data);
		}
	public function tambah_buku($data)
		{
			return $this->db->insert('buku', $data);
		}
	public function update_buku($id , $ubah_data_buku)
		{
			$this->db->where('id_buku', $id);
			return $this->db->update('buku', $ubah_data_buku);
		}
	public function delete_buku($id , $gbr)
		{
			unlink('upload/buku/'.$gbr);
			$this->db->where('id_buku', $id);
			return $this->db->delete('buku');
		}
	public function getByKeyword($keyword)
		{
			$this->db->select('id_buku,judul_buku,rating,pengarang_buku.id_pengarang,pengarang_buku.nama_pengarang,penerbit_buku.id_penerbit,penerbit_buku.nama_penerbit,penerbit_buku.tahun_terbit,kategori_buku.id_kategori,kategori_buku.kategori,gambar,deskripsi,stok');
			$this->db->from('buku');
			$this->db->like('judul_buku', $keyword);
			$this->db->or_like('nama_pengarang', $keyword);
			$this->db->or_like('nama_penerbit', $keyword);
			$this->db->or_like('tahun_terbit', $keyword);
			$this->db->or_like('rating', $keyword);
			$this->db->join('pengarang_buku', 'pengarang_buku.id_pengarang = buku.id_pengarang', 'left');
			$this->db->join('penerbit_buku', 'penerbit_buku.id_penerbit = buku.id_penerbit', 'left');
			$this->db->join('kategori_buku', 'kategori_buku.id_kategori = buku.id_kategori', 'left');
			return $this->db->get();
		}
		public function getByFilterKategoriBuku($filter)
		{
			$this->db->select('id_buku,judul_buku,rating,pengarang_buku.id_pengarang,pengarang_buku.nama_pengarang,penerbit_buku.id_penerbit,penerbit_buku.nama_penerbit,penerbit_buku.tahun_terbit,kategori_buku.id_kategori,kategori_buku.kategori,gambar,deskripsi,stok');
			$this->db->from('buku');
			$this->db->like('kategori', $filter);
			$this->db->join('pengarang_buku', 'pengarang_buku.id_pengarang = buku.id_pengarang', 'left');
			$this->db->join('penerbit_buku', 'penerbit_buku.id_penerbit = buku.id_penerbit', 'left');
			$this->db->join('kategori_buku', 'kategori_buku.id_kategori = buku.id_kategori', 'left');
			return $this->db->get();
		}
		public function insertPinjamBuku($data , $id_buku ,$getStokMin ,$jml_pinjamBuku)
		{
			$this->db->where('id_buku', $id_buku);
			$this->db->update('buku', ['stok' => $getStokMin['stok']-$jml_pinjamBuku]);
			/*Update Stok + Insert*/

			return $this->db->insert('peminjaman', $data);
		}
		/*Menu Frontend*/
			public function getByRating()
				{
					$this->db->select('*');
					$this->db->from('buku');
					$this->db->join('kategori_buku', 'kategori_buku.id_kategori = buku.id_kategori', 'left');
					$this->db->where("(rating='5' OR rating='4')");
					$this->db->limit(4);
					$this->db->order_by('id_buku', 'desc');
					return $this->db->get();
				}
			public function buku_detail($data_id)
				{
					$this->db->select('id_buku,judul_buku,rating,pengarang_buku.id_pengarang,pengarang_buku.nama_pengarang,penerbit_buku.id_penerbit,penerbit_buku.nama_penerbit,penerbit_buku.tahun_terbit,kategori_buku.id_kategori,kategori_buku.kategori,gambar,deskripsi,stok');
					$this->db->from('buku');
					$this->db->where('id_buku', $data_id);
					$this->db->join('pengarang_buku', 'pengarang_buku.id_pengarang = buku.id_pengarang', 'left');
					$this->db->join('penerbit_buku', 'penerbit_buku.id_penerbit = buku.id_penerbit', 'left');
					$this->db->join('kategori_buku', 'kategori_buku.id_kategori = buku.id_kategori', 'left');
					return $this->db->get();
				}
			public function rat4limit4()
				{
					$this->db->select('*');
					$this->db->from('buku');
					$this->db->where('rating', 4);
					$this->db->limit(4);
					$this->db->order_by('id_buku', 'desc');
					return $this->db->get()->result_array();
				}
			public function rat5limit4()
				{
					$this->db->select('*');
					$this->db->from('buku');
					$this->db->where('rating', 5);
					$this->db->limit(4);
					$this->db->order_by('id_buku', 'desc');
					return $this->db->get()->result_array();
				}
			// public function autocompleteee()
			// 	{
			// 		return $this->db->get('buku')->result();
			// 	}

}

/* End of file Buku_model.php */
/* Location: ./application/models/Buku_model.php */