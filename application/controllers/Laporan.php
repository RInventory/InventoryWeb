<?php
	class Laporan extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('ModelLaporanMasuk');
		}

		public function list_masuk(){
		$data = array(
			'body'           => 'LaporanMasuk/List', 
			'daftarmasuk'   => $this->ModelLaporanMasuk->list_masuk()
            
		);

			$this->load->view('Index', $data);
		}

	}
?>