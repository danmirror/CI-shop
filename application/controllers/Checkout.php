<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Checkout extends CI_Controller {

    public function __construct(){
        parent::__construct(); 
        $this->load->helper(array('cookie', 'url'));
		$this->load->model("Model_cart");
		$this->load->model("Model_product");

		if($this->input->cookie('login')!=''){
			$this->login = get_cookie('login');
		}
		else{
			$this->login = false;
		}
    }
    public function index()
    {
        // if (!isset($this->session->userdata['logged_in'])) {
        //     redirect('Login',$data);
        // }else{
            $data['product']=$this->Model_product->get_all_product();
            $data['kategori']=$this->Model_product->get_kategori();
    
            $data_head['login'] = $this->login;
            $data_head['cart'] = $this->Model_cart->get_cart(get_cookie('name'));
            $count = 0;
            $price = 0;
            $product_cart =[];
            foreach($data['product'] as $pd)
            {
                foreach($data_head['cart'] as $dt)
                {
                    if($dt->kode == $pd->kode){
                        $price += $dt->harga;
                        $count++;
                        $product_cart[]=$this->Model_product->get_product_bykode($pd->kode);
                    }
                }
            }
            $data_head['count'] = $count;
            $data_head['price'] = $price;
            $data_head['product_cart'] = $product_cart;
    
            // var_dump($this->login);
            // exit();
            $this->load->view('header',$data_head);
            $this->load->view('checkout',$data);
            $this->load->view('footer');
        // }
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
    