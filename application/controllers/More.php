<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class More extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
        $this->load->helper(array('form','url'));
	}


    public function index(){
        $this->load->helper('form');
       $data = $this->M_data->ambil_data();
		$this->load->view('more',array('data' => $data));
	}
        
  
}