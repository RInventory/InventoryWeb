<?php

class Barang extends CI_Controller{

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
            'nama_barang' => $this->input->post('nama'),
            'harga_barang' => $this->input->post('harga'),
            'stok_barang' => $this->input->post('stok'),
            'tmp_simpanbarang' => $this->input->post('tmp'),
            'gambar_barang' => $this->input->post('gmb'),
            'kategori_id_kategori' => $this->input->post('kat')
        );
        $this->db->insert('barang',$data);
        redirect('Barang');
    }
}
?>