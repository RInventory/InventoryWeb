<?php
	class ModelLaporanKeluar extends CI_Model{
		function list_keluar(){
			$this->db->select('detail_keluar.iddetail_keluar, detail_keluar.stok_keluar, detail_keluar.barang_keluar_kode_keluar , barang.nama_barang, barang.tmp_simpanbarang, barang.gambar_barang, barang.kategori_id_kategori, barang_keluar.tgl_keluar, barang_keluar.keterangan_keluar,  barang_keluar.users_id');
			$this->db->from('detail_keluar');
			$this->db->join('barang', 'barang.id_barang = detail_keluar.iddetail_keluar');
			$this->db->join('barang_keluar', 'barang_keluar.kode_keluar = detail_keluar.iddetail_keluar');
			$query = $this->db->get();
			return $result = $query->result_array();
			
			
		}
	}
?>