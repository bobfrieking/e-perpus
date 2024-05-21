<?php
defined('BASEPATH') OR exit('No direct script access allowed');


require_once('./application/libraries/dompdf/autoload.inc.php');


use Dompdf\Dompdf;

class Mypdf {
			protected $ci;

			public function __construct()
			{
		        $this->ci =& get_instance();
			}

			public function generate($view , $data = [] , $stream=TRUE, $paper = "A4" , $orientation = "portrait" )
			{
				$dompdf = new Dompdf();
				$html = $this->ci->load->view($view, $data, TRUE);
				$dompdf->load_Html($html);
				// (Optional) Setup the paper size and orientation
				$dompdf->setPaper($paper, $orientation);

				// Render the HTML as PDF
				$dompdf->render();
				if ($stream) {
		        $dompdf->stream("Laporan.pdf", array("Attachment" => 0));
			    }else {
			        return $dompdf->output();
			    }
			}
		}

/* End of file dompdf.php */
/* Location: ./application/libraries/dompdf.php */
