<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends Backend_Controller {


	public function index()
	{
		$ci = get_instance();
		$ci->header();	        
		$ci->kontent('Testimoni/Testimoni_view');	        
		$ci->kontent('Testimoni/Modal_view');	        
		$ci->footer();
		$ci->kontent('Testimoni/Js_view');	                
	}
	public function showalldata()
	{
		$data = $this->db->get('testimoni')->result();
		echo json_encode($data);
	}
	public function getByIdData($dataId)
	{
		$data = $this->db->get_where('testimoni', ['id'=>$dataId])->result();
		echo json_encode($data);
	}
	public function prosesTambahTestimn()
	{
		$config['upload_path'] = './upload/testimony/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size']  = '25000';
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('testimn')){
			$avatar = $this->upload->data("file_name");
		}
		else{
			echo "Upload Gagal !!";
		}
		$data = [
			'gambar' => $avatar,
			'nama' => $_POST['nama-testimn'],
			'komentar' => $_POST['text-testimn'],
		];
		$isData = $this->db->insert('testimoni', $data);
		if ($isData == true) {
			$pesan['success'] = '<div class="alert alert-success bg-success text-white"> Tambah Data Berhasil ..</div>';
		}else{
			$pesan['error'] = '<div class="alert alert-danger bg-danger text-white"> Tambah Data Gagal !!</div>';
		}
		echo json_encode($pesan);
	}
	public function deleteById()
	{
		$data_id = $_GET['data_id'];
		$data_gbr = $_GET['data_gbr'];

		unlink('./upload/testimony/'.$data_gbr);
		$this->db->where('id', $data_id);
		$is = $this->db->delete('testimoni');
		if ($is == true) {
			$pesan['success'] = '<div class="alert alert-success bg-success text-white"> Hapus Data Berhasil ..</div>';
		}else{
			$pesan['error'] = '<div class="alert alert-danger bg-danger text-white"> Hapus Data Gagal !!</div>';
		}
		echo json_encode($pesan);
	}
	public function prosessUpdateTestimn()
	{
		$config['upload_path'] = './upload/testimony/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size']  = '25000';
		$data_id = $_POST['data-id-update-testimn'];
		$gbr     = $_POST['data-gbr-update-testimn'];
		
		$this->load->library('upload', $config);
		
		if ($_FILES['testimn-edit']['error'] === 4){
			$avtr = $gbr;
		}else{
			$this->upload->do_upload('testimn-edit');
			$avtr = $this->upload->data('file_name');
			unlink('./upload/testimony/'.$gbr);
		}
		$data = [
			'gambar' => $avtr,
			'nama' => $_POST['nama-testimn-edit'],
			'komentar' => $_POST['text-testimn-edit'],
		];
		$this->db->where('id', $data_id);
		$isData = $this->db->update('testimoni', $data);
		if ($isData == true) {
			$pesan['success'] = '<div class="alert alert-success bg-success text-white"> Berhasil Update Testimony ..</div>';
		}else{
			$pesan['error'] = '<div class="alert alert-danger bg-danger text-white"> Gagal Update Testimony !!</div>';
		}
		echo json_encode($pesan);	
	}

}

/* End of file Testimoni.php */
/* Location: ./application/controllers/Backend/Testimoni.php */