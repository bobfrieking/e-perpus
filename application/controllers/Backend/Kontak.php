<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends Backend_Controller {

	public function __construct()
	{
		parent::__construct();
		$CI = get_instance();
	}

	public function index()
	{
		$this->header();
		$this->kontent('Kontak/Kontak_view');
		$this->kontent('Kontak/Modal_view');
		$this->footer();
		$this->kontent('Kontak/Js_view');
	}
	public function getAllData()
	{
		$item = $this->Kontak_model->getallData()->result();
		echo json_encode($item);
	}
	public function upload_file()
	{
		$config['upload_path'] = './upload/app/gmail/';
		$config['allowed_types'] = 'gif|jpg|png|zip|rar|jpeg|pdf|xlsx|doc|html|sql|bmp|js|css|';
		$config['max_size']  = '25000';

		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('emailss')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			echo "success";
		}
	}
	public function SendDataEmail()
	{
		$emails  = $this->input->post('email');
		$subjek = $this->input->post('subjek');
		$pesan  = $this->input->post('pesan');
		$pesan_client = $_POST['msg_client'];

		$CI = get_instance();

		$config['protocol']='smtp';
		$config['smtp_host']='ssl://smtp.googlemail.com';
		$config['smtp_port']='465';
		$config['smtp_timeout']='30';
		$config['smtp_user']='admnperpus1219@gmail.com';
		$config['smtp_pass']='admin122perpus';
		$config['charset']='utf-8';
		$config['newline']="\r\n";
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
		$CI->email->initialize($config);

			$send_pesan = '
                    <table style="border-style:solid;border-color:#3f48cc;text-align:center;" width="100%" cellpadding="5">
                            <tr>
                            	<th>Pesan Dari Anda !!</th>
                            </tr>
                            <tr>
                                <td>"'.$pesan_client.'"</td>
                            </tr>
                    </table><br>
                    <table style="border-style:solid;text-align:center;" width="100%" cellpadding="5">
                            <tr>
                            	<th>Pesan Dari Admin</th>
                            </tr>
                            <tr>
                                <td>'.$pesan.'</td>
                            </tr>
                    </table>';

		$CI->email->from('admnperpus1219@gmail.com', $this->session->userdata('nama'));
		$CI->email->to($emails);
		
		$CI->email->subject($subjek);
		$CI->email->message($send_pesan);
		
		if ($this->email->send()) {
			$msg['success'] = '<div class="alert alert-success bg-success text-white">Kirim Email Berhasil !!</div>';
		}else{
			$msg['error'] = $this->email->print_debugger();
			$msg['error'] = '<div class="alert alert-danger bg-danger text-white">Kirim Email Gagal !!</div>';
		}
		echo json_encode($msg);
	}
	public function deleteById()
	{
		$id = $_GET['id'];
		$is_data = $this->Kontak_model->deleteDataa($id);
		if ($is_data == TRUE) {
			$pesan['success'] = '<div class="alert alert-success bg-success text-white">Hapus Data Kontak Berhasil !!</div>';
		}else{
			$pesan['error'] = '<div class="alert alert-danger bg-danger text-white">Hapus Data Kontak Gagal !!</div>';
		}
		echo json_encode($pesan);
	}

}

/* End of file Kontak.php */
/* Location: ./application/controllers/Backend/Kontak.php */