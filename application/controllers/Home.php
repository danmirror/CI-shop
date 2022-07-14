<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	private $login;

	function __construct() 
    { 
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
		$this->load->model("Model_product");
		$data['product']=$this->Model_product->get_product(6);
		$data['login'] = $this->login;

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
		$this->load->view('home',$data);
		$this->load->view('footer');
	}
}
