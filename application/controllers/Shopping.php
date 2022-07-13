<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->helper(array('cookie', 'url')); 
		$this->load->model("Model_product");
		$this->load->model("Model_shopping");
		$this->load->library("cart"); //Apa cart?
		
		if($this->input->cookie('login')!=''){
			$this->login = get_cookie('login');
		}
		else{
			$this->login = false;
		}

	}
	public function index()
	{
		$data['product']=$this->Model_product->get_product(20);
		$data['kategori']=$this->Model_product->get_kategori();

		$data_head['login'] = $this->login;
		$data_head['cart'] = $this->Model_shopping->get_cart(get_cookie('name'));
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

		$this->load->view('header',$data_head);
		$this->load->view('cart',$data);
		$this->load->view('footer');
	}

	public function add()
	{
		$get = $this->input->get(); //mengambil inputan pada detail
		$product =$this->Model_product->get_product_bykode($get['id']);

		if($this->input->cookie('login')==''){
			redirect('product');
		}

		$data=array(
			'id_plg'		=> get_cookie('name'),
			'trans_id' 		=> rand(100,999)+time(),
			'kode_brg' 		=> $get['id'],
			'harga' 		=> $product->hargajual,  
			'qty'			=> 1,
			'total_bayar'	=> $product->hargabeli, 
			'tgl_order'		=> time(),
		);
		$this->Model_shopping->insert_cart($data); 

		redirect('product');

	}
	public function delete($rowid){
		$data=array(
			'rowid'=>$rowid,
			'qty'=>0
		 );
		$this->cart->update($data);
		redirect('Shopping');
	}

}
