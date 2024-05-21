<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends Backend_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Datatables');
	}

	public function index()
	{
		
		$obj['penerbit'] = $this->Buku_model->get_data_penerbit();
		$obj['pengarang'] = $this->Buku_model->get_data_pengarang();
		$obj['kategori_buku'] = $this->Buku_model->get_all_kategori();
		$obj['buku'] = $this->Buku_model->getAllDataBuku();
		$this->header();
		$this->kontent('Buku/Buku_view',$obj);
		$this->kontent('Buku/modal_view',$obj);
		$this->footer();
		$this->kontent('Buku/Js_view');

	}
	public function getByInputValue()
	{
		$ipb = $this->input->post('id_penerbit');
		$data = $this->db->get_where('penerbit_buku',['id_penerbit' => $ipb]);
		$Send = $data->result();
		echo json_encode($Send);
	}
	public function EditDataBuku($id = NULL)
	{
		$data['getbuku'] = $this->Buku_model->getByIdBuku($id);
		$data['penerbit'] = $this->Buku_model->get_data_penerbit();
		$data['pengarang'] = $this->Buku_model->get_data_pengarang();
		$data['kategori_buku'] = $this->Buku_model->get_data_kategori();
		$data['buku'] = $this->Buku_model->getAllDataBuku();
		$this->header();
		$this->kontent('Buku/Buku_editView',$data);
		$this->footer();
		$this->kontent('Buku/Js_view');
	}
	public function kategori_buku()
	{
		$this->header();
		$this->kontent('Buku/B_kategori_view');
		$this->kontent('Buku/modal_view');
		$this->footer();
		$this->kontent('Buku/Js_view');
	}
	public function penerbit_buku()
	{
		$this->header();
		$this->kontent('Buku/B_penerbit_view');
		$this->kontent('Buku/modal_view');
		$this->footer();
		$this->kontent('Buku/Js_view');
	}
	public function pengarang_buku()
	{
		$this->header();
		$this->kontent('Buku/B_pengarang_view');
		$this->kontent('Buku/modal_view');
		$this->footer();
		$this->kontent('Buku/Js_view');
	}
	public function tampil_data_kategori()
	{
		header('Content-Type:application/json');
		echo $this->Buku_model->get_data_kategori();
	}
	public function tampil_data_penerbit()
	{
		$Send = $this->Buku_model->get_data_penerbit();
		echo json_encode($Send);
	}
	public function tampil_data_pengarang()
	{
		$Send = $this->Buku_model->get_data_pengarang();
		echo json_encode($Send);
	}
	public function getById()
	{
		$id = $_POST['id'];
		$Send = $this->Buku_model->id_get($id)->result();
		echo json_encode($Send);
	}
	public function getByIdPenerbit()
	{
		$id = $this->input->post('id');
		$obj = $this->Buku_model->id_getPenrbit($id)->result();
		echo json_encode($obj);
	}
	public function getByIdPengarang()
	{
		$id = $this->input->post('id');
		$obj = $this->Buku_model->id_getPengrng($id);
		echo json_encode($obj);
	}
	public function tambah_kategori()
	{
		$data = ['kategori' => $_POST['kategori_buku']];
		$json = $this->db->insert('kategori_buku', $data);
		echo json_encode($json);
	}
	public function tambah_penerbit()
	{
		$data = [
			'nama_penerbit' => $_POST['npb'],
			'tahun_terbit'  => $_POST['ttb'],
		];
		$json = $this->Buku_model->tambah_penerbit_buku($data);
		echo json_encode($json);
	}
	public function tambah_pengarang()
	{
		$Obj = ['nama_pengarang' => $this->input->post('nmpb')];
		$json = $this->Buku_model->tambah_pengarang_buku($Obj);
		echo json_encode($json);
	}
	public function proses_update_buku()
	{
			$kategori = $_POST['kategori_ubah'];
			$id = $_POST['id_kategori'];
			$data_ubh = ['kategori' => $kategori];
			$Send = $this->Buku_model->update_kategori($id , $data_ubh);
			echo json_encode($Send);
	}
	public function proses_update_penerbit()
	{
		$id  = $this->input->post('idpenerbit');
		$npb = $this->input->post('nm_penerbit');
		$ttb = $this->input->post('thn_terbit');
		$updt_data = ['nama_penerbit' => $npb,
			          'tahun_terbit'  => $ttb];
		$Send = $this->Buku_model->update_penerbit_buku($id ,$updt_data);
		echo json_encode($Send);
	}
	public function proses_update_pengarang_buku()
	{
		$id = $this->input->post('id_pengarang');
		$data = ['nama_pengarang' => $this->input->post('pengarang_buku')];
		$send = $this->Buku_model->update_pengarang_buku($id , $data);
		echo json_encode($send);
	}
	public function delete_kategori()
	{
		$id = $_POST['id'];
		$Send = $this->Buku_model->hapus_kategori($id);
		echo json_encode($Send);
	}
	public function delete_pnrbit_buku()
	{
		$id = $this->input->post('id');
		$Obj = $this->Buku_model->hapus_penerbit($id);
		echo json_encode($Obj);
	}
	public function delete_pngrng_buku()
	{
		$id = $this->input->post('id');
		$Send = $this->Buku_model->hapus_pengarang($id);
		echo json_encode($Send);
	}



	// Buku Option 

	public function tambah_buku()
	{
		$config['upload_path'] = './upload/buku/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size']  = '35000';
		$config['max_width']  = '19024';
		$config['max_height']  = '19768';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('buku')){
			echo $this->upload->display_errors();
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			echo "success";
		}
		$data = ['judul_buku'   => $this->input->post('judul-buku'),
				'rating'        => $this->input->post('rating-buku'),
				'id_pengarang' => $this->input->post('namapengarang'),
				'id_penerbit'  => $this->input->post('namapenerbit'),
				'id_kategori'  => $this->input->post('kategoribuku'),
				'gambar'       => $this->upload->data('file_name'),
				'stok'         => $this->input->post('stokbuku'),
				'deskripsi'    => $this->input->post('deskripsibuku')];
		$msg = $this->Buku_model->tambah_buku($data);
		if ($msg == TRUE) {
			$psn['buku'] = '<div class="alert alert-success bg-success text-white"><strong>Berhasil ..</strong> Tambah Data Buku</div>';
		}else{
			$psn['buku'] = '<div class="alert alert-danger bg-danger text-white"><strong>Gagal ..</strong> Tambah Data Buku</div>';
		}
		$this->session->set_flashdata( $psn );
		redirect('Admin/Data_buku');
	}
	public function GetByIdBuku()
	{
		$id = $this->input->post('id');
		$SendJson = $this->Buku_model->getDataByIdBuku($id);
		echo json_encode($SendJson);
	}
	public function delete_data_buku()
	{
		$id = $this->input->post('id-buku');
		$gbr= $this->input->post('gbr-buku');
		$msg = $this->Buku_model->delete_buku($id , $gbr);
		if ($msg == TRUE) {
			$psn['buku'] = '<div class="alert alert-success bg-success text-white"><strong>Berhasil ..</strong> Hapus Data Buku</div>';
		}else{
			$psn['buku'] = '<div class="alert alert-danger bg-danger text-white"><strong>Gagal ..</strong> Hapus Data Buku</div>';
		}
		$this->session->set_flashdata( $psn );
		redirect('Admin/Data_buku');
	}
	public function update_buku($id)
	{
		$config['upload_path'] = './upload/buku/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size']  = '35000';
		$config['max_width']  = '19024';
		$config['max_height']  = '19768';
		$gbr_lama = $_POST['gbr_lama'];

		$this->load->library('upload', $config);
		
		if ($_FILES['buku-edit']['error'] === 4) {
			$gbr = $gbr_lama;
		}else{
			$this->upload->do_upload('buku-edit');
			$gbr = $this->upload->data('file_name');
			unlink('upload/buku/'.$gbr_lama);
		}

		$ubah_data_buku = ['judul_buku'   => $this->input->post('judul-buku-edit'),
				'rating'        => $this->input->post('rating-buku-edit'),
				'id_pengarang' => $this->input->post('namapengarang-edit'),
				'id_penerbit'  => $this->input->post('namapenerbit-edit'),
				'id_kategori'  => $this->input->post('kategoribuku-edit'),
				'gambar'       => $gbr,
				'stok'         => $this->input->post('stokbuku-edit'),
				'deskripsi'    => $this->input->post('deskripsibuku-edit')];
		$msg = $this->Buku_model->update_buku($id , $ubah_data_buku);
		if ($msg == TRUE) {
			$psn['buku'] = '<div class="alert alert-success bg-success text-white"><strong>Berhasil ..</strong> Update Data Buku</div>';
		}else{
			$psn['buku'] = '<div class="alert alert-danger bg-danger text-white"><strong>Gagal ..</strong> Update Data Buku</div>';
		}
		$msg = $this->session->set_flashdata( $psn );
		redirect('Admin/Data_buku');
	}


}

/* End of file Buku.php */
/* Location: ./application/controllers/Backend/Buku.php */