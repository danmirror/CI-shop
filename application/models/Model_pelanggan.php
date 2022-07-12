<?php
Class Model_pelanggan extends CI_Model {
public function get_all_pelanggan(){
return $this->db->query('select * from web_pelanggan')->result();
}
public function get_pelanggan_byid($id){
$sql="select * from web_pelanggan where id='$id'";
return $this->db->query($sql)->row();}
public function get_pelanggan_byuserid($userid){
$sql="select * from web_pelanggan where userid='$userid'";
return $this->db->query($sql)->row();
}
public function edit(){
$id="";
if (!isset($this->session->userdata['logged_in'])) {
redirect('Login',$data);
}else{
$id = $this->session->userdata['logged_in']['id'];
}
$data=$this->input->post();
$sql="update web_pelanggan set nama='$data[txtnama]',
alamat='$data[txtalamat]',
kota='$data[txtkota]', provinsi='$data[txtprovinsi]',
kodepos='$data[txtkodepos]',
email='$data[txtemail]', telp='$data[txttelp]' where
id='$id'";
$this->db->query($sql);
} }
