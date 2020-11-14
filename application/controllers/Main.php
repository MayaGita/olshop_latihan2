<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
    $this->load->library('cart');
		//load model
		$this->load->model('Model_olshop');

	}

	   public function index(){
	    	$data['user']=$this->Model_olshop->select_user()->result();
	    	$this->load->view('Main/index2',$data);
	    }
	  
	    public function proses_tambah(){
	    	$data['username']=$_POST['username'];
	    	$data['email']=$_POST['email'];
	    	$data['no_telp']=$_POST['no_telp'];
	    	$data['password']=$_POST['password'];
	    

	    	$id=$this->Model_olshop->tambah_pasien($data);
	    	


	    	$this->Model_olshop->tambah_daftar($data2);
	    	redirect('Main/index');

	    }
	   public function login(){
	    	$this->load->view('Main/login');
	    }
	    public function register(){
	    	$this->load->view('main/register');
	    } 
	    
}
?>