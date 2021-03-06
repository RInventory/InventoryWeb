<?php

class barang extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('ModelBarang');
        $this->load->model('ModelKategori');
	}

	public function list_barang(){
		$data = array(
			'body'           => 'Barang/List', 
			'daftarbarang'   => $this->ModelBarang->list_barang(),
            
		);

		$this->load->view('Index', $data);
	}

	public function input(){
        //$a = $this->ModelKategori->list_kategori()->result();
        $data = array(
        'body'      => 'Barang/Input',
        'form'      => 'Barang/Form',
        'daftarkategori' => $this->ModelKategori->list_kategori()->result()
        );
        $this->load->view('Index', $data);
    }

    public function insert(){
        $dir = 'assets/image_upload/';
        $config['upload_path']      = 'assets/image_upload/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '2048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        if (!$this->upload->do_upload('gambar')) {
            $error = array(
                'error'     => $this->upload->display_errors(),
                'body'      => 'Barang/Input',
                'form'      => 'Barang/Form',
                'daftarkategori' => $this->ModelKategori->list_kategori()->result()
            );
            $this->load->view('index', $error);
        }else{
        $data = array(
            'id_barang'     => $this->input->post('kode'),
            'nama_barang' => $this->input->post('nama'),
            'harga_barang' => $this->input->post('harga'),
            'stok_barang' => $this->input->post('stok'),
            'tmp_simpanbarang' => $this->input->post('tempat'),
            'gambar_barang' => $dir.$this->upload->data('file_name'),
            'kategori_id_kategori' => $this->input->post('kat'),
            
        );
        $this->db->insert('barang',$data);
        redirect('Barang/list_barang');
        }   
    }

    public function delete(){
        $id_barang = $this->uri->segment(3);
        $this->ModelBarang->delete($id_barang);
        redirect('Barang/list_barang');
    }

    public function edit(){
            $id_barang = $this->uri->segment(3);
            $data = array(
            'body'      => 'Barang/Update',
            'form'      => 'Barang/FormEdit',
            'barang'  => $this->ModelBarang->update($id_barang)->row_array(),
            'daftarkategori' => $this->ModelKategori->list_kategori()->result()
            );

            $this->load->view('Index', $data);
        }

        public function update(){
            $id_barang = $this->input->post('id_barang');
            $dir = 'assets/image_upload/';
            $config['upload_path']      = 'assets/image_upload/';
            $config['allowed_types']    = 'jpg|png|jpeg';
            $config['max_size']         = '2048';
                $this->load->library('upload', $config);
                $this->upload->initialize($config); 
            if (!$this->upload->do_upload('gambar')) {
                $error = array(
                    'error'     => $this->upload->display_errors(),
                    'body'      => 'Barang/Update',
                    'form'      => 'Barang/FormEdit',
                    'daftarkategori' => $this->ModelKategori->list_kategori()->result()
                );
                $this->load->view('index', $error);
            }else{
            $data = array(
                'id_barang'     => $this->input->post('kode'),
                'nama_barang' => $this->input->post('nama'),
                'harga_barang' => $this->input->post('harga'),
                'stok_barang' => $this->input->post('stok'),
                'tmp_simpanbarang' => $this->input->post('tempat'),
                'gambar_barang' => $dir.$this->upload->data('file_name'),
                'kategori_id_kategori' => $this->input->post('kat')
            );
            $this->db->where('id_barang',$id_barang);
            $this->db->update('barang',$data);
            redirect('Barang/list_barang');
        }
}
}
?>