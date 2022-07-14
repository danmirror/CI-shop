<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
    function __construct() 
    { 
        parent::__construct(); 
        $this->load->helper(array('cookie', 'url')); 
    } 

	public function login()
	{
        $post = $this->input->post();
		$this->load->model("Model_login");
		if($this->Model_login->login($post)){
            set_cookie('name',$post['name'],'3600'); 
            set_cookie('login','true','3600'); 
            redirect('home');
        }
		
	}

    public function registration()
	{
		$this->load->model("Model_login");
		if($this->Model_login->registrasi_save())
			redirect('home');
		
	}

    public function logout()
	{
        delete_cookie('login');
        delete_cookie('name'); 
        redirect('home'); 
		
	}
	
}
