<?php

class barang extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('ModelBarang');
	}

	public function list_barang(){
		$data = array(
			'body' => 'barang/list', 
			'daftarbarang' => $this->ModelBarang->list_barang()->result(),
		);

		$this->load->view('index', $data);
	}

	public function input(){
        $data = array(
            'body'      => 'barang/input',
            'form'      => 'barang/form'
        );

        $this->load->view('index', $data);
    }

    public function insert(){
        $data = array(
            'nama_tenda' => $this->input->post('nama'),
            'ukuran_tenda' => $this->input->post('ukuran'),
            'keterangan' => $this->input->post('ket')
        );
        $this->db->insert('barang',$data);
        redirect('barang');
    }
}
?>