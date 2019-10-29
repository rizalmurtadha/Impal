<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis_c extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_m');

		//load library form validation
		$this->load->library('form_validation'); 
	}


	public function index(){
		

		//from library form_validation, set  rules for nama, nim, email = required
		$this->form_validation->set_rules('nama', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|matches[password2]',[
			'matches' => 'Password do not match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|matches[password]');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('telp','Telp','required');


		//conditon in form_validation, if user input form = false, then load page "tambah" again
		if($this->form_validation->run() == false){
			$this->load->view('Register_v');

		//else, when successed {
		//call method "tambahDataMahasiswa" in Mahasiswa_model
		//use flashdata to to show alert "added success"
		//back to controller mahasiswa }	
		}else{
			switch($_POST['tipe']){
				case '1':
				    // do Something for 1
					$this->user_m->tambahKustomer();
				break;
				case '2':
				    // do Something for 2
					$this->user_m->tambahPemilik();
				break;
				
				//default:
				    // Something went wrong or form has been tampered.
			}
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('Welcome');
		}	

}

}

