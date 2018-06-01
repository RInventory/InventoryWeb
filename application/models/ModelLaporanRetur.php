<?php
	class ModelLaporanRetur extends CI_Model{
		function list_retur(){
			$this->db->select('detail_retur.iddetail_retur, detail_retur.stok_retur, detail_retur.keterangan_barangretur, detail_retur.barang_retur_kode_retur , barang.nama_barang, barang.tmp_simpanbarang, barang.gambar_barang, barang.kategori_id_kategori, barang_retur.tgl_retur, barang_retur.supplier_id_supplier, barang_retur.users_id');
			$this->db->from('detail_retur');
			$this->db->join('barang', 'barang.id_barang = detail_retur.iddetail_retur');
			$this->db->join('barang_retur', 'barang_retur.kode_retur = detail_retur.iddetail_retur');
			$query = $this->db->get();
			return $result = $query->result_array();
			
			
		}
	}
?>