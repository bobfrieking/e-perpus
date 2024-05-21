<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
	}

	public function pdf()
	{
		// $data['db'] = $this->db->get_where('app', ['id_app'=>1])->row_array();
		$data['datas'] = $this->Pengembalian_buku_model->getAllDatass();
		$isi = $this->load->view('Backend/Laporan/Laporan_view', $data, TRUE);
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION,PDF_UNIT,PDF_PAGE_FORMAT,TRUE, 'UTF-8', false);
		$pdf->setPrintFooter(false);
		$pdf->setPrintHeader(false);
		$pdf->SetAutoPageBreak(true,PDF_MARGIN_BOTTOM);
		$pdf->AddPage('');
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
		// $pdf->write(0,'Laporan Data Perpustakaan','',0,'L',true,0,false);
		$pdf->SetFont('helvetica', '', 14, '', true);

		$pdf->writeHTML($isi);
		$pdf->Output('Laporan.pdf','I');	
	}

}

/* End of file Laporan.php */
/* Location: ./application/controllers/Backend/Laporan.php */