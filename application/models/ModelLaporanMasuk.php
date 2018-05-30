<?php
	class ModelLaporanMasuk extends CI_Model{
		function list_masuk(){
			$this->db->select('detail_masuk.*, barang.nama_barang, barang.tmp_simpanbarang, barang.gambar_barang, barang.kategori_id_kategori, barang_masuk.tgl_masuk, barang_masuk.keterangan_masuk, barang_masuk.supplier_id_supplier, barang_masuk.users_id');
			$this->db->from('detail_masuk');
			$this->db->join('barang', 'barang.id_barang = detail_masuk.iddetail_masuk');
			$this->db->join('barang_masuk', 'barang_masuk.kode_masuk = detail_masuk.iddetail_masuk');
			$query = $this->db->get();
			return $result = $query->result_array();
			
			//$sql = sprintf("SELECT detail_masuk.iddetail_masuk, detail_masuk.stok_masuk, detail_masuk.barang_id_barang, detail_masuk.Barang_masuk_kode , barang.nama_barang, barang.tmp_simpanbarang, barang.gambar_barang, barang.kategori_id_kategori, barang_masuk.tgl_masuk, barang_masuk.keterangan_masuk, barang_masuk.supplier_id_supplier, barang_masuk.users_id FROM detail_masuk JOIN barang ON barang.id_barang = detail_masuk.iddetail_masuk AND barang_masuk ON barang_masuk.kode_masuk = detail_masuk.iddetail_masuk");
			//$this->db->query($sql);
			//$query = $this->db->get();
			//return $result = $query->result_array();
		}
	}
?>