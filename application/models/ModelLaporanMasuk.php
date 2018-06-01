<?php
	class ModelLaporanMasuk extends CI_Model{
		function list_masuk(){
			$this->db->select('detail_masuk.iddetail_masuk, detail_masuk.stok_masuk, detail_masuk.barang_masuk_kode_masuk , barang.nama_barang, barang.tmp_simpanbarang, barang.gambar_barang, barang.kategori_id_kategori, barang_masuk.tgl_masuk, barang_masuk.keterangan_masuk, barang_masuk.supplier_id_supplier, barang_masuk.users_id');
			$this->db->from('detail_masuk');
			$this->db->join('barang', 'barang.id_barang = detail_masuk.iddetail_masuk');
			$this->db->join('barang_masuk', 'barang_masuk.kode_masuk = detail_masuk.iddetail_masuk');
			$query = $this->db->get();
			return $result = $query->result_array();
			
			
		}
	}
?>