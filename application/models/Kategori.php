<?php 
/**
 * 
 */
class Kategori extends CI_Model
{
	
	function list_kategori(){
			return $this->db->get('kategori');
		}
}
?>