<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	private $login;

	function __construct() 
    { 
        parent::__construct(); 
        $this->load->helper(array('cookie', 'url'));
		
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
		$data['product']=$this->Model_product->get_product(20);
		$data['kategori']=$this->Model_product->get_kategori();
		$data['login'] = $this->login;
		// var_dump($this->login);
		// exit();
		$this->load->view('header',$data);
		$this->load->view('product',$data);
		$this->load->view('footer');
	}
	public function product_kategori($kategori)
	{
		$this->load->model("Model_product");
		$data['product']=$this->Model_product->get_product_bykategori($kategori);
		$data['kategori']=$this->Model_product->get_kategori();

		$this->load->view('header');
		$this->load->view('product',$data);
		$this->load->view('footer');
	}

	public function detail($kode){
		$this->load->model("Model_product");
		$data['product']=$this->Model_product->get_product_bykode($kode); //get_product untuk deskripsi product
		$data['kategori']=$this->Model_product->get_kategori();
		$this->load->view('header');
		$this->load->view('product_detail',$data);
		$this->load->view('footer');

	}
}
