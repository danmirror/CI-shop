<?php
Class Model_product extends CI_Model {

public function get_all_product(){
		return $this->db->query('select * from web_barang')->result();

}
public function get_product($limit){
		return $this->db->query('select * from web_barang limit '.$limit)->result();

}
public function get_product_bykode($kode){
		return $this->db->query("select * from web_barang where kode='$kode'")->row();

}
public function get_product_bykategori($kategori){
		return $this->db->query("select * from web_barang where kategori='$kategori'")->result();

}

public function get_kategori(){

	return $this->db->query('select * from web_kategori')->result();

}

}



