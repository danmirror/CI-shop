<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer extends CI_Controller {
/**
* Index Page for this controller.
*
* Maps to the following URL
* http://example.com/index.php/welcome
* - or -
* http://example.com/index.php/welcome/index
* - or -
* Since this controller is set as the default controller
in
* config/routes.php, it's displayed at http://example.com/
*
* So any other public methods not prefixed with an
underscore will
* map to /index.php/welcome/<method_name>
* @see
https://codeigniter.com/user_guide/general/urls.html
*/
public function __construct(){
parent::__construct();
$this->load->model("Model_pelanggan");
}
public function profile()
{
$id="";
if (!isset($this->session->userdata['logged_in'])) {
redirect('Login',$data);
}else{
$id = $this->session->userdata['logged_in']['id'];
}
$data['pelanggan']=$this->Model_pelanggan->get_pelanggan_byid($id);
$this->load->view('header');
$this->load->view('profile',$data);
$this->load->view('footer');
}
public function edit(){
$this->Model_pelanggan->edit();
redirect('Customer/profile');
}
}