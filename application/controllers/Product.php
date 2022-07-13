<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	private $login;

	function __construct() 
    { 
        parent::__construct(); 
        $this->load->helper(array('cookie', 'url'));
		$this->load->model("Model_shopping");
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
		$data['product']=$this->Model_product->get_all_product();
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

		// var_dump($this->login);
		// exit();
		$this->load->view('header',$data_head);
		$this->load->view('product',$data);
		$this->load->view('footer');
	}
	public function product_kategori($kategori)
	{
		$data['product']=$this->Model_product->get_product_bykategori($kategori);
		$data['kategori']=$this->Model_product->get_kategori();

		$this->load->view('header');
		$this->load->view('product',$data);
		$this->load->view('footer');
	}

	public function detail($kode){
		$data['product']=$this->Model_product->get_product_bykode($kode); //get_product untuk deskripsi product
		$data['kategori']=$this->Model_product->get_kategori();
		$this->load->view('header');
		$this->load->view('product_detail',$data);
		$this->load->view('footer');

	}
}
