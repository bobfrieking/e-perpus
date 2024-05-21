<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Slider extends Backend_Controller {
	public function index()
	{
		$this->header();		
		$this->kontent('Slider/Slider_view',['slider'=> $this->db->get('carousel/slider')]);		
		$this->kontent('Slider/Modal_view');		
		$this->footer();
		$this->kontent('Slider/Js_view');		
	}
	public function proses_tambah()
	{
		$config['upload_path'] = './upload/slider/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size']  = '50000';
		$config['max_width']  = '19024';
		$config['max_height']  = '19768';	
		$this->load->library('upload', $config);	
		if ( ! $this->upload->do_upload('slider')){
			echo $this->upload->display_errors();
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			echo "success";
		}
		$thiS = $this->input;
		$data = [
			'gambar' => $this->upload->data('file_name'),
			'judul' => $thiS->post('judul'),
			'promosi' => $thiS->post('promosi'),
			'deskripsi' => $thiS->post('deskripsi'),
		];
		$success = $this->db->insert('carousel/slider', $data);
		if ($success == TRUE) {
			$this->pesan("Tambah Slider Berhasil ..","success");
		}else{
			$this->pesan("Tambah Slider Gagal ..","danger");
		}
		redirect('Backend/Slider');
	}
	public function proses_hapus_slider()
	{
		$id = $this->input->get('dataByid');
		$db = $this->db->get_where('carousel/slider', ['id'=>$id])->row_array();

		unlink('./upload/slider/'.$db['gambar']);
		$this->db->where('id', $id);
		$msgs = $this->db->delete('carousel/slider');
		if ($msgs == TRUE) {
			$this->session->set_flashdata('hapus_slider','<div class="alert alert-success bg-success">Data Berhasil Di Hapus ..</div>');
		}else{
			$this->session->set_flashdata('hapus_slider','<div class="alert alert-danger bg-danger">Data Gagal Di Hapus ..</div>');
		}
		redirect('Backend/Slider');
	}
	public function proses_update()
	{
		$config['upload_path'] = './upload/slider/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size']  = '50000';
		$config['max_width']  = '19024';
		$config['max_height']  = '19768';
		$dataId = $_POST['data-id-slider-edit'];		
		$dataGbr = $_POST['data-gbr-slider-edit'];
		$this->load->library('upload', $config);		
		if ($_FILES['slider-edit']['error'] === 4) {
			$gambar = $dataGbr;
		}else{
			$this->upload->do_upload('slider-edit');
			unlink('./upload/slider/'.$dataGbr);
			$gambar = $this->upload->data('file_name');
		}
		$thiS = $this->input;
		$dataUpdate = [
			'gambar' => $gambar,
			'judul' => $thiS->post('judul-edit-slider'),
			'promosi' => $thiS->post('promosi-edit'),
			'deskripsi' => $thiS->post('deskripsi-edit'),
		];
		$this->db->where('id', $dataId);
		$success = $this->db->update('carousel/slider', $dataUpdate);
		if ($success == TRUE) {
			$this->pesan("Tambah Slider Berhasil ..","success");
		}else{
			$this->pesan("Tambah Slider Gagal ..","danger");
		}
		redirect('Backend/Slider');
	}
	public function GetDataById()
	{
		$id_data = $this->input->get("id");
		$Send = $this->db->get_where('carousel/slider', ['id' => $id_data])->result();
		echo json_encode($Send);
	}
}

/* End of file Slider.php */
/* Location: ./application/controllers/Backend/Slider.php */