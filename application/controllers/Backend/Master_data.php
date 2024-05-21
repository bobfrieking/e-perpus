<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Master_data extends Backend_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Datatables');
	}
	public function index()
	{
		$this->header();
		$this->kontent('Master_data/Petugas_view');
		$this->kontent('Master_data/Modal_view');
		$this->footer();
		$this->kontent('Master_data/Js_view');
	}
	public function tampil_data_anggota()
	{
		$this->header();
		$this->kontent('Master_data/Anggota_view');
		$this->kontent('Master_data/Modal_view');
		$this->footer();
		$this->kontent('Master_data/Js_view');
	}
	public function get_all_data_anggota()
	{
		header('Content-Type:application/json');
		echo $this->Data_master_model->get_data_anggota();
	}
	public function get_all_data_petugas()
	{
		header('Content-Type:application/json');
		echo $this->Data_master_model->get_data_petugas();
	}
	// Tampilan Awal Data Anggota
	public function tambah_petugas()
	{
		$config['upload_path'] = './upload/petugas/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size']  = '30000';
		$config['max_width']  = '19024';
		$config['max_height']  = '19768';
		$config['encrypt_name']  = FALSE;	
		$this->load->library('upload', $config);	
		if ( ! $this->upload->do_upload('petugas')){
			echo $this->upload->display_errors();
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			echo "success";
		}
		$ins = [
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'password' => sha1($this->input->post('password')),
			'no_hp' => $this->input->post('no_hp'),
			'alamat' => $this->input->post('alamat'),
			'foto'  => $this->upload->data('file_name'),
 			'id_level' => 1,
			'status' => 1,
		];
		$this->Data_master_model->tambah_petugas($ins);
	}
	public function delete_petugas()
	{
		$data_id = $this->input->post("data_id");
		$data_foto = $this->input->post("data_foto");
		$this->Data_master_model->deletedataPetugas($data_id,$data_foto);
	}
	public function get_dataId()
	{
		$id = $this->input->post('id');

		$json = $this->Data_master_model->db_get_id($id);
		echo json_encode($json);
	}
	public function edit_petugas()
	{
		$config['upload_path'] = './upload/petugas/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size']  = '30000';
		$config['max_width']  = '19024';
		$config['max_height']  = '19768';
		$config['encrypt_name']  = FALSE;
		
		$id = $this->input->post('id');
		$gbr_old = $this->input->post('gbr_lama');

		$this->load->library('upload', $config);
		
		if ($_FILES['petugas-edit']['error'] === 4) {
			$img = $gbr_old;
		}else{
			$this->upload->do_upload('petugas-edit');
			$img = $this->upload->data('file_name');
			unlink('./assets/document/Petugas/'.$gbr_old);
		}

		$updt = [
			'nama' => $this->input->post('nama-e'),
			'email' => $this->input->post('email-e'),
			'password' => sha1($this->input->post('password-e')),
			'no_hp' => $this->input->post('no_hp-e'),
			'alamat' => $this->input->post('alamat-e'),
			'foto'  => $img,
 			'id_level' => 1,
			'status' => $this->input->post('status'),
		];
		$this->Data_master_model->proses_update_petugas($updt , $id);
	}
	// Aksi Data Anggota
	public function tambah_anggota()
	{
		$config['upload_path'] = './upload/anggota/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size']  = '30000';
		$config['max_width']  = '19024';
		$config['max_height']  = '19768';
		$config['encrypt_name']  = FALSE;	
		$this->load->library('upload', $config);	
		if ( ! $this->upload->do_upload('anggota')){
			echo $this->upload->display_errors();
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			echo "success";
		}
		$ins = [
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => sha1($this->input->post('password')),
			'no_hp' => $this->input->post('no_hp'),
			'alamat' => $this->input->post('alamat'),
			'foto'  => $this->upload->data('file_name'),
 			'id_level' => 2,
			'status' => 1,
		];
		$msg = $this->db->insert('users',$ins);
		if ($msg == TRUE) {
			$this->pesan('<strong>Berhasil ..</strong> Tambah Data Anggota','success');
		}else{
			$this->pesan('<strong>Gagal !!</strong> Tambah Data Anggota','danger');
		}
		redirect('Admin/Data_anggota');
	}
	public function tampil_dataById()
	{
		$id = $this->input->post('id');
		$send = $this->Data_master_model->get_status($id)->result();
		echo json_encode($send);
	}
	public function delete_data_anggota()
	{
		$id = $this->input->post('id');

		$db = $this->db->get('users', array('id_users'=>$id))->row_array();
		unlink('./upload/anggota/'.$db['foto']);
		$this->db->where('id_users', $id);
		$msg = $this->db->delete('users');
	}
	public function update_status_anggota()
	{
		$id      = $_GET['Id'];
		$status  = $_GET['status'];
		$this->Data_master_model->status_update($id , $status);
	}
}

/* End of file Master_data.php */
/* Location: ./application/controllers/Backend/Master_data.php */