<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Riwayat extends CI_Controller {
public function index()
{
$id="";
if (!isset($this->session->userdata['logged_in'])) {
redirect('Login',$data);
}else{
$id = $this->session->userdata['logged_in']['id'];
}
$this->load->model("Model_shopping");
$data['order']=$this->Model_shopping->get_order_byidpelanggan($id);
$this->load->view('header');
$this->load->view('riwayat',$data);
$this->load->view('footer');
}
}
