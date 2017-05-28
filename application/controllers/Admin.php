<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
   
	}


public function index(){

		// $action = $this->load->post('login');
		$data = $this->M_data->ambil_data();
		$this->load->view('admin',array('data' => $data));	
	}


  public function edit_data($id_barang){
		$data = $this->M_data->cek_data($id_barang);
		/*$data = array(
			"id_barang" => $barang[0]['id_barang'],
			"merk" => $barang[0]['merk'],
			"model" => $barang[0]['model'],
			"tipe" => $barang[0]['tipe'],
            "deskripsi" => $barang[0]['deskripsi'],
			 );*/
		$this->load->view('form_edit',array('data'=>$data));

	}
    
    public function do_update($id_barang){
        
   $sender_email = 'iqbal@pumahearing.com';
  $user_password = 'puma120102';
  
  $username = $this->session->userdata('nama');

  // Configure email library
  $config['protocol'] = 'http';
  $config['smtp_host'] = 'mx1.hostinger.in';
  $config['smtp_timeout'] = '7';
  $config['smtp_port'] = 110;
  $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        //$config['validation'] = TRUE; // bool whether to validate email or not
  $config['smtp_user'] = $sender_email;
  $config['smtp_pass'] = $user_password;
            
  $this->load->library('email', $config);
  $this->email->set_newline("\r\n");

  // Sender email address
  $this->email->from($sender_email, $username);
  // Receiver email address
  $this->email->to('pujichoirul3@gmail.com');
  // Subject of email
  $this->email->subject('A change has occured');
  // Message in email
  $this->email->message('The user '.$username.' has updated an Item!');
        

  $this->email->send();
      
        
		//$id_barang = $_POST['id_barang'];
		$merk = $_POST['merk'];
		$model = $_POST['model'];
		$tipe =  $_POST['tipe'];
        $deskripsi =  $_POST['deskripsi'];
        
        
	 $config['upload_path']         = './assets/img';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100000;
		$config['max_width']            = 1920;
		$config['max_height']           = 1080;
        
        $this->upload->initialize($config);
 $file1=('assets/img/'.$_FILES['file1']['name']);
        
    
        
		
		$where = array('id_barang' => $id_barang);
		
		if(! $this->upload->do_upload('file1')){/*$poi=$this->upload->display_errors(); echo $poi;*/
        $data_update = array('merk' => $merk, 'model' => $model , 'tipe' =>$tipe, 'deskripsi'=>$deskripsi);
        $this->M_data->UpdateData('barang',$data_update,$where);
            redirect('Admin');
        } else { 
       
          $data_update = array('merk' => $merk, 'model' => $model , 'tipe' =>$tipe, 'deskripsi'=>$deskripsi, 'image'=>$file1);
            $this->M_data->UpdateData('barang',$data_update,$where);
			redirect('Admin');
            
		
        }
        
        
	}

    	public function do_delete($id_barang){
  $sender_email = 'iqbal@pumahearing.com';
  $user_password = 'puma120102';
  
  $username = $this->session->userdata('nama');

  // Configure email library
  $config['protocol'] = 'http';
  $config['smtp_host'] = 'mx1.hostinger.in';
  $config['smtp_timeout'] = '7';
  $config['smtp_port'] = 110;
  $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        //$config['validation'] = TRUE; // bool whether to validate email or not
  $config['smtp_user'] = $sender_email;
  $config['smtp_pass'] = $user_password;
            
  $this->load->library('email', $config);
  $this->email->set_newline("\r\n");

  // Sender email address
  $this->email->from($sender_email, $username);
  // Receiver email address
  $this->email->to('pujichoirul3@gmail.com');
  // Subject of email
  $this->email->subject('A change has occured');
  // Message in email
  $this->email->message('The user '.$username.' has deleted an Item!');
        

  $this->email->send();
            
        $where = array('id_barang' => $id_barang);
		$res = $this ->M_data->DeleteData('barang',$where); 
            
		if($res>=1){
			redirect('Admin');
		}
        
        
        }

    
    public function insert(){
        
         $sender_email = 'iqbal@pumahearing.com';
  $user_password = 'puma120102';
  
  $username = $this->session->userdata('nama');

  // Configure email library
  $config['protocol'] = 'http';
  $config['smtp_host'] = 'mx1.hostinger.in';
  $config['smtp_timeout'] = '7';
  $config['smtp_port'] = 110;
  $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        //$config['validation'] = TRUE; // bool whether to validate email or not
  $config['smtp_user'] = $sender_email;
  $config['smtp_pass'] = $user_password;
            
  $this->load->library('email', $config);
  $this->email->set_newline("\r\n");

  // Sender email address
  $this->email->from($sender_email, $username);
  // Receiver email address
  $this->email->to('pujichoirul3@gmail.com');
  // Subject of email
  $this->email->subject('A change has occured');
  // Message in email
  $this->email->message('The user '.$username.' has added an Item!');
        
        $this->email->send();
        
    	$id_barang = $_POST['id_barang'];
		$merk = $_POST['merk'];
		$model = $_POST['model'];
		$tipe =  $_POST['tipe'];
        $deskripsi =  $_POST['deskripsi'];
       

        
        $config['upload_path']         = './assets/img';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100000;
		$config['max_width']            = 1920;
		$config['max_height']           = 1080;
        
        $this->upload->initialize($config);
        
        //$this->load->library('upload', $config);
        
        $file1=('assets/img/'.$_FILES['file1']['name']);
        
       // $file1=($config['upload_path'].$_FILES['file1']['name']);
        
        $data_insert = array('id_barang'=>$id_barang, 'merk' => $merk, 'model' => $model , 'tipe' =>$tipe, 'deskripsi'=>$deskripsi, 'image'=>$file1);
        $res = $this->M_data->InsertData('barang',$data_insert);
        
if ( ! $this->upload->do_upload('file1')){
 $poi=$this->upload->display_errors();
	echo $poi;
}else{
	 if($res>=1){
			redirect('Admin');  
		}
}      
       
    }
    


} ?>