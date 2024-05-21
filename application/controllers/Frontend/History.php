<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends Frontend_Controller {

	public function index()
	{
		$data['histori'] = $this->Pengembalian_buku_model->getAllDataById_users();
		$this->header();
		$this->kontent('History/History_view',$data);
		$this->footer();
	}

}

/* End of file History.php */
/* Location: ./application/controllers/Frontend/History.php */