<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Config_admin extends Backend_Controller {
	public function index()
	{
		$data['app'] = $this->db->get_where('app', ['id_app'=>1])->row_array();
		$data['bg'] = $this->db->get_where('bg_login', ['id'=>1])->row_array();
		$this->header();
		$this->kontent('Konfigurasi_halaman/konfig_view',$data);
		$this->footer();
		$this->kontent('Konfigurasi_halaman/Js_view');
	}
	public function name_app()
	{
		$config['upload_path'] = './upload/app';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size']  = '3500';
		$config['max_width']  = '19024';
		$config['max_height']  = '19768';	
		$this->load->library('upload', $config);
		$file = $this->db->get_where('app', ['id_app'=>1])->row_array();
		if ($_FILES['config-icon']['error'] === 4) {
			$icon = $file['icon'];
		}else{
			$this->upload->do_upload('config-icon');
			$icon = $this->upload->data('file_name');
			unlink('./upload/app/'.$file['icon']);
		}
		$data = [
			'nama' 	 => $_POST['nama_app'],
			'icon' 	 => $icon,
		];
		$this->db->where('id_app', 1);
		$iff = $this->db->update('app', $data);
		if ($iff == TRUE) {
			$this->session->set_flashdata('msg','<div class="alert alert-success bg-success text-white"> Berhasil Ganti Nama ..</div>');
		}
		redirect('Admin/Konfigurasi_halaman');
	}
	public function hapus_icon()
	{
		$icon = $_GET['icon'];
		$data_icon = "";
		unlink('./upload/app-icon/'.$icon);
		$this->db->where('id_app', 1);
		$Send = $this->db->update('app', ['icon'=>$data_icon]);
		if ($Send == TRUE) {
			$msg['success'] = "Hapus Icon App Berhasil ..";
		}else{
			$msg['error'] = "Hapus Icon App Gagal !!";
		}
		echo json_encode($msg);
	}
	public function proses_edit_bg()
	{
		$config['upload_path'] = './upload/app/bg/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '3500';
		$config['max_width']  = '19024';
		$config['max_height']  = '19768';
		$is_data = $_POST['data-gbr_lama'];
		$this->load->library('upload', $config);
		$is_data = $this->db->get_where('bg_login', ['id'=>1])->row_array();
		if ($_FILES['gbr-bg']['error'] === 4) {
			$bg = $is_data['bg'];
		}else{
			$this->upload->do_upload('gbr-bg');
			unlink('./upload/app/bg/'.$is_data['bg']);
			$bg = $this->upload->data('file_name');
		}
		$thiS = $this->input;
		$data = [
			'bg' => $bg,
			'judul'  => $thiS->post('judul-bg'),
			'quote'  => $thiS->post('quote-bg'),
		];
		$this->db->where('id', 1);
		$dt = $this->db->update('bg_login', $data);
		if ($dt == TRUE) {
			$msg['success'] = "Ganti Data Berhasil ..";
		}else{
			$msg['error'] = "Ganti Data Gagal !!";
		}
		echo json_encode($msg);
	}
}

/* End of file Config_admin.php */
/* Location: ./application/controllers/Backend/Config_admin.php */