<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->helper(array('cookie', 'url')); 
		$this->load->model("Model_product");
		$this->load->model("Model_cart");
		
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

		$this->load->view('header',$data_head);
		$this->load->view('cart',$data);
		$this->load->view('footer');
	}

	public function add()
	{
		$get = $this->input->get(); //mengambil inputan pada detail
		$product =$this->Model_product->get_product_bykode($get['id']);

		$cart = $this->Model_cart->get_cart(get_cookie('name'));

		$this->update();
		// var_dump("gak masuk");
		// 		exit();

		if($this->input->cookie('login')==''){
			return redirect('product');
		}

		$data=array(
			'id_plg'		=> get_cookie('name'),
			'trans_id' 		=> rand(100,999)+time(),
			'kode_brg' 		=> $get['id'],
			'harga' 		=> $product->hargajual,  
			'qty'			=> 1,
			'tgl_order'		=> time(),
		);
		$this->Model_cart->insert_cart($data); 

		return redirect('product');

	}
	public function update()
	{
		$get = $this->input->get(); //mengambil inputan pada detail
		$product =$this->Model_product->get_product_bykode($get['id']);

		$cart = $this->Model_cart->get_cart(get_cookie('name'));

		foreach($cart as $carts)
		{

			if($carts->kode == $product->kode){
				$data=array(
					'id_plg'		=> get_cookie('name'),
					'kode_brg' 		=> $get['id'],
					'qty'			=> $carts->qty+1,
					'harga'	=> $product->hargajual*($carts->qty+1), 
				);
				$this->Model_cart->update_cart($data); 
				return redirect('product');
			}
			
		}
	
	}	

	public function delete($rowid){
		$get = $this->input->get(); //mengambil inputan pada detail
		$product =$this->Model_product->get_product_bykode($rowid);

		$cart = $this->Model_cart->get_cart(get_cookie('name'));

		foreach($cart as $carts)
		{

			if($carts->kode == $product->kode){
				$data=array(
					'id_plg'		=> get_cookie('name'),
					'kode_brg' 		=> $rowid,
				);
				$this->Model_cart->delete_cart($data); 
				return redirect('cart');
			}
			
		}
	}

}
