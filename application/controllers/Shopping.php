<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model("Model_product");
		$this->load->library("cart"); //Apa cart?

	}
	public function index()
	{
		$data['cart_list']=$this->cart->contents(); // menampilkan isi dari cart

		$this->load->view('header');
		$this->load->view('shopping',$data);
		$this->load->view('footer');
	}

	public function add()
	{
		var_dump("masuk");
		exit();
		// $post = $this->input->post(); //mengambil inputan pada detail
		// $product=$this->Model_product->get_product_bykode($post['kode']);

		// //echo $product->hargajual;
		// //exit();

		// $data=array(
		// 	'id'=>$post['kode'],
		// 	'qty'=>$post['qty'],
		// 	'price'=>$product->hargajual,
		// 	'name'=>$product->merk,
		// 	'image'=>$product->foto		
		// );
		// $this->cart->insert($data); 
		// redirect('Shopping');

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
