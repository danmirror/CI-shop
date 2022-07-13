<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Checkout extends CI_Controller {

    public function __construct(){
    parent::__construct();
    $this->load->model("Model_product");
    $this->load->model("Model_shopping");
    $this->load->library("cart");
    }
    public function index()
    {
        if (!isset($this->session->userdata['logged_in'])) {
            redirect('Login',$data);
        }else{
        $id = $this->session->userdata['logged_in']['id'];
        $this->load->model("Model_pelanggan");
        $data['pelanggan']=$this->Model_pelanggan->get_pelanggan_byid($id);
        $data['cart_list']=$this->cart->contents();
        $this->load->view('header');
        $this->load->view('checkout',$data);
        $this->load->view('footer');
        }
    }
    public function proses(){
        $idpelanggan=($this->session->userdata['logged_in']['id']);
        $transid=$idpelanggan.'-'.date("dmY-his");
        $data['transid']=$transid;
        $data['cart']=$this->cart->contents();
        $subtotal=0;
        foreach($data['cart'] as $cart){
            $subtotal=$subtotal+$cart['subtotal'];
        }
        $ongkir=0;
        $totalbayar=$subtotal+$ongkir;
        $post = $this->input->post();
        $data['checkout']=array(
            "idpelanggan"=>$idpelanggan,
            "tglorder"=>date("Y-m-d"),
            "alamat"=>$post['txtalamat'],
            "kota"=>$post['txtkota'],
            "provinsi"=>$post['txtprovinsi'],
            "kodepos"=>$post['txtkodepos'],
            "subtotal"=>$subtotal,
            "ongkir"=>$ongkir,
            "totalbayar"=>$totalbayar,
            "metodebayar"=>$post['rdmetode']
            );
        //print_r($data);
        $this->Model_shopping->save($data);
        $this->cart->destroy();
        redirect('Checkout/report/'.$transid);
    }

    public function report($transid){
        $data['order']=$this->Model_shopping->get_order_byid($transid);
        $this->load->view('header');
        $this->load->view('checkout_report',$data);
        $this->load->view('footer');
    }
}
    