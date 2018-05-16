<?php

class barang extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('ModelBarang');
        $this->load->model('Kategori');
	}

	public function list_barang(){
		$data = array(
			'body'           => 'Barang/List', 
			'daftarbarang'   => $this->ModelBarang->list_barang(),
            
		);

		$this->load->view('Index', $data);
	}

	public function input(){
        $data = array(
            'body'      => 'Barang/Input',
            'form'      => 'Barang/Form',
            'daftarkategori' => $this->Kategori->list_kategori()->result()
        );

        $this->load->view('Index', $data);
    }

    public function insert(){
        $data = array(
            'id_barang'     => $this->input->post('kode'),
            'nama_barang' => $this->input->post('nama'),
            'harga_barang' => $this->input->post('harga'),
            'stok_barang' => $this->input->post('stok'),
            'tmp_simpanbarang' => $this->input->post('tempat'),
            // 'gambar_barang' => $this->input->post('gmb'),
            'kategori_id_kategori' => $this->input->post('kat')
        );
        $this->db->insert('barang',$data);
        redirect('Barang/list_barang');
    }

    public function delete(){
        $id_barang = $this->uri->segment(3);
        $this->ModelBarang->delete($id_barang);
        redirect('Barang/list_barang');
    }
}
?>