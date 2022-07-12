<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$data['product']=$this->Model_product->get_product(6);
		$data['login'] = $this->login;
		$this->load->view('header',$data);
		$this->load->view('home',$data);
		$this->load->view('footer');
	}
}
