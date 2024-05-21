<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends Backend_Controller {

	public $redirect = 'Admin/Blog';

	public function index()
	{
		$content['datas'] = $this->db->get('blog');
		$this->header();		
		$this->kontent('Blog/Blog_view',$content);		
		$this->kontent('Blog/Modal_view');		
		$this->footer();
		$this->kontent('Blog/Js_view');		
	}
	public function prosesTambahblog()
	{
		$config['upload_path'] = './upload/blog/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size']  = '31000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('blog')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			echo "success";
		}
		$data = [
			'judul'    =>$this->input->post('judul'),
			'gambar'   =>$this->upload->data('file_name'),
			'nama' 	   =>$this->input->post('nama'),
			'tanggal'  =>$this->input->post('tanggal'),
			'url'      =>$this->input->post('url'),
			'deskripsi'=>$this->input->post('deskripsi'),
		];
		$ismsg = $this->db->insert('blog', $data);
		if ($ismsg == TRUE) {
			$msg['pesann'] = '<div class="alert alert-success bg-success text-white"> Berhasil Tambah Blog ..</div>';
		}else{
			$msg['pesann'] = '<div class="alert alert-danger bg-danger text-white"> Gagal Tambah Blog !!</div>';
		}
		$this->session->set_flashdata($msg);
		redirect($this->redirect);
	}
	public function DeleteBlog()
	{
		$dataId = $this->input->post('data-id-blog');

		$db = $this->db->get_where('blog', array('id'=>$dataId))->row_array();
		unlink('./upload/blog/'.$db['gambar']);

		$this->db->where('id', $dataId);
		$ismsg = $this->db->delete('blog');
		if ($ismsg == TRUE) {
			$msg['pesann'] = '<div class="alert alert-success bg-success text-white"> Berhasil Hapus Blog ..</div>';
		}else{
			$msg['pesann'] = '<div class="alert alert-danger bg-danger text-white"> Gagal Hapus Blog !!</div>';
		}
		$this->session->set_flashdata($msg);
		redirect($this->redirect);
	}
	public function getDataById($dataId)
	{
		$respons = $this->db->get_where('blog', array('id'=>$dataId))->result();
		echo json_encode($respons);
	}
	public function proses_updateblog()
	{
		$config['upload_path'] = './upload/blog/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size']  = '31000';
		$dataId = $_POST['id-edit-blog'];

		$this->load->library('upload', $config);
		
		$db = $this->db->get_where('blog', array('id'=>$dataId))->row_array();

		if ($_FILES['blog-edit']['error'] === 4) {
			$gbr = $db['gambar'];
		}else{
			unlink('./upload/blog/'.$db['gambar']);
			$this->upload->do_upload('blog-edit');
			$gbr = $this->upload->data('file_name');
		}
		$data = [
			'judul'    =>$this->input->post('judul-edit'),
			'gambar'   =>$gbr,
			'nama' 	   =>$this->input->post('nama-edit'),
			'tanggal'  =>$this->input->post('tanggal-edit'),
			'url'      =>$this->input->post('url-edit'),
			'deskripsi'=>$this->input->post('deskripsi-edit'),
		];
		$this->db->where('id', $dataId);
		$ismsg = $this->db->update('blog', $data);
		if ($ismsg == TRUE) {
			$pesann = $this->session->set_flashdata('pesann','<div class="alert alert-success bg-success text-white"> Berhasil Update Blog ..</div>');
		}else{
			$pesann = $this->session->set_flashdata('pesann','<div class="alert alert-danger bg-danger text-white"> Gagal Update Blog !!</div>');
		}
		redirect($this->redirect,$pesann);
	}

}

/* End of file Blog.php */
/* Location: ./application/controllers/Backend/Blog.php */