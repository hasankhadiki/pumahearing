<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
        $this->load->helper(array('form','url'));
	}


    public function index(){
        $this->load->helper('form');
       $data = $this->M_data->tampilkan();
		$this->load->view('home',array('data' => $data));
	}
        
  
}